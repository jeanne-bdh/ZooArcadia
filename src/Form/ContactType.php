<?php

namespace App\Form;

use App\Document\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre :',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Sujet'
                ],
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email :',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'votre-email@mail.com'
                ],
                'required' => true
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message :',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Bonjour...',
                    'rows' => 4
                ],
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
