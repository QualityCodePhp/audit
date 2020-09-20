<?php

namespace App\Service\Bridge;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Entity\Utilisateur;


class SessionService
{
    private EntityManagerInterface $em;
    private SessionInterface $session;

    public function __construct(SessionInterface  $session, EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->session = $session;
    }

    public function getSession() {
        return  $this->session;
    }

    public function getCurrentUser() : ?Utilisateur {
        if ($this->session->has("GIRAF_CURRENTUSER") && count($this->session->get("GIRAF_CURRENTUSER")) > 0) {
            $userId = $this->session->get("GIRAF_CURRENTUSER")['UTI_ID'];
            if ($userId == -1) {
                return null;
            }
            $user = $this->em->getRepository(Utilisateur::class)->findOneByUtiId($userId);
            return $user;
        }
        return null;
    }

    public function getUserId() {
        $userId = false;
        if ($this->session->has("GIRAF_CURRENTUSER") && count($this->session->get("GIRAF_CURRENTUSER")) > 0) {
            $userId = $this->session->get("GIRAF_CURRENTUSER")['UTI_ID'];
        }
        return $userId;
    }
}