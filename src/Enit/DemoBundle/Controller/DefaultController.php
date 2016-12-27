<?php

namespace Enit\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnitDemoBundle:Default:index.html.twig', [
            'name' => $name,
        ]);
    }
}
