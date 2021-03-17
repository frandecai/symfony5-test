<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $role = new Role();
        $role->setName('ROLE_USER');
        $role->setDescription('User role');
        $manager->persist($role);

        $role = new Role();
        $role->setName('ROLE_ADMIN');
        $role->setDescription('Administrator role');
        $manager->persist($role);

        $manager->flush();
    }
}