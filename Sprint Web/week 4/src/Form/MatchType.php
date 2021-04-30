<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Match;
use App\Entity\Stade;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ->add('st')
            ->add('score')


           ->add('idOrg',EntityType::class,[
                'class'=>User::class,
                'choice_label'=>'id',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idE',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'id_e',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idE2',EntityType::class,[
                'class'=>Equipe::class,
                'choice_label'=>'id_e',
                'multiple'=>false,
                'expanded'=>false
            ])
            ->add('idStade',EntityType::class,[
                'class'=>Stade::class,
                'choice_label'=>'idStade',
                'multiple'=>false,
                'expanded'=>false
            ])->add('Ajouter',SubmitType::class)
        ;
    }



    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Match::class,
        ]);
    }
}
