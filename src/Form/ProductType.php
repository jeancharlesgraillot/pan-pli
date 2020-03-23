<?php

namespace App\Form;

use App\Entity\Product;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProductType extends ApplicationType
{   

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName', TextType::class, $this->getConfiguration('Nom de produit', "Entrez le nom du produit !"))
            ->add('slug', TextType::class, $this->getConfiguration('Chaîne URL', "Adresse web (automatique)", ['required' => false]))
            ->add('coverImage', UrlType::class, $this->getConfiguration("URL de l'image produit", "Donnez l'adresse de l'image produit !"))
            ->add('qualifier', TextType::class, $this->getConfiguration('Type de produit', "Entrez le type de produit !"))
            ->add('introduction', TextType::class, $this->getConfiguration('Introduction', "Donnez une description globale du produit !"))
            ->add('content', TextareaType::class, $this->getConfiguration('Description', "Donnez une description plus complète du produit !"))
            ->add('quantity', IntegerType::class, $this->getConfiguration('Quantité', "Indiquez la quantité en stock du produit !"))
            ->add('price', MoneyType::class, $this->getConfiguration("Prix du produit", "Indiquez le prix du produit !"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
