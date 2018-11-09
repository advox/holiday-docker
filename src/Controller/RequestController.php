<?php

namespace App\Controller;

use App\Entity\Holiday\Holiday;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Routing\Annotation\Route;

class RequestController extends AbstractController
{
    /**
     * @Route("/request")
     */
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Holiday();
        //$task->setTask('Write a blog post');
      //  $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('numberOfDays', IntegerType::class)
            ->add('comment', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Request'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
                return $this->render('test/request2.html.twig', array(
                    'form' => $form->createView(),
                ));
        }

        return $this->render('test/request.html.twig', array(
            'form' => $form->createView(),
        ));
    }




}
