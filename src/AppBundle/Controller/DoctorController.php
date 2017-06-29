<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class DoctorController extends Controller
{
    /**
     * @Route("/doctors", name = "doctor")
     */
    public function indexAction()
    {
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find(1);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id 1'
            );
        }

        return new Response(dump($user->getFio()));
    }

    /**
     * @Route ("/doctor/add/", name="insert")
     */
    public function addAction()
    {
/*        $NewUser = new User();
        $NewUser->setFio("Stanley Kubric");
        $NewUser->setEmail("kubric@mail.ru");
        $NewUser->setLastVisit(new \DateTime('20170601'));
        $NewUser->setPass("007");
        $em = $this->getDoctrine()->getManager();
        $em->persist($NewUser);
        $em->flush();*/


    /*    $NewUser = new Post();
        $NewUser->setUserId(1);
        $NewUser->setTitle("MY NEW POST");
        $NewUser->setDate(new \DateTime(date("Y-m-d")));
        $NewUser->setText("HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD HELLO WORLD ");
        $NewUser->setPublished(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($NewUser);
        $em->flush();*/


        return new Response("Допустим " . dump($em));
    }
}
