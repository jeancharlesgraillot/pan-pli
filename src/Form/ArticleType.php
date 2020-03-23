<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', EntityType::class, [
                'label' => 'articleAuthorLabel',
                'class' => User::class,
                'choice_label' => 'firstName'
            ])
            ->add('title', TextType::class, $this->getConfiguration('articleTitleLabel', "articleTitlePlaceholder"))
            ->add('content', CKEditorType::class, array(
                'config_name' => 'main_config',
                'label' => 'articleContentLabel'
            ))
            // ->add('content', TextareaType::class, $this->getConfiguration('Contenu', "Tapez le contenu de votre article !"))
            ->add('coverImage', FileType::class, $this->getConfiguration('articleCoverImageLabel', "articleCoverImagePlaceholder", [
                'required' => false,
                'data_class' => null
            ]))
            ->add('category', EntityType::class, [
                'label' => "articleCategoryLabel",
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
        ;
    }

    // $this->getConfiguration('URL de l\'image', "Entrez l'url de l'image !"

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
