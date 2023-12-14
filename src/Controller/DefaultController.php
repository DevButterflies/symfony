<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test():Response
    {
        return $this->render('test.html.twig');
    }

    #[Route('/produits', name:'app_prod')]
    public function afficher(ProductRepository $pr):Response
    {
        return $this->render('prod.html.twig', [
            'produits' => $pr->findAll(),
        ]);
    }

}
