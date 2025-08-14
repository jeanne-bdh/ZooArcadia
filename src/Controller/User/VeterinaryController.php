<?php

namespace App\Controller\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VeterinaryController extends AbstractController
{
    #[Route('/veterinary', name: 'app_veterinary')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('user/veterinary.html.twig', [
            'user' => $user
        ]);
    }
}
