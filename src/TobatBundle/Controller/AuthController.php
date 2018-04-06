<?php
namespace TobatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller{

    private $auth;

    public function loginAction(Request $request){
        if ($request->getMethod() == "POST"){
            $this->getAuth()->login($request->get("username"), $request->get("password"));
            if (!$this->getAuth()->isLogged()){
                return $this->redirectToRoute('login_admin');
            }
            return $this->redirectToRoute('clients_admin');
        }
        return $this->render('TobatBundle:Admin:login.html.twig');
    }

    private function getAuth(){
        if ($this->auth == null)
            $this->auth = $this->get("tobat.auth");
        return $this->auth;
    }
}