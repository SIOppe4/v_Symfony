<?php

namespace TobatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('TobatBundle:Client:index.html.twig', array(
            // ...
        ));
    }

    public function ajoutCommentaireAction($id)
    {
        die('coucou '.$id);
    }

}
