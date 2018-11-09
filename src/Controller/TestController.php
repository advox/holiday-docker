<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage blog contents in the public part of the site.
 *
 * @Route("/test")
 */
class TestController extends AbstractController
{

    /**
     * @Route("/" , methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig');
    }

    /**
     * @Route("/holidaytypes/", name="holidaytypes")
     */
    public function holidaytypes(): Response
    {
        $holidayTypesRepository = $this->getDoctrine()->getRepository(\App\Entity\Holiday\HolidayType::class);
        $holidayTypes = $holidayTypesRepository->findAll();

        return $this->render('test/holiday_types.html.twig',[
            'holidaytypes' => $holidayTypes
        ]);
    }
}