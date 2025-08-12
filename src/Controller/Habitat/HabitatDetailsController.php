<?php

namespace App\Controller\Habitat;

use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HabitatDetailsController extends AbstractController
{
    #[Route('/habitatDetails/{id}', name: 'app_habitat_details')]
    public function index(int $id, HabitatRepository $habitatRepository): Response
    {
        $habitat = $habitatRepository->find($id);

        return $this->render('habitat/habitatDetails.html.twig', [
            'habitat' => $habitat
        ]);
    }
}
