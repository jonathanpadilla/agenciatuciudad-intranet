<?php

namespace MobilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MobilBundle:Default:index.html.twig');
    }
}
