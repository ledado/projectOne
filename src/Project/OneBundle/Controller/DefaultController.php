<?php

namespace Project\OneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjectOneBundle:Default:index.html.twig', array('name' => $name));
    }
}
