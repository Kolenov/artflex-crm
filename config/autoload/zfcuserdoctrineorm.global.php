<?php
 return array(
      'doctrine' => array(
        'driver' => array(
            // overriding zfc-user-doctrine-orm's config
            // если прописывать не в автолоаде а в конфиге модуля, то 
            // не видит сущности из другого модуля
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../../module/User/src/User/Entity'
            ),
            
            'orm_default' => array(
                'drivers' => array(
                    'User\Entity' => 'zfcuser_entity'
                )
            )
        )
    ),
 );