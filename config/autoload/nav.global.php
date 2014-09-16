<?php
return array(
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home',
            ),
            array(
                'label' => 'Design',
                'route' => 'home',
            ),
            array(
                'label' => 'Manager',
                'route' => 'home',
            ),
            array(
                'label' => 'Home',
                'route' => 'home',
            ),
            
            // And finally, here is where we define our page hierarchy
            /*'account' => array(
                'label' => 'Account',
                'route' => 'zfcuser',
                'pages' => array(
                    'home' => array(
                        'label' => 'Dashboard',
                        'route' => 'zfcuser',
                    ),
                    'login' => array(
                        'label' => 'Sign In',
                        'route' => 'zfcuser/login',
                    ),
                    'logout' => array(
                        'label' => 'Sign Out',
                        'route' => 'zfcuser/logout',
                    ),
                    'register' => array(
                        'label' => 'Register',
                        'route' => 'zfcuser/register',
                    ),
                ),
            ),
            */
        ),
    ),
);
