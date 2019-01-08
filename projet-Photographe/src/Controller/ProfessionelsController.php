<?php

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class ProfessionelsController extends AbstractController
{
    /**
     * @Route("/professionels", name="professionels")
     */
    public function new(Request $request)
    {

        // just setup a fresh $task object (remove the dummy data)
        $User = new User();

        $form = $this->createFormBuilder($User)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('tel', TelType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $User = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($User);
            $entityManager->flush();

            return $this->redirectToRoute('/professionels');
        }

        return $this->render('particuliers/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}