<?php

namespace App\Controller\Admin;


use App\Entity\Categories;
use App\Entity\Dishes;
use App\Entity\Formules;
use App\Entity\Gallery;
use App\Entity\Menus;
use App\Entity\Openings;
use App\Entity\Reservations;
use App\Entity\Restaurant;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ECF QUAI ANTIQUE');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Catégories', 'fas fa-random', Categories::class);
        yield MenuItem::linkToCrud('Plats', 'fas fa-utensils', Dishes::class);
        yield MenuItem::linkToCrud('Formules', 'fab fa-wpforms', Formules::class);
        yield MenuItem::linkToCrud('Galerie', 'fas fa-images', Gallery::class);
        yield MenuItem::linkToCrud('Menus', 'fas fa-map', Menus::class);
        yield MenuItem::linkToCrud('Heures d\'ouvertures', 'fas fa-hourglass', Openings::class);
        yield MenuItem::linkToCrud('Réservations', 'far fa-calendar', Reservations::class);
        yield MenuItem::linkToCrud('Restaurant', 'fas fa-building', Restaurant::class);
        yield MenuItem::linkToCrud('Clients', 'fas fa-user-alt', User::class);
    }
}
//php bin/console make:admin:crud
