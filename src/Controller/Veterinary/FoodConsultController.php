<?php

namespace App\Controller\Veterinary;

use App\Repository\FoodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FoodConsultController extends AbstractController
{
    #[Route('/foodConsult', name: 'app_food_consult')]
    public function index(FoodRepository $foodRepository): Response
    {
        $foods = $foodRepository->findAll();

        return $this->render('veterinary/foodConsult.html.twig', [
            'foods' => $foods
        ]);
    }
}
