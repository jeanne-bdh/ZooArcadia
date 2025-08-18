<?php

namespace App\Controller;

use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OpeningHoursController extends AbstractController
{
    #[Route('/openingHours', name: 'app_opening_hours')]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        $hours = $openingHoursRepository->findAll();

        return $this->render('partials/_footer.html.twig', [
            'hours' => $hours,
        ]);
    }
}
