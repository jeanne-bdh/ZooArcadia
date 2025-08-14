<?php

namespace App\Controller\User;

use App\Entity\Food;
use App\Entity\Review;
use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class EmployeeController extends AbstractDashboardController
{
    #[Route('/employee', name: 'app_employee')]
    public function index(): Response
    {
        return $this->render('user/employee.html.twig');
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
        yield MenuItem::linkToCrud('Valider les avis', 'fa-solid fa-clipboard-check', Review::class);
        yield MenuItem::linkToCrud('Gérer les services', 'fa-solid fa-bell-concierge', Service::class);
        yield MenuItem::linkToCrud('Partager', 'fa-solid fa-seedling', Food::class);
    }
}
