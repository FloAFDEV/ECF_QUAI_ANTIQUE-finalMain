<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulesController extends AbstractController
{
    #[Route('/formules', name: 'app_formules')]
    public function index(): Response
    {
        return $this->render('formules/index.html.twig', [
            'controller_name' => 'FormulesController',
        ]);
    }
}
