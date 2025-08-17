<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Breed;
use App\Entity\Food;
use App\Entity\FoodType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalFoodType extends AbstractType
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
                'placeholder' => '-- Sélectionner un prénom --',
                'required' => true,
            ])
            ->add('dateFood', DateType::class, [
                'label' => 'Date',
                'label_attr' => ['class' => 'form-label'],
                'attr' => [
                    'class' => 'form-control',
                    'max' => (new \DateTime())->format('Y-m-d')
                ],
                'required' => true,
            ])
            ->add('time', TimeType::class, [
                'label' => 'Heure',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'form-control'],
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Food::class,
        ]);
    }
}
