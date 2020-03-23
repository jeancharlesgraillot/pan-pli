<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class AccountType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, $this->getConfiguration("accountFirstnameLabel", "accountFirstnamePlaceholder"))
            ->add('lastName', TextType::class, $this->getConfiguration("accountLastnameLabel", "accountLastnamePlaceholder"))
            ->add('email', EmailType::class, $this->getConfiguration("accountEmailLabel", "accountEmailPlaceholder"))
            ->add('picture', UrlType::class, $this->getConfiguration("accountAvatarLabel", "accountAvatarPlaceholder", ['required'=>false]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
