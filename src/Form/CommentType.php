<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => "commentContentLabel",
                'attr' => [
                    'placeholder' => "commentContentPlaceholder"
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => "commentEmailLabel",
                'attr' => [
                    'placeholder' => "commentEmailPlaceholder"
                ]
            ])
            ->add('nickname', TextType::class, [
                'label' => "commentNicknameLabel",
                'attr' => [
                    'placeholder' => "commentNicknamePlaceholder"
                ]
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => "commentIsActiveLabel",
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
