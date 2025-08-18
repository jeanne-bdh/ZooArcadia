<?php

namespace App\Controller;

use App\Document\Contact;
use App\Form\ContactType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, DocumentManager $documentManager): Response
    {
        $contact = new Contact();
        $contact->setDateContact(new \DateTime());
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $documentManager->persist($contact);
            $documentManager->flush();
            $this->addFlash('success', 'Votre message a bien été envoyé');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('page/contact.html.twig', [
            'form' => $form,
        ]);
    }
}
