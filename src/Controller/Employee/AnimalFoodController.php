<?php

namespace App\Controller\Employee;

use App\Repository\AnimalRepository;
use App\Repository\BreedRepository;
use App\Repository\FoodTypeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalFoodController extends AbstractController
{
    #[Route('/animalFood', name: 'app_animal_food')]
    public function index(BreedRepository $breedRepository, AnimalRepository $animalRepository, FoodTypeRepository $foodTypeRepository): Response
    {
        $breeds = $breedRepository->findAll();
        $animals = $animalRepository->findAll();
        $foodTypes = $foodTypeRepository->findAll();

        return $this->render('employee/animalFood.html.twig', [
            'breeds' => $breeds,
            'animals' => $animals,
            'foodTypes' => $foodTypes
        ]);
    }
}
