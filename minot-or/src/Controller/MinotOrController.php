<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MinotOrController extends AbstractController
{
    #[Route('/minot/or', name: 'minot_or')]
    public function index(): Response
    {
        return $this->render('minot_or/index.html.twig', [
            'controller_name' => 'MinotOrController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('minot_or/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }
}
