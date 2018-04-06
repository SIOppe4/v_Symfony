<?php
namespace TobatBundle\Auth;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use TobatBundle\Entity\User;

class Auth{
    private $user;
    private $repository;
    private $session;

    public function __construct(EntityManager $manager)
    {
        $this->repository = $manager->getRepository(User::class);
        $this->session = new Session();
    }

    public function login($username, $password){
        $this->user = $this->repository->findOneBy([
            'username' => $username,
            'password' => hash('ripemd160',$password)
        ]);
        if ($this->user != null)
            $this->session->set("user_id", $this->user->getId());
    }

    public function isLogged(){
        return $this->session->get("user_id") != null;
    }

    public function user(){
        if (!$this->isLogged())
            return false;
        if ($this->user == null)
            $this->user = $this->repository->find($this->session->get("user_id"));

        return $this->user;
    }
}