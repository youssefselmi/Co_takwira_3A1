<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Nawres;
use App\Entity\Stade;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NawresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idStade',EntityType::class,[
                'class'=>Stade::class,
                'choice_label'=>'idStade',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idEquipe1',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'id_e',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idEquipe2',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'id_e',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('date')
            ->add('heureDeb')
            ->add('heureFin')
            ->add('description')
            ->add('status')
            ->add('score')
            ->add('nbSpectateur')
            ->add('IdOrg',EntityType::class,[
                'class'=>User::class,
                'choice_label'=>'id',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('Ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Nawres::class,
        ]);
    }
}
