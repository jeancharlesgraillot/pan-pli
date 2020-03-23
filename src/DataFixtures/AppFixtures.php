<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Image;
use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');

        //We create a new role

        $adminRole = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        //We create a new user who has the admin role

        $adminUser = new User();
        $adminUser  ->setFirstName('Jean-Charles')
                    ->setLastName('Graillot')
                    ->setEmail('grooveman59@yahoo.fr')
                    ->setHash($this->encoder->encodePassword($adminUser, 'password'))
                    ->setPicture('https://avatars.io/twitter/GJC')
                    ->addUserRole($adminRole);

        $manager->persist($adminUser);

        //We manage the users

        $users = [];
        $genres = ['male', 'female'];

        for ($i = 1; $i < 5; $i ++) 
        { 
            $user = new User();

            $genre = $faker->randomElement($genres);
            $picture = 'https://randomuser.me/api/portraits/';
            $pictureId = $faker->numberBetween(1, 99) . '.jpg';

            if ($genre == 'male') 
            {
               $picture = $picture . 'men/' . $pictureId;
            }else{
               $picture = $picture . 'women/' . $pictureId; 
            }

            $hash = $this->encoder->encodePassword($user, 'password');

            $user->setFirstName($faker->firstname($genre))
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPicture($picture)
                ->setHash($hash);

            $manager->persist($user);
            $users[] = $user; 
        }

        //We manage the categories

        for ($i = 1; $i <= 5; $i++) 
        { 
            $category = new Category();
            $name = $faker->word;
            $category->setName($name);

            $manager->persist($category);
            $categories[] = $category;
        }

        //We manage the articles

        for ($i = 1; $i <= 20; $i++) 
        { 
           $article = new Article();

           $title = $faker->sentence();
           $coverImage = $faker->imageUrl(900, 600);
           $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';
           $user = $users[mt_rand(0, count($users) - 1)];
           $category = $categories[mt_rand(0, count($categories) - 1)];

           $article->setTitle($title)
                    ->setCoverImage($coverImage)
                    ->setContent($content)
                    ->setAuthor($user)
                    ->addCategory($category);
            
            $manager->persist($article);
            $articles[] = $article; 
        }

        //We manage the comments

        for ($i = 1; $i <= 30 ; $i ++) 
        { 
            $comment = new Comment();

            $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';
            $article = $articles[mt_rand(0, count($articles) - 1)];

            $comment->setContent($content)
                    ->setEmail($faker->email)
                    ->setNickname($faker->word)
                    ->setArticle($article);

            $manager->persist($comment);
        }

        //We manage the products

        for ($i = 1; $i <= 5 ; $i++) 
        { 
            
            $product = new Product();

            $productName = $faker->word;
            $qualifier = $faker->word;
            $coverImage = $faker->imageUrl(1000, 350);
            $introduction = $faker->paragraph(2);
            $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';
    
            $product->setProductName($productName)
                    ->setCoverImage($coverImage)
                    ->setIntroduction($introduction)
                    ->setContent($content)
                    ->setPrice(mt_rand(5, 50))
                    ->setQuantity(mt_rand(10, 100))
                    ->setQualifier($qualifier);

            for ($j = 1; $j < mt_rand(2, 5); $j++) 
            { 
                $image = new Image();

                $image  ->setUrl($faker->imageUrl())
                        ->setCaption($faker->sentence())
                        ->setProduct($product);

                $manager->persist($image);
            }
            
            $manager->persist($product);
        }

        $manager->flush();
        
    }
    
}
