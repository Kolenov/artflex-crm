<?php
namespace User;
return array(
    'zfcuser' => array(
        // telling ZfcUser to use our own class
        'user_entity_class'       => 'User\Entity\Users',
        // telling ZfcUserDoctrineORM to skip the entities it defines
        'enable_default_entities' => false,

        // Logout Redirect Route
        'logout_redirect_route' => 'home',
        
        //Enable user state usage
        'enable_user_state' => true,
        
        //Default user state upon registration
        'default_user_state' => 1,
        
        //States which are allowing user to login
        'allowed_login_states' => array( null, 1 ),
        
        //User table name
        'table_name' => 'users',
        
        'user_login_widget_view_template' => 'zfc-user/user/loginModal.phtml',
    ),
    
    'router' => array(
        'routes' => array(
                'zfcuser' => array(
                    'options' => array(
                        'route' => '/account'
                    ),
                ),
            ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'zfcuser' => __DIR__ . '/../view',
        ),
    ),
     
);
