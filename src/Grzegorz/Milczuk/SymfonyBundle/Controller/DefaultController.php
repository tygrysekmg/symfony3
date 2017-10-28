<?php

namespace Grzegorz\Milczuk\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GrzegorzMilczukSymfonyBundle:Default:index.html.twig');
    }
}
