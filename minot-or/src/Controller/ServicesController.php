<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServicesController extends AbstractController
{
    #[Route('/services', name: 'services')]
    public function index(): Response
    {
        return $this->render('services/index.html.twig', [
            'controller_name' => 'Services',
        ]);
    }
}
