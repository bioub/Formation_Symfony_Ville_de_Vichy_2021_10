<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DevFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user1 = new User();
        $user1->setFirstName('Romain');
        $user1->setBirthdate(new \DateTime('1985-10-01'));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setFirstName('Cédric');
        $manager->persist($user2);

        $manager->flush();
    }
}
