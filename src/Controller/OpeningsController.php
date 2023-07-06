<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpeningsController extends AbstractController
{
    #[Route('/openings', name: 'app_openings')]
    public function index(): Response
    {
        return $this->render('openings/index.html.twig', [
            'controller_name' => 'OpeningsController',
        ]);
    }
}
