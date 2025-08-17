<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HabitatRepository $habitatRepo, AnimalRepository $animalRepo, ServiceRepository $serviceRepo): Response
    {
        $habitats = $habitatRepo->findAll();
        $animals = $animalRepo->findAll();
        $services = $serviceRepo->findAll();

        return $this->render('page/index.html.twig', [
            'habitats' => $habitats,
            'animals' => $animals,
            'services' => $services,
        ]);
    }
}
