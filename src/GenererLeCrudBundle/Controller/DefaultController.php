<?php

namespace GenererLeCrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GenererLeCrudBundle:Default:index.html.twig');
    }
}
