<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $userLuxembourg = new User();
        $userLuxembourg
            ->setEmail('luxembourg@gmail.com')
            ->setLongitude(6.1319346)
            ->setLatitude(49.611621)
            ->setPassword('password');
        $manager->persist($userLuxembourg);

        $userMonaco = new User();
        $userMonaco
            ->setEmail('monaco@gmail.com')
            ->setLongitude(7.416667)
            ->setLatitude(43.733334)
            ->setPassword('password');
        $manager->persist($userMonaco);

        
        $userNantes = new User();
        $userNantes
            ->setEmail('nantes@gmail.com')
            ->setLongitude(-1.553621)
            ->setLatitude(47.218371)
            ->setPassword('password');
        $manager->persist($userNantes);

        

        $userOther = new User();
        $userOther
            ->setEmail('other@gmail.com')
            ->setPassword('password');
        $manager->persist($userOther);

        $manager->flush();
    }
}
