<?php
return array(
    // All navigation-related configuration is collected in the 'navigation' key
    'usernav' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'usernav' => array(
            // And finally, here is where we define our page hierarchy
            'account' => array(
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

                ),
            ),
        ),
    ),
);
