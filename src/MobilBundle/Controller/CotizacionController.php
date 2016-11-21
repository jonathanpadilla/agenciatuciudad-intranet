<?php

namespace MobilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BaseBundle\Entity\PerPersona;
use BaseBundle\Entity\OrgOrganizacion;
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
                $post = json_decode($postdata, true);

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

                if($this->agregarCliente($datos_mail))
                {
                    if($this->enviarMail($datos_mail))
                    {

                    }
                }

                // print_r($productos);
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
            echo $contenido; exit;
            if(mail($arr['to'], 'www.tuciudad.cl - '.$arr['nombre'], $contenido, $headers))
            {
                $return = true;
                // echo 'enviado';
            }
        }
        return $return;
    }

    private function agregarCliente($arr = false)
    {
        // print_r(strtoupper($arr['nombre']));exit;
        $return = false;
        if(is_array($arr))
        {
            $em_per = $this->getDoctrine()->getManager('tuciudad_persona');

            // guardar persona
            $persona = new PerPersona(strtoupper($arr['nombre']));
            $persona->setPerPrimerNombre();
            $persona->setPerFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

            $em_per->persist($persona);
            $em_per->flush();

            // guardar organizacion
            if($arr['organizacion'])
            {
                $em_org = $this->getDoctrine()->getManager('tuciudad_organizacion');

                $organizacion = new OrgOrganizacion();
                $organizacion->setOrgNombre($arr['organizacion']);
                $organizacion->setOrgFechaRegistro(new \DateTime(date("Y-m-d H:i:s")));

                $em_org->persist($organizacion);
                $em_org->flush();
            }
        }

        return $return;
    }
}
