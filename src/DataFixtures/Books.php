<?php

namespace App\DataFixtures;

use App\Entity\Books;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class BooksFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) :
            $book = new Books();
            $book->setTitle($faker->words(3, true));
            $book->setSummary($faker->sentence());
            $book->setEdition($faker->word());
            $book->setAuthor($faker->name());
            $book->setImage($faker->imageUrl());
            $book->setPublicationYear($faker->dateTime());
            $manager->persist($book);
        endfor;

        $manager->flush();
    }
}