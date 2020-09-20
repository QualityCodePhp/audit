<?php
namespace App\Menu;

use App\Service\Bridge\SessionService;
use Doctrine\ORM\EntityManager;
use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class EosMenuBuilder
{
    private FactoryInterface $factory;
    private EntityManager $em;
    private SessionService $sessionService;
    private SessionInterface $session;

    public function __construct(SessionService  $sessionService, EntityManager $em, FactoryInterface $factory)
    {
        $this->factory = $factory;
        $this->em = $em;
        $this->sessionService = $sessionService;
        $this->session =  $this->sessionService->getSession();
    }

    public function createMainMenu(RequestStack $requestStack)
    {

       if ($this->session->has("GIRAF_CURRENTMENU") && count($this->session->get("GIRAF_CURRENTMENU")) > 1) {
         $_menu = $this->session->get("GIRAF_CURRENTMENU");
       } else {
           $_menu = [];
           // TODO
       }

        $menu = $this->factory->createItem('Acceuil', ['uri' => "/eos/src/htm"]);
        foreach ($_menu as $item) {
            $menu = $this->addToMenu($item, $menu);
        }
        return $menu;
    }

    private function addToMenu($itemMenu, $menu) {
        if (isset($itemMenu['lien']) && $itemMenu['lien'] != '') {
            $variable = '';
            if (isset($itemMenu['variable']) && $itemMenu['variable'] != '') {
                $variable = '&_VAR=' . $itemMenu['variable'];
            }
            $menu->addChild($itemMenu['libelle'], ['uri' => sprintf("/eos/src/htm/%s", $itemMenu['lien']) . '.php?_NAV=_dall' . $variable]);
        } else {
            $menu->addChild($itemMenu['libelle'], ['uri' => "/eos/src/htm/#"]);
            if (isset($itemMenu['menu']) && is_array($itemMenu['menu']) && !empty($itemMenu['menu'])) {
                foreach ($itemMenu['menu'] as $itemSousMenu) {
                   $this->addToMenu($itemSousMenu,  $menu[$itemMenu['libelle']]);
                }
            }
        }
        return $menu;
    }
}