<?php

namespace App\Form;

use App\Entity\Anes;
use App\Entity\ImageAnes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageAnesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lien', FileType::class)
            ->add('texte', TextType::class)
            ->add('anes', EntityType::class, array(
                'class' => Anes::class
            ))
            ->add('save', SubmitType::class, array('label' => 'Ajouter', 'attr' => ['class' => 'rounded']))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ImageAnes::class,
        ]);
    }
}
