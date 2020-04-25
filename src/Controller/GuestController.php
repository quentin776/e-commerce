<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GuestController extends AbstractController
{
    /**
     * @Route("/", name="guest")
     */
    public function index(ProduitRepository $produitRepository)
    {
        return $this->render('guest/index.html.twig', [
            'controller_name' => 'GuestController',
            'produits' => $produitRepository->findAll()
        ]);
    }
}
