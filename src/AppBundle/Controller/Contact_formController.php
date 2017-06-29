<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Contact_formController extends Controller
{
    /**
     * @Route("/contacts", name="Обратная связь")
     */
    public function indexAction()
    {
//        $this->denyAccessUnlessGranted('ROLE_SUPERPUPER_ADMIN', null, 'Unable to access this page!');
        return $this->render('default/page-contact.html.twig');
    }
}