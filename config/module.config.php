<?php

namespace AceAnimal;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                ],
            ],
        ],
        /*
        'migrations_configuration' => [
            'orm_default' => [
                'migrations_paths' => [
                    __NAMESPACE__ . '\Migrations' => __DIR__ . '/../src/Migrations',
                ],
            ],
        ],
        */
    ],
];
