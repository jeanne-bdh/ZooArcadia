<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Food;
use App\Form\AnimalFoodType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimalFoodController extends AbstractController
{
    #[Route('/animalFood', name: 'app_animal_food')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $food = new Food();
        $food->setDateFood(new \DateTime());

        $form = $this->createForm(AnimalFoodType::class, $food);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $food->setUser($this->getUser());

            $entityManager->persist($food);
            $entityManager->flush();

            $this->addFlash('success', 'Le formulaire a été enregistrée avec succès');

            return $this->redirectToRoute('app_animal_food');
        }

        $foods = $entityManager->getRepository(Food::class)->findAll();

        return $this->render('employee/animalFood.html.twig', [
            'form' => $form,
            'foods' => $foods,
        ]);
    }

    #[Route('/animalsByBreed/{id}', name: 'animals_by_breed')]
    public function animalsByBreed(int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        $animals = $entityManager->getRepository(Animal::class)->findBy(['breed' => $id]);

        $results = [];
        foreach ($animals as $animal) {
            $results[] = [
                'id' => $animal->getId(),
                'name' => $animal->getAnimalName(),
            ];
        }

        return new JsonResponse($results);
    }
}
