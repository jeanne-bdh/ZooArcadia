<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HabitatRepository $habitatRepository, AnimalRepository $animalRepository): Response
    {
        $habitats = $habitatRepository->findAll();
        $animals = $animalRepository->findAll();

        return $this->render('page/index.html.twig', [
            'habitats' => $habitats,
            'animals' => $animals
        ]);
    }
}
