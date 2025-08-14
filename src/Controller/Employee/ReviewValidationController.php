<?php

namespace App\Controller\Employee;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReviewValidationController extends AbstractController
{
    #[Route('/reviewValidation', name: 'app_review_validation')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('employee/reviewValidation.html.twig', [
            'user' => $user
        ]);
    }
}
