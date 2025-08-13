<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimalController extends AbstractController
{
    #[Route('/animal/{id}', name: 'app_animal')]
    public function index(int $id, AnimalRepository $animalRepository): Response
    {
        $animal = $animalRepository->find($id);

        return $this->render('page/animal.html.twig', [
            'animal' => $animal
        ]);
    }
}
