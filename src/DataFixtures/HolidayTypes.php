<?php

namespace App\DataFixtures;

use App\Entity\Holiday\HolidayType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class HolidayTypes extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $holidayTypes = [
            'normal' => 'Normalny',
            'on_demand' => 'Na żądanie',
            'parent' => 'Rodzicielski',
            'unpaid' => 'Bezpłatny',
            'occasional' => 'Okolicznościowy',
            'other' => 'Inny'
        ];

        foreach($holidayTypes as $typeCode => $typeName){
            $type = new HolidayType();
            $type->setName($typeName);
            $manager->persist($type);
        }

        $manager->flush();
    }
}