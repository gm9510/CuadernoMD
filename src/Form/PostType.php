<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title', TextType::class, [
                'label'=>false,
                'row_attr'=>['class'=>'col-12'],
                'attr'=>['class'=>'form-control','placeholder'=>'Titulo Corto']
            ])
            ->add('content', TextareaType::class, [
                'label'=>false,
                'row_attr'=>['class'=>'col-12'],
                'attr'=>['class'=>'form-control','rows'=>'10','placeholder'=>'Texto en Markdown']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
