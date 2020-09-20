<?php

namespace App\Service\Bridge;

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class EosRouterService
{
    private $mapping;

    public function __construct(string $rootPath) {
        try {
            $this->mapping = Yaml::parseFile(sprintf("%s/config/eos_routing.yaml", $rootPath));
        } catch (ParseException $exception) {
            printf('Unable to parse the YAML string: %s', $exception->getMessage());
        }
    }

    public function getByPage($name) {
      if (isset($this->mapping['eos_routing'])) {
           return $this->mapping['eos_routing'][$name] ?? null;
      }
      return null;
    }
}