<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Francisco Javier');
        $user->setSurname('Torres Ponce');
        $user->setEmail('frandecai@yahoo.es');
        $roles = array('ROLE_ADMIN');
        $user->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user, '211169'));
        $manager->persist($user);

        $user = new User();
        $user->setName('Marcos');
        $user->setSurname('Torres Alfaro');
        $user->setEmail('marcos.torresalfaro2004@gmail.com');
        $roles = array('ROLE_ADMIN');
        $user->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'marcos2004'));
        $manager->persist($user);

        $user = new User();
        $user->setName('Inés');
        $user->setSurname('Torres Alfaro');
        $user->setEmail('ines.torresalfaro2009@gmail.com');
        $roles = array('ROLE_ADMIN');
        $user->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'inesita2009'));
        $manager->persist($user);

        $manager->flush();
    }
}