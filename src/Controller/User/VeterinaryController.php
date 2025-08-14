<?php

namespace App\Controller\User;

use App\Entity\Food;
use App\Entity\VeterinaryReport;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class VeterinaryController extends AbstractDashboardController
{
    #[Route('/veterinary', name: 'app_veterinary')]
    public function index(): Response
    {
        return $this->render('user/veterinary.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        $home = $this->generateUrl('app_home');
        
        return Dashboard::new()
            ->setTitle('<a href="' . $home . '">Zoo Arcadia</a>');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa-solid fa-house');
        yield MenuItem::linkToCrud('Consulter les consommations', 'fa-solid fa-image', Food::class);
        yield MenuItem::linkToCrud('Saisir un compte rendu', 'fa-solid fa-bell-concierge', VeterinaryReport::class);
    }
}
