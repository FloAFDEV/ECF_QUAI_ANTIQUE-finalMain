<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Repository\ReservationsRepository;
use App\Repository\RestaurantRepository;
use App\Form\ReservationType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(EntityManagerInterface $entityManager, Request $request, ReservationsRepository $reservationRepository, RestaurantRepository $restaurantRepository): Response
    {
        // just set up a fresh $task object (remove the example data)
        $reservation = new Reservations();

        $form = $this->createForm(ReservationType::class, $reservation);

        $restaurant = $restaurantRepository->find(1);
    
        $form->handleRequest($request);
        // dd($reservation);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $reservation = $form->getData();

            if ($reservation->getPersons() > $restaurant->getMaximumCapacity()) {
                $this->addFlash('danger', 'Il n\'y a plus de place pour cette date');
                return $this->redirectToRoute('app_reservation');
            }

            $entityManager->persist($reservation);
            $entityManager->flush();
            return $this->redirectToRoute('reservation_success');
        }

        return $this->render('reservation/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/reservation/success', name: 'reservation_success')]
    public function success(ReservationsRepository $reservationRepository): Response
    {
        return $this->render('reservation/success.html.twig');
    }
}
