<?php

namespace MobilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BaseBundle\Entity\PerPersona;
use BaseBundle\Entity\PerContacto;
use BaseBundle\Entity\PerLog;
use BaseBundle\Entity\CliUsuario;
use BaseBundle\Entity\CliCotizacion;
use BaseBundle\Entity\OrgOrganizacion;
use BaseBundle\Entity\OrgOrganizacionNnPersona;
use \stdClass;

class CotizacionController extends Controller
{
    public function informacionProductoAction(Request $request)
    {
    	
    	if( $request->getMethod() == 'POST' )
    	{
    		if($postdata = file_get_contents("php://input"))
    		{
    			$post = json_decode($postdata);
    			$em   = $this->getDoctrine()->getManager('tuciudad_producto');

    			$array = array();
    			foreach($post->producto as $value)
    			{
    				$datos = new stdClass();

    				if($value->item == 0)
    				{
    					$nombre = 'Sin información';
    					if($producto = $em->getRepository('BaseBundle:ProProducto')->findOneBy(array('proIdPk' => $value->producto )))
		    			{
		    				$nombre = $producto->getProNombre();
		    			}
		    			$datos->nombre = $nombre;
    				}else{
    					$nombre = 'Sin información';
    					if($producto = $em->getRepository('BaseBundle:ProItem')->findOneBy(array('iteIdPk' => $value->item )))
		    			{
		    				$nombre = $producto->getIteNombre();
		    			}
		    			$datos->nombre = $nombre;
    				}
    				$datos->producto = $value->producto;
    				$datos->item = $value->item;

    				$array[] = $datos;
    			}

    			echo json_encode(array('result' => $array));

    		}else{
    			print_r('Datos');
    		}

    	}else{
    		print_r('Error de datos');
    	}

    	exit;
    }

    public function informacionProductoTotalAction(Request $request)
    {
        if( $request->getMethod() == 'POST' )
        {
            if($postdata = file_get_contents("php://input"))
            {
                $post = json_decode($postdata);
                $em   = $this->getDoctrine()->getManager('tuciudad_producto');

                $array = array();
                $total = 0;
                foreach($post->producto as $value)
                {

                    if($value->item == 0)
                    {
                        if($producto = $em->getRepository('BaseBundle:ProProducto')->findOneBy(array('proIdPk' => $value->producto )))
                        {
                            // $nombre = $producto->getProNombre();

                            $array[$value->pedido]['pedido'] = $value->pedido;
                            $array[$value->pedido]['nombre'] = $producto->getProNombre();
                            $array[$value->pedido]['foto'] = 'placeholder.png';
                        }
                    }else{
                        if($producto = $em->getRepository('BaseBundle:ProItem')->findOneBy(array('iteIdPk' => $value->item )))
                        {
                            $array[$value->pedido]['items'][]['nombre'] = $producto->getIteNombre();
                            $total += $producto->getIteValor();

                            if(isset($array[$value->pedido]['valor']))
                            {
                                $array[$value->pedido]['valor'] += $producto->getIteValor();
                            }else{
                                $array[$value->pedido]['valor'] = $producto->getIteValor();
                            }
                        }
                    }

                }

                // print_r($array);
                echo json_encode(array('result' => $array, 'total' => number_format($total, 0, ',', '.')));
            }
        }
        exit;
    }

    public function enviarAction(Request $request)
    {
        if( $request->getMethod() == 'POST' )
        {
            if($postdata = file_get_contents("php://input"))
            {
                $post   = json_decode($postdata, true);
                $result = true;

                $id_persona = 47;
                $id_usuario = 1;

                // enviar mail
                $datos_mail = [
                    'nombre'        => ucwords($post['cotizacion']['form']['nombre']),
                    'correo'        => $post['cotizacion']['form']['correo'],
                    'organizacion'  => ucfirst($post['cotizacion']['form']['organizacion']),
                    'telefono'      => $post['cotizacion']['form']['telefono'],
                    'mensaje'       => $post['cotizacion']['form']['observacion'],
                    'productos'     => $post['cotizacion']['productos'],
                    'to'            => $post['cotizacion']['form']['correo'],
                    // 'to'            => 'jonathanpadilla0109@gmail.com',
                ];

                // print_r($datos_mail['nombre']);exit;

                // agregar persona
                if($persona = $this->agregarPersona($datos_mail))
                {
                    // enviar correo
                    if($email = $this->enviarMail($datos_mail))
                    {
                        // guardar cotizacion
                        if($id_cotizacion = $this->guardarCotizacion($datos_mail, $persona, $email, $id_usuario))
                        {
                            // guardar log
                            $this->setLog($id_persona, $id_cotizacion, 1, 'Registrado mediante app, Cotización enviada.');
                            $result = true;
                        }
                    }
                }

                echo json_encode(['result' => $result]);
            }
        }

        exit;
    }

    // FUNCIONES PRIVADAS

    private function enviarMail($arr = false)
    {
        // print_r($productos);

        $return = false;
        if(is_array($arr))
        {
            $headers = "From: jonathanpadilla0109@gmail.com\r\n";
            $headers .= "Reply-To: jonathanpadilla0109@gmail.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $contenido = $this->renderView('BaseBundle:Plantillas:plantilla_email_ventas.html.twig', array('datos' => $arr));
            // echo $contenido; exit;
            if(mail($arr['to'], 'www.tuciudad.cl - '.$arr['nombre'], $contenido, $headers))
            {
                $return = $contenido;
            }
        }
        return $return;
    }

