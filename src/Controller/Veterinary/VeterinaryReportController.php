<?php

namespace App\Controller\Veterinary;

use App\Entity\VeterinaryReport;
use App\Form\VeterinaryReportType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VeterinaryReportController extends AbstractController
{
    #[Route('/veterinaryReport', name: 'app_veterinary_report')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $report = new VeterinaryReport();
        $report->setDatePassage(new \DateTime());

        $form = $this->createForm(VeterinaryReportType::class, $report);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $report->setUser($this->getUser());

            $entityManager->persist($report);
            $entityManager->flush();

            $this->addFlash('success', 'Le compte rendu a été enregistré avec succès');

            return $this->redirectToRoute('app_veterinary_report');
        }

        $reports = $entityManager->getRepository(VeterinaryReport::class)->findAll();

        return $this->render('veterinary/veterinaryReport.html.twig', [
            'form' => $form,
            'reports' => $reports,
        ]);
    }
}
