<?php

namespace App\Controller\Admin;

use App\Entity\Formules;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FormulesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formules::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
