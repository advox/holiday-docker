<?php

namespace App\Controller;

use App\Entity\Holiday\HolidayType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class TypeController extends AbstractController
{

    /**
     * @Route("/type" , methods={"GET"})
     */
    public function list()
    {
        $types = $this->getDoctrine()
            ->getRepository(HolidayType::class)
            ->findAll();

        return $this->render('test/holiday_types.html.twig', ['types' => $types]);
    }

}
