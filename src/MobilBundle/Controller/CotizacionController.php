<?php

namespace MobilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
                $post = json_decode($postdata);

                // enviar mail
                $datos_mail = [
                    'nombre'    => $post->cotizacion->form->nombre,
                    'correo'    => $post->cotizacion->form->correo,
                    'telefono'  => $post->cotizacion->form->telefono,
                    'mensaje'   => $post->cotizacion->form->observacion,
                    'to'        => 'jonathanpadilla09@outlook.com',
                ];

                print_r($datos_mail);

                $this->enviarMail($datos_mail);

                // print_r($productos);
            }
        }

        exit;
    }

    // private function enviarCotizacion($form)
    // {
    //     $datos  = array();
    //     $datos['nombre']    = ($request->get('nombre', false))? $request->get('nombre'): 0;
    //     $datos['correo']    = ($request->get('correo', false))? $request->get('correo'): 0;
    //     $datos['telefono']  = ($request->get('telefono', false))? $request->get('telefono'): 0;
    //     $datos['mensaje']   = stripcslashes(nl2br(htmlentities($request->get('mensaje'))));
    //     $datos['to']        = 'jonathanpadilla09@outlook.com';

    //     print_r($form);
    // }

    public function enviarMail($arr = false)
    {
        $return = false;
        if(is_array($arr))
        {
            $headers = "From: " . $arr['correo'] . "\r\n";
            $headers .= "Reply-To: ". $arr['correo']. "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $contenido = $this->renderView('BaseBundle:Default:plantilla_email_ventas.html.twig',array('datos' => $arr));
            // echo $contenido; exit;
            if(mail($arr['to'], 'www.tuciudad.cl - '.$arr['nombre'], $contenido, $headers))
            {
                $return = true;
                echo 'enviado';
            }else{
                echo 'no enviado';
            }
        }
        return $return;
    }
}
