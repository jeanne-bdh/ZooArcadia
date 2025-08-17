<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\VeterinaryReportRepository;

class VeterinaryReportConsultController extends AbstractController
{
    #[Route('/veterinaryReportConsult', name: 'app_veterinary_report_consult')]
    public function index(VeterinaryReportRepository $veterinaryReport): Response
    {
        $reports = $veterinaryReport->findAll();

        return $this->render('admin/veterinaryReportConsult.html.twig', [
            'reports' => $reports,
        ]);
    }
}
