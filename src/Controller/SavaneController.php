<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SavaneController extends AbstractController
{
    #[Route('/savane', name: 'app_savane')]
    public function index(): Response
    {
        return $this->render('habitat/savane.html.twig');
    }
}
