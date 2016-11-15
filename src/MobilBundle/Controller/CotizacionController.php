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
    					if($producto = $em->getRepository('BaseBundle:ProProducto')->findOneBy(array('proIdPk' => $value->producto )))
		    			{
		    				// $datos->nombre = $producto->
		    			}
    				}else{
    					$datos->tipo = 'item';
    				}
    				$datos->producto = $value->producto;
    				$datos->item = $value->item;

    				$array[] = $datos;
    			}

    			echo '<pre>';
    			print_r($array);

    		}else{
    			print_r('Datos');
    		}

    	}else{
    		print_r('Error de datos');
    	}

    	exit;
    }
}
