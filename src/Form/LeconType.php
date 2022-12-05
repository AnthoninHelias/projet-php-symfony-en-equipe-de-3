<?php

namespace App\Form;

use App\Entity\Lecon;
use App\Entity\Moniteur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeconType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('heure')
            ->add('reglee')
            ->add('idmoniteur', EntityType::class,[
                'class' => Moniteur::class,
                'choice_label' => 'nom'
            ])
            ->add('ideleve')
            ->add('immatriculation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lecon::class,
        ]);
    }
}
