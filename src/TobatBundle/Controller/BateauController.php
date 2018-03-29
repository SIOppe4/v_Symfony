<?php

namespace TobatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TobatBundle\Entity\Client;
use TobatBundle\Entity\Bateau;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class BateauController extends Controller
{

    private function getSerializable(){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        return new Serializer($normalizers, $encoders);
    }

    public function indexAction()
    {
        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();
        $bateaux['bateaux'] = $manager->getRepository(Bateau::class)->findAll();
        return new Response($serializer->serialize($bateaux, 'json'));
    }

}
