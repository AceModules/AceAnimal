<?php

namespace AceAnimal;

class Module
{
    public function getModuleDependencies()
    {
        return ['DoctrineORMModule'];
    }

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
