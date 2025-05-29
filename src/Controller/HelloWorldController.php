<?php

declare(strict_types=1);

namespace DBP\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloWorldController extends AbstractController
{
    public function index(Request $request): Response
    {
        $name = $request->query->get('name', 'Hoai Chuong');
        return $this->render('@DBPHelloWorld/hello_world.html.twig',compact('name'));
    }
}
