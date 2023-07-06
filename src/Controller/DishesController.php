<?php

namespace App\Controller;


use App\Repository\DishesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DishesController extends AbstractController
{
    #[Route('/dishes', name: 'app_dishes')]
    public function index(DishesRepository $dishes): Response
    {
        return $this->render('dishes/index.html.twig', [
            'controller_name' => 'DishesController',
        ]);
    }
}
