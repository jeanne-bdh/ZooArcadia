<?php

namespace App\Controller\Admin;

use App\Entity\Consultation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ConsultationController extends AbstractController
{
    #[Route('/consultation', name: 'app_consultation', methods: ['POST'])]
    public function index(Consultation $consultation, EntityManagerInterface $entityManager): JsonResponse
    {
        $consultation->setCounter($consultation->getCounter() + 1);
        $entityManager->flush();

        return new JsonResponse(['counter' => $consultation->getCounter()]);
    }

    #[Route('/stats', name: 'app_stats', methods: ['GET'])]
    public function stats(EntityManagerInterface $entityManager): JsonResponse
    {
        $stat = $entityManager->getRepository(Consultation::class);

        $data = $stat->createQueryBuilder('c')
            ->select('c.dateConsultation, SUM(c.counter) as total')
            ->groupBy('c.dateConsultation')
            ->orderBy('c.dateConsultation', 'ASC')
            ->getQuery()
            ->getArrayResult();

        return new JsonResponse($data);
    }
}
