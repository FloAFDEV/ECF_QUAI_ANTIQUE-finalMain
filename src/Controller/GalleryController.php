<?php

namespace App\Controller;

use App\Repository\GalleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    #[Assert\Image(
        mimeTypes: ['image/jpeg', 'image/png', 'image/gif', 'image/jpg', 'image/webp'],
        mimeTypesMessage: 'Veuillez choisir un fichier de type image',
        minWidth: 200,
        maxWidth: 400,
        minHeight: 200,
        maxHeight: 400,
    )]
    public function nos_plats(GalleryRepository $galleryRepository): Response
    {
        $gallery = $galleryRepository->findAllWithAlt();
        dd($gallery);
        return $this->render('home/index.html.twig', [
            'gallery' => $gallery
            
        ]);
    }

    public function index(GalleryRepository $galleryRepository): Response
    {
        $gallery = $galleryRepository->findAllWithAlt();

        return $this->render('gallery/index.html.twig', [
            'gallery' => $gallery,
        ]);
    }

}




