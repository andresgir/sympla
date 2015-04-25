<?php

namespace AGR\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AGRIndexBundle:Default:index.html.twig', array('name' => $name));
    }
}
