<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use App\Repository\DishesRepository;
use App\Repository\MenusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenusController extends AbstractController
{
    #[Route('/menus', name: 'app_menus', methods: ['GET'])]
    public function index(MenusRepository $menusRepository, DishesRepository $dishesRepository, CategoriesRepository $categoriesRepository): Response
    {
        $menus = $menusRepository->findAll();
        $categories = $categoriesRepository->findAll();
        $result = [];
        foreach ($menus as $menu) {
            $menuResult = [
                'title' => $menu->getTitle(),
                'categories' => []
            ];
            foreach ($categories as $cat) {
                $dishes = $dishesRepository->findAllByMenuAndCategory($menu, $cat);
                $catDishes = [
                    'catName' => $cat->getTitle(),
                    'dishes' => $dishes
                ];
                array_push($menuResult['categories'], $catDishes);
            }
            array_push($result, $menuResult);
        }

        // dd($result);

        
        return $this->render('menus/index.html.twig', [
            'menus' => $result,
            'dishes' => $dishesRepository->findAll(),
            'categories' => $categoriesRepository->findAll(),
            
        ]);
    }
}
