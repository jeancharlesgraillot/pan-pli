<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends ApplicationType
{   

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, $this->getConfiguration("registrationFirstnameLabel", "registrationFirstnamePlaceholder"))
            ->add('lastName', TextType::class, $this->getConfiguration("registrationLastnameLabel", "registrationLastnamePlaceholder"))
            ->add('email', EmailType::class, $this->getConfiguration("registrationEmailLabel", "registrationEmailPlaceholder"))
            ->add('picture', UrlType::class, $this->getConfiguration("registrationAvatarLabel", "registrationAvatarPlaceholder", ['required'=>false]))
            ->add('hash', PasswordType::class, $this->getConfiguration("registrationPasswordLabel", "registrationPasswordPlaceholder"))
            ->add('passwordConfirm', PasswordType::class, $this->getConfiguration("registrationPasswordConfirmationLabel", "registrationPasswordConfirmationPlaceholder"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
