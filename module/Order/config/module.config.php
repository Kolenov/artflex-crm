<?php
return array(
    
    'controllers' => array(
        'invokables' => array(
            'Order\Controller\Order' => 'Order\Controller\OrderController'
        )
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'Order' => __DIR__ . '/../view'
        )
    ),
    
    'router' => include __DIR__ . '/router.config.php',
    
    'doctrine' => array(
        
        'driver' => array(
            'order_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/order'
            ),
            
            'orm_default' => array(
                'drivers' => array(
                    'Order\Entity' => 'order_entity'
                )
            )
        )  
    )
);
