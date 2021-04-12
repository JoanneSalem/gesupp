<?php

namespace App\Form;

use App\Entity\Demande;
use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCollaborateur', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('dateFin', DateType::class, ['widget'=>'single_text', 'required' => false])
            ->add('dateDebut', DateType::class, ['widget'=>'single_text', 'required' => false])
            ->add('duree')
            ->add('tache', ChoiceType::class,[
                "choices"=>[
                    "Inventaire"=>"Inventaire",
                    "Autre" =>"Autre"
                    ]
                ])
            ->add('idRH1', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('idCD1', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('idDU1', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('idRH2', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('idCD2', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('idDU2', EntityType::class, ["mapped" => false, 'class'=>Utilisateur::class, "choice_label"=>'nom'])
            ->add('dureeReelle')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
