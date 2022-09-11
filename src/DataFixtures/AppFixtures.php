<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    /**
     * Encode password
     * @var UserPasswordHasherInterface 
     */
    private $encoder;

    public function __construct(UserPasswordHasherInterface  $encoder)
    {
        $this->encoder = $encoder;     
    }
    
    public function load(ObjectManager $manager): void
    {
        $userLuxembourg = new User();
        $hash = $this->encoder->hashPassword($userLuxembourg, 'password');
        $userLuxembourg
            ->setEmail('luxembourg@gmail.com')
            ->setLongitude(6.1319346)
            ->setLatitude(49.611621)
            ->setPassword($hash);
        $manager->persist($userLuxembourg);

        $userMonaco = new User();
        $hash = $this->encoder->hashPassword($userMonaco, 'password');
        $userMonaco
            ->setEmail('monaco@gmail.com')
            ->setLongitude(7.416667)
            ->setLatitude(43.733334)
            ->setPassword($hash);
        $manager->persist($userMonaco);
        
        $userNantes = new User();
        $hash = $this->encoder->hashPassword($userNantes, 'password');
        $userNantes
            ->setEmail('nantes@gmail.com')
            ->setLongitude(-1.553621)
            ->setLatitude(47.218371)
            ->setPassword($hash);
        $manager->persist($userNantes);        

        $userOther = new User();
        $hash = $this->encoder->hashPassword($userOther, 'password');
        $userOther
            ->setEmail('other@gmail.com')
            ->setPassword('password')
            ->setPassword($hash);
        $manager->persist($userOther);

        $manager->flush();
    }
}
