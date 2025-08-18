<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Breed;
use App\Entity\FoodType;
use App\Entity\State;
use App\Entity\VeterinaryReport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeterinaryReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('breed', EntityType::class, [
                'label' => 'Animal',
                'class' => Breed::class,
                'choice_label' => 'breedName',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-select', 'id' => 'breed-select'],
                'placeholder' => '-- Sélectionner un animal --',
                'required' => true,
                'mapped' => false,
            ])
            ->add('animal', EntityType::class, [
                'label' => 'Prénom',
                'class' => Animal::class,
                'choice_label' => 'animalName',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-select', 'id' => 'animal-select'],
                'placeholder' => '-- Sélectionner le prénom --',
                'required' => true,
            ])
            ->add('state', EntityType::class, [
                'label' => 'Etat',
                'class' => State::class,
                'choice_label' => 'stateName',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-select'],
                'placeholder' => '-- Sélectionner son état --',
                'required' => true,
            ])
            ->add('foodType', EntityType::class, [
                'label' => 'Nourriture',
                'class' => FoodType::class,
                'choice_label' => 'foodType',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-select'],
                'placeholder' => '-- Sélectionner la nourriture --',
                'required' => true,
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité (g)',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0',
                    'min' => 0
                ],
                'required' => true,
            ])
            ->add('datePassage', DateType::class, [
                'label' => 'Date',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'max' => (new \DateTime())->format('Y-m-d')
                ],
                'required' => true,
            ])
            ->add('observation', TextareaType::class, [
            'label' => 'Observation',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Dents en bon état...',
                    'rows' => 4
                ],
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VeterinaryReport::class,
        ]);
    }
}
