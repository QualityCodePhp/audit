<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->redirect($this->getParameter('appLoginUrl'));
    }


}