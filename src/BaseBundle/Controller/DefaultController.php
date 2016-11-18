<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	// test json
    	$arr = [
    		'1' => [
    			'nombre' 	=> 'Letrero',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(1)',
    			'sub'		=> [
    				'1' => [
    					'nombre' 	=> 'Backlight',
    					'imagen' 	=> 'placeholder.png',
    					'visible'	=> true,
    					'valor'		=> 0,
    					'next' 		=> 'seleccionarItem(1)',
    					'sub'		=> [
    						'4' => [
    							'nombre' 	=> 'Con caja',
		    					'imagen' 	=> 'placeholder.png',
		    					'visible'	=> true,
    							'valor'		=> 0,
		    					'next' 		=> 'seleccionarItem(4)',
		    					'sub'		=> [
		    						'6' => [
		    							'nombre' 	=> 'Con luz',
				    					'imagen' 	=> 'placeholder.png',
				    					'visible'	=> true,
    									'valor'		=> 0,
				    					'next' 		=> 'seleccionarItem(6)',
				    					'sub' 		=> false,
		    						],
		    						'7' => [
		    							'nombre' 	=> 'Sin luz',
				    					'imagen' 	=> 'placeholder.png',
				    					'visible'	=> false,
    									'valor'		=> 0,
				    					'next' 		=> 'seleccionarItem(7)',
				    					'sub' 		=> false,
		    						],
		    					]
    						],
    						'5' => [
    							'nombre' 	=> 'Sin caja',
		    					'imagen' 	=> 'placeholder.png',
		    					'visible'	=> false,
    							'valor'		=> 0,
		    					'next' 		=> 'seleccionarItem(5)',
		    					'sub' 		=> false,
    						],
    					]
    				],
    				'2' => [
    					'nombre' 	=> 'Pendon',
    					'imagen' 	=> 'placeholder.png',
    					'visible'	=> true,
    					'valor'		=> 0,
    					'next' 		=> 'seleccionarItem(2)',
    					'sub' 		=> false,
    				],
    				'3' => [
    					'nombre' 	=> 'Acrilico',
    					'imagen' 	=> 'placeholder.png',
    					'visible'	=> true,
    					'valor'		=> 0,
    					'next' 		=> 'seleccionarItem(3)',
    					'sub' 		=> false,
    				],
    			]
    		],
    		'2' => [
    			'nombre' 	=> 'Páginas web',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(2)',
    			'sub' 		=> false,
    		],
    		'3' => [
    			'nombre' 	=> 'Papeleria',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(3)',
    			'sub' 		=> false,
    		],
    		'4' => [
    			'nombre' 	=> 'Intranet',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(4)',
    			'sub' 		=> false,
    		],
    		'5' => [
    			'nombre' 	=> 'Branding',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(5)',
    			'sub' 		=> false,
    		],
    		'6' => [
    			'nombre' 	=> 'Campañas',
    			'imagen' 	=> 'placeholder.png',
    			'visible'	=> true,
    			'valor'		=> 0,
    			'next' 		=> 'seleccionarItem(6)',
    			'sub' 		=> false,
    		],
    	];

    	echo '<pre>';print_r($arr);echo '</pre>';
    	echo '<hr>';
    	echo 'Buscar<br>';

    	foreach($arr as $key => $value)
    	{
    		
    	}

    	echo '<hr>';
    	echo json_encode($arr);
    	exit;
        // return $this->render('BaseBundle:Default:index.html.twig');
    }

    private function buscarArr($arr)
    {

    }
}
