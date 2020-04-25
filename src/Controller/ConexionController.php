<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConexionController extends AbstractController
{
    /**
     * @Route("/conexion", name="conexion")
     */
    public function index()
    {
        return $this->render('conexion/index.html.twig', [
            'controller_name' => 'ConexionController',
        ]);
    }
}
