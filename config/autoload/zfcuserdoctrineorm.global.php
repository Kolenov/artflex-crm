<?php
 return array(
    'doctrine' => array(
        'driver' => array(
            // overriding zfc-user-doctrine-orm's config
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../../module/Application/src/Application/Entity'
            ),
            
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'zfcuser_entity'
                )
            )
        )
    ),
 );