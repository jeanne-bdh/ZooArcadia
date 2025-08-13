<?php

namespace App\Controller\Habitat;

use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HabitatController extends AbstractController
{
    #[Route('/habitat', name: 'app_habitat')]
    public function index(HabitatRepository $habitatRepository): Response
    {
        $habitats = $habitatRepository->findAll();

        return $this->render('habitat/habitat.html.twig', [
            'habitats' => $habitats
        ]);
    }

    #[Route('/habitatDetails/{id}', name: 'app_habitat_details')]
    public function detail(int $id, HabitatRepository $habitatRepository): Response
    {
        $habitat = $habitatRepository->find($id);

        return $this->render('habitat/habitatDetails.html.twig', [
            'habitat' => $habitat
        ]);
    }
}