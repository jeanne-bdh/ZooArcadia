<?php

namespace App\Controller\Employee;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeeController extends AbstractController
{
    #[Route('/employee', name: 'app_employee')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('employee/employee.html.twig', [
            'user' => $user
        ]);
    }
}
