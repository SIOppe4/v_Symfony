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

class ClientController extends Controller
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
        $clients['clients'] = $manager->getRepository(Client::class)->findAll();
        return new Response($serializer->serialize($clients, 'json'));
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

    public function ajoutBateauClientAction($id_client, $id_bateau){
        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();

        $client = $manager->getRepository(Client::class)->find($id_client);
        $bateau = $manager->getRepository(Bateau::class)->find($id_bateau);

        // Si le bateau est déjà afilier au client ou plus de 3
        if ($client->getBateau()->contains($bateau) || count($client->getBateau()) > 3) {
            throw new \Exception("Impossible d'ajouter ce bateau", 1);
        }

        $client->setBateau($bateau);
        $manager->persist($client);
        $manager->flush();

        return new Response($serializer->serialize($client, 'json'));
    }

    public function supressionBateauClientAction($id_client, $id_bateau){
        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();

        $client = $manager->getRepository(Client::class)->find($id_client);
        $bateau = $manager->getRepository(Bateau::class)->find($id_bateau);

        // Si le bateau n'est pas déjà afilier au client
        if (!$client->getBateau()->contains($bateau)) {
            throw new \Exception("Impossible d'ajouter ce bateau", 1);
        }

        $client->getBateau()->removeElement($bateau);
        $manager->persist($client);
        $manager->flush();

        return new Response($serializer->serialize($client, 'json'));
    }

    public function afficherClientAction($id_client){

        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();
        $client = $manager->getRepository(Client::class)->find($id_client);
        return new Response($serializer->serialize($client, 'json'));
    }

    public function updateClientAction(Request $request, $id_client){
        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();
        $client = $manager->getRepository(Client::class)->find($id_client);
        $informations = json_decode($request->getContent(), true);
        $client->setInformations($informations);
        $manager->persist($client);
        $manager->flush();
        return new Response($serializer->serialize($client, 'json'));
    }

    public function deleteClientAction($id_client){
        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();
        $client = $manager->getRepository(Client::class)->find($id_client);
        $manager->remove($client);
        $manager->flush();
         return new Response($serializer->serialize("Suppression effectuée", 'json'));
    }

    public function ajoutClientAction(Request $request){

        $serializer = $this->getSerializable();
        $manager = $this->getDoctrine()->getManager();

        $client = new client;

        $nom = json_decode($request->getContent(), true)['nom'];
        $prenom = json_decode($request->getContent(), true)['prenom'];
        $adresse = json_decode($request->getContent(), true)['adresse'];
        $adresseLn = json_decode($request->getContent(), true)['adresseLn'];
        $ville = json_decode($request->getContent(), true)['ville'];
        $cp = json_decode($request->getContent(), true)['cp'];
        $commentaire = json_decode($request->getContent(), true)['commentaire'];
        $tel = json_decode($request->getContent(), true)['tel'];
        $email = json_decode($request->getContent(), true)['email'];


        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setAdresse($adresse);
        $client->setAdresseLn($adresseLn);
        $client->setVille($ville);
        $client->setCp($cp);
        $client->setCommentaire($commentaire);
        $client->setTel($tel);
        $client->setEmail($email);

        $manager->persist($client);
        $manager->flush();

        var_dump($client);

        return new Response($serializer->serialize($client, 'json'));
    }

}
