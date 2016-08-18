<?php

namespace Appizens\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AssignmentBundle:Default:index.html.twig', array('name' => $name));
    }
}
