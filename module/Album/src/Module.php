<?php
namespace Album;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module extends ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
