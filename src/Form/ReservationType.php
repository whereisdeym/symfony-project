<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\TypeBillet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ref_reservation')
            ->add('NomPassager')
            ->add('dateDepart', null, [
                'widget' => 'single_text',
            ])
            ->add('villeDepart')
            ->add('villeArrivee')

            ->add('typeBillet', EntityType::class, [
                'class' => TypeBillet::class,
                'choice_label' => 'classe',
                'placeholder' => 'Choisissez un type de billet',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
