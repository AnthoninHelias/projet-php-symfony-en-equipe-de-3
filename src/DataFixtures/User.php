<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class User extends Fixture
{

    private UserPasswordHasherInterface $hasher;
    private $EncoderPassword;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->hasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for($i = 1; $i <= 10; $i++) {
            $user = new \App\Entity\User();
            $user->setEmail($faker->email());
            $user->setNom($faker->lastName());
            $user->setPrenom($faker->firstName());
            $user->setPassword($this->EncoderPassword->hashPassword($user , "plainPassword"));
            $user->setRoles(["ROLE_USER"]);
            $manager->persist($user);
        }

        $manager->flush();
    }
}






