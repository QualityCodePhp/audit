<?php
namespace App\Twig;

use App\Entity\Action;
use App\Service\Bridge\EosRouterService;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Twig\Extension\RoutingExtension;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Yaml\Yaml;

class EosRoutingExtension extends RoutingExtension
{
    const PATH_SINGLE = "%s";
    const PATH_QUERY_STRING = "%s?%s";

    const URL_BASE_URL_RELATIVE = "//%s";
    const URL_BASE_URL_REEL = "%s://%s";
    const URL_SINGLE = "%s%s";
    const URL_QUERY_STRING = "%s%s?%s";

    private UrlGeneratorInterface $generator;
    private EosRouterService $eosRouterService;
    private RouterInterface $router;

    public function __construct(UrlGeneratorInterface $generator, EosRouterService $eosRouterService, RouterInterface $router) {
        parent::__construct($generator);
        $this->generator = $generator;
        $this->eosRouterService = $eosRouterService;
        $this->router = $router;
    }

    public function getPath($name, $parameters = array(), $relative = false) {
        $action = $this->eosRouterService->getByPage($name);
        if ($action) {
            if (empty($parameters)) {
                return sprintf(self::PATH_SINGLE, $action['url']);
            } else {
                return sprintf(self::PATH_QUERY_STRING, $action['url'], $this->generateQueryString($parameters));
            }
        } else {
            return parent::getPath($name, $parameters, $relative);
        }
    }


    public function getUrl($name, $parameters = array(), $relative = false) {
        $action = $this->eosRouterService->getByPage($name);
        if ($action) {
            $baseUrl = $this->generateBaseUrl($relative);
            if (empty($parameters)) {
                return sprintf(self::URL_SINGLE, $baseUrl, $action['url']);
            } else {
                return sprintf(self::URL_QUERY_STRING, $baseUrl , $action['url'], $this->generateQueryString($parameters));
            }
        } else {
            return parent::getUrl($name, $parameters, $relative);
        }
    }

    private function generateQueryString($parameters) {
        if (empty($parameters)) {
            return null;
        }
        $query = [];
        foreach ($parameters as $k => $item) {
            $query[] = sprintf("%s=%s", $k, $item);
        }
        return implode("&", $query);
    }

    private function generateBaseUrl($relative) {
        if ($relative) {
            $baseUrl =  sprintf(self::URL_BASE_URL_RELATIVE,  $this->router->getContext()->getHost());
        } else {
            $baseUrl =  sprintf(self::URL_BASE_URL_REEL, $this->router->getContext()->getScheme(), $this->router->getContext()->getHost());
        }
        return $baseUrl;
    }
}