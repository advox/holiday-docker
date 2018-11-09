<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Role extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $roles = [
            'employee',
            'employer'
        ];

        foreach($roles as $roleName){
            $role = new \App\Entity\User\Role($roleName);
            $manager->persist($role);
        }

        $manager->flush();
    }
}
