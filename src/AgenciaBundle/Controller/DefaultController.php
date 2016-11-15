<?php

namespace AgenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgenciaBundle:Default:index.html.twig');
    }
}
