<?php

namespace App\Form;

use App\Entity\Stade;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StadeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('nomStade')
            ->add('ville')
            ->add('adresse')
            ->add('capacite')

      ->add('IdUser',EntityType::class,[
        'class'=>User::class,
        'choice_label'=>'id',
        'multiple'=>false,
        'expanded'=>false
    ])
         //   ->add('Ajouter',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stade::class,
        ]);
    }
}
