<?php
namespace User;

return array(
    'zfcuser' => array(
        
        // telling ZfcUser to use our own class
        'user_entity_class' => 'User\Entity\Users',
        
        // telling ZfcUserDoctrineORM to skip the entities it defines
        'enable_default_entities' => false,
        
        //Enable Username
        'enable_username' => true,
        
        //Enable Display Name
        'enable_display_name' => true,
        
        //Modes for authentication identity match
        'auth_identity_fields' => array(
            'username',
            'email'
        ),
        
        // Logout Redirect Route
        'logout_redirect_route' => 'application/dashboard',
        
        // Enable user state usage
        'enable_user_state' => true,
        
        // Default user state upon registration
        'default_user_state' => 1,
        
        // States which are allowing user to login
        'allowed_login_states' => array(
            null,
            1
        ),
        
        // User table name
        'table_name' => 'users',
        
        'user_login_widget_view_template' => 'zfc-user/user/loginModal.phtml'
    ),
    
    'service_manager' => array(
        'factories' => array(
            'user_navigation' => 'User\Navigation\Service\UserNavigationFactory' // добавляем фабрику для меню
        )
    ),
    
    'router' => array(
        'routes' => array(
            'zfcuser' => array(
                'options' => array(
                    'route' => '/account'
                )
            )
        )
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'zfcuser' => __DIR__ . '/../view'
        )
    ),
    
    'navigation' => array(
        'user' => array(
            array(
                'label' => 'Account',
                'route' => 'zfcuser',
                'pages' => array(
                    'dashboard' => array(
                        'label' => 'Dashboard',
                        'route' => 'application/dashboard'
                    ),
                    'changeemail' => array(
                        'label' => 'Change e-mail',
                        'route' => 'zfcuser/changeemail'
                    ),
                    'changepassword' => array(
                        'label' => 'Change Password',
                        'route' => 'zfcuser/changepassword'
                    ),
                    'logout' => array(
                        'label' => 'Sign Out',
                        'route' => 'zfcuser/logout'
                    )
                )
            )
        )
    )
)
;