    private function agregarPersona($arr = false, $html = false)
    {
        // print_r(strtoupper($arr['nombre']));exit;
        $return = false;
        if(is_array($arr))
        {
            $em_per = $this->getDoctrine()->getManager('tuciudad_persona');
            $em_def = $this->getDoctrine()->getManager('tuciudad_defecto');

            // guardar persona
            $persona = new PerPersona();
            $persona->setPerPrimerNombre(strtoupper($arr['nombre']));
            $persona->setPerFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

            $em_per->persist($persona);
            $em_per->flush();

            // guardar organizacion
            if($arr['organizacion'])
            {
                $em_org = $this->getDoctrine()->getManager('tuciudad_organizacion');

                $organizacion = new OrgOrganizacion();
                $organizacion->setOrgNombre(strtoupper($arr['organizacion']));
                $organizacion->setOrgFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                $em_org->persist($organizacion);
                $em_org->flush();

                if($organizacion->getOrgIdPk())
                {
                    $onnp = new OrgOrganizacionNnPersona();
                    $onnp->setOnnpVinculo(1);
                    $onnp->setOnnpOrganizacionFk($organizacion);
                    $onnp->setOnnpPersonaFk($persona);
                    $onnp->setOnnpFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                    $em_org->merge($onnp);
                    $em_org->flush();
                }
            }

            // guardar contacto
            if($arr['correo'] || $arr['telefono'])
            {
                // insertar correo
                if($arr['correo'])
                {
                    $fkTipoCorreo = $em_def->getRepository('BaseBundle:DefTipoContacto')->findOneBy(array('ctiIdPk' => 3 ));

                    $correo = new PerContacto();
                    $correo->setConTipoFk($fkTipoCorreo);
                    $correo->setConPersonaFk($persona);
                    $correo->setConContacto($arr['correo']);
                    $correo->setConHabilitado(1);
                    $correo->setConFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                    $em_per->merge($correo);
                }

                // insertar telefono
                if($arr['telefono'])
                {
                    $fk_tipo_telefono = $em_def->getRepository('BaseBundle:DefTipoContacto')->findOneBy(array('ctiIdPk' => 2 ));

                    $telefono = new PerContacto();
                    $telefono->setConTipoFk($fk_tipo_telefono);
                    $telefono->setConPersonaFk($persona);
                    $telefono->setConContacto($arr['telefono']);
                    $telefono->setConHabilitado(1);
                    $telefono->setConFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                    $em_per->merge($telefono);
                }

                $em_per->flush();
            }

            $return = $persona;

        }

        return $return;
    }

    private function guardarCotizacion($arr = false, $persona = false, $html = false, $id_usuario = 0)
    {
        $return = false;

        // // guardar cliente
        if(is_array($arr) && $html)
        {
            $em_cli = $this->getDoctrine()->getManager('tuciudad_cliente');
            $em_age = $this->getDoctrine()->getManager('tuciudad_agencia');

            $fk_tipo_usuario    = $em_cli->getRepository('BaseBundle:CliUsuarioTipo')->findOneBy(array('utiIdPk' => 1 ));

            $cliente = new CliUsuario();
            $cliente->setUsuPersonaFk($persona);
            $cliente->setUsuTipoFk($fk_tipo_usuario);
            $cliente->setUsuCorreo($arr['correo']);
            $cliente->setUsuFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

            $em_cli->merge($cliente);
            $em_cli->flush();

            // guardar cotizacion
            if($html)
            {
                $fk_cliente = $em_cli->getRepository('BaseBundle:CliUsuario')->findOneBy( array('usuPersonaFk' => $cliente->getUsuPersonaFk()->getPerIdPk() ));
                $fk_usuario = $em_age->getRepository('BaseBundle:AgeUsuario')->findOneBy( array('usuIdPk' => $id_usuario ));

                $cotizacion = new CliCotizacion();
                $cotizacion->setCotVendedorFk($fk_usuario);
                $cotizacion->setCotUsuarioFk($fk_cliente);
                $cotizacion->setCotDetalle($html);
                $cotizacion->setCotObservacion('Pendiente');
                $cotizacion->setCotEstado(1);
                $cotizacion->setCotFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                $em_cli->merge($cotizacion);
                $em_cli->flush();

                $last_id = $em_cli->getRepository('BaseBundle:CliCotizacion')->findOneBy( ['cotVendedorFk' => $fk_usuario->getUsuIdPk()], ['cotIdPk' => 'DESC'] );

                // print_r($last_id);
                $return = $last_id->getCotIdPk();
            }
        }

        return $return;
    }

    private function setLog($id_persona = false, $id_entidad = 0, $tipo = 0, $detalle = 'Sin definir')
    {
        $return = false;
        
        if($id_persona)
        {
            $em_per = $this->getDoctrine()->getManager('tuciudad_persona');

            $fk_persona = $em_per->getRepository('BaseBundle:PerPersona')->findOneBy( array('perIdPk' => $id_persona ));

            $log = new PerLog();
            $log->setLogPersonaPk($fk_persona);
            $log->setLogEntidadNfk($id_entidad);
            $log->setLogTipo($tipo);
            $log->setLogDetalle($detalle);
            $log->setLogFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

            $em_per->persist($log);
            $em_per->flush();

            $return = true;
        }

        return $return;
    }
}
