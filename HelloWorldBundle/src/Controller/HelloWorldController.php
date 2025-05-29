<?php

declare(strict_types=1);

namespace DBP\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@DBPHelloWorld/hello_world.html.twig');
    }
}
