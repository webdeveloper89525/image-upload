<?php

namespace App\Form;

use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tags', TextType::class, [])
            ->add('imageFile', FileType::class, [
                'mapped' => false
            ])
        ;

        // $builder->get('tags')
        //     ->addModelTransformer(new CallbackTransformer(
        //         function ($tagsAsArray) {
        //             // transform the array to a string
        //             return implode(', ', $tagsAsArray);
        //         },
        //         function ($tagsAsString) {
        //             // transform the string back to an array
        //             return explode(', ', $tagsAsString);
        //         }
        //     ))
        // ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
        ]);
    }
}
