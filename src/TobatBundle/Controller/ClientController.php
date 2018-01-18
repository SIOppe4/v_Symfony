<?php

namespace TobatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TobatBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class ClientController extends Controller
{

    private function getSerializable(){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        return new Serializer($normalizers, $encoders);
    }

    public function indexAction()
    {
        return $this->render('TobatBundle:Client:index.html.twig', array(
            // ...
        ));
    }

    public function ajoutCommentaireAction(Request $request, $id)
    {
        // Instance de Serializer
        $serializer = $this->getSerializable();
        // Instance du manager de Doctrine
        $manager = $this->getDoctrine()->getManager();
        // Récupération du client
        $client = $manager->getRepository(Client::class)->find($id);
        // Récupération du commentaire à partir du json
        $comment = json_decode($request->getContent(), true)['commentaire'];
        $client->setCommentaire($comment);
        $manager->persist($client);
        $manager->flush();
        return new Response($serializer->serialize($client, 'json'));
    }

}
