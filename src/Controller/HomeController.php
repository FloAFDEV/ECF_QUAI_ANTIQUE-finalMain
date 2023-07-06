<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GalleryRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(GalleryRepository $galleryRepository): Response

    {
        $images = $galleryRepository->findAll();
        // dd($images);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Restaurant Quai Antique',
            'images' => $images
            
        ]);
    }
}
