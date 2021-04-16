<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Match;
use App\Entity\Stade;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('heureDeb')
            ->add('heureFin')
            ->add('nbSpectateur')
            ->add('description')
            ->add('status')
            ->add('score')


            ->add('idOrg',EntityType::class,[
                'class'=>User::class,
                'choice_label'=>'id',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idEquipe1',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'nomEquipe',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idEquipe2',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'nomEquipe',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idStade',EntityType::class,[
                'class'=>Stade::class,
                'choice_label'=>'idStade',
                'multiple'=>false,
                'expanded'=>false
            ])
        ;
    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Match::class,
        ]);
    }
}
