<?php

namespace TobatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TobatBundle\Auth\Auth;
use TobatBundle\Entity\Bateau;
use TobatBundle\Entity\Client;
use TobatBundle\Form\BateauType;

class AdminController extends Controller
{
    private $auth;

    public function clientsAction()
    {
        if(!$this->getAuth()->isLogged()) return $this->redirectToRoute('login_admin');
        $manager = $this->getDoctrine()->getManager();
        $clients = $manager->getRepository(Client::class)->findAll();

        return $this->render('TobatBundle:Admin:clients.html.twig', ['clients' => $clients]);
    }

    public function bateauxAction()
    {
        if(!$this->getAuth()->isLogged()) return $this->redirectToRoute('login_admin');

        $manager = $this->getDoctrine()->getManager();
        $bateaux = $manager->getRepository(Bateau::class)->findAll();
        return $this->render('TobatBundle:Admin:bateaux.html.twig', ['bateaux' => $bateaux]);
    }

    public function ajoutBateauAction(Request $request)
    {
        if(!$this->getAuth()->isLogged()) return $this->redirectToRoute('login_admin');

        $bateau = new Bateau();
        $form = $this->get('form.factory')->create(BateauType::class, $bateau);

        if ($request->getMethod() == "POST" && $form->handleRequest($request)->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($bateau);
            $manager->flush();

            return $this->redirectToRoute('bateaux_admin');
        }

        return $this->render('TobatBundle:Admin:ajoutBateau.html.twig', ['form' => $form->createView() ]);
    }

    public function modifBateauAction(Request $request, $id_bateau)
    {
        if(!$this->getAuth()->isLogged()) return $this->redirectToRoute('login_admin');

        $manager = $this->getDoctrine()->getManager();
        $bateau = $manager->getRepository(Bateau::class)->find($id_bateau);

        $form = $this->get('form.factory')->create(BateauType::class, $bateau);

        if ($request->getMethod() == "POST" && $form->handleRequest($request)->isValid()){
            $manager->persist($bateau);
            $manager->flush();

            return $this->redirectToRoute('bateaux_admin');
        }

        return $this->render('TobatBundle:Admin:modifBateau.html.twig', ['form' => $form->createView() ]);
    }

    public function suppressionBateauAction($id_bateau)
    {
        if(!$this->getAuth()->isLogged()) return $this->redirectToRoute('login_admin');

        $manager = $this->getDoctrine()->getManager();
        $bateau = $manager->getRepository(Bateau::class)->find($id_bateau);
        $manager->remove($bateau);
        $manager->flush();
        return $this->redirectToRoute('bateaux_admin');
    }

    private function getAuth(){
        if ($this->auth == null)
            $this->auth = $this->get("tobat.auth");
        return $this->auth;
    }

}
