<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordUpdateType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, $this->getConfiguration("passwordUpdateOldPasswordLabel", "passwordUpdateOldPasswordPlaceholder"))
            ->add('newPassword', PasswordType::class, $this->getConfiguration("passwordUpdateNewPasswordLabel", "passwordUpdateNewPasswordPlaceholder"))
            ->add('confirmPassword', PasswordType::class, $this->getConfiguration("passwordUpdatePasswordConfirmationLabel", "passwordUpdatePasswordConfirmationPlaceholder"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
