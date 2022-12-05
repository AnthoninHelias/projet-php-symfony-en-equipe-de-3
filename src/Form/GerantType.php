<?php

namespace App\Form;

use App\Entity\Gerant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GerantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomutilisateur')
            ->add('motdepasse')
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('datedenaissance')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('telephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gerant::class,
        ]);
    }
}
