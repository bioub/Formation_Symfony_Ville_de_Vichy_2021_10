<?php

namespace App\DataFixtures;

use App\Entity\Tweet;
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

        $tweet1 = new Tweet();
        $tweet1->setText('lorem ipsum...');
        $tweet1->setPostedAt(new \DateTime('2021-10-29 08:46:54'));
        $manager->persist($tweet1);

        $tweet2 = new Tweet();
        $tweet2->setText('ABCDEGHIJK...');
        $tweet1->setPostedAt(new \DateTime('2021-10-29 10:24:34'));
        $manager->persist($tweet2);

        $tweet3 = new Tweet();
        $tweet3->setText('djgdif gndugd idfgigndgi dufg iufd');
        $tweet1->setPostedAt(new \DateTime('2021-10-29 11:54:2O'));
        $manager->persist($tweet3);

        $manager->flush();
    }
}
