<?php

namespace App\Controller\Admin;

use App\Entity\OpeningHours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class OpeningHoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OpeningHours::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield TextField::new('day', 'Jour');
        yield TimeField::new('openTime', 'Heure d\'ouverture');
        yield TimeField::new('closeTime', 'Heure de fermeture');
    }
}
