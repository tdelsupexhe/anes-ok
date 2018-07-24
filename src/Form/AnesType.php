<?php

namespace App\Form;

use App\Entity\Anes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('anneeNaissance', NumberType::class)
            ->add('text', TextareaType::class)
            ->add('image001',FileType::class, array(
                'data_class' => null,
                'attr' =>array(
                    'multiple' => 'multiple'
                )
            ))
            /*->add('image002',FileType::class)
            ->add('image003',FileType::class)
            ->add('image004',FileType::class)
            ->add('image005',FileType::class)
            ->add('image006',FileType::class)
            ->add('image007',FileType::class)*/
            ->add('save', SubmitType::class, array('label' => 'Envoyer'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Anes::class,
        ]);
    }
}
