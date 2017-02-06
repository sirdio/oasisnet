<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function inicioAction(Request $request)
    {
        return $this->render('AppBundle:Default:login.html.twig');
    }

    public function acercaAction(Request $request)
    {
        return $this->render('AppBundle:Default:acerca.html.twig');
    }

    public function servicioAction(Request $request)
    {
        return $this->render('AppBundle:Default:servicios.html.twig');
    }

    public function contactoAction(Request $request)
    {
        return $this->render('AppBundle:Default:contacto.html.twig');
    }

    public function socioAction(Request $request)
    {
        return $this->render('AppBundle:Default:socioswips.html.twig');
    }

    public function vermapaAction(Request $request)
    {
        return $this->render('AppBundle:Default:moostrarmapa.html.twig');
    }    
}
