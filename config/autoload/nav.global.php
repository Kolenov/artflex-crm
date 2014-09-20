<?php
return array(
    
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(
        
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home'
            ),
            array(
                'label' => 'Design',
                'route' => 'home'
            ),
            array(
                'label' => 'Manager',
                'route' => 'home'
            ),
            array(
                'label' => 'Home',
                'route' => 'home'
            )
        ),
        
//         'user' => array(
//             array(
//                 'label' => 'Account',
//                 'route' => 'zfcuser',
//                 'pages' => array(
//                     'home' => array(
//                         'label' => 'Dashboard',
//                         'route' => 'zfcuser',
//                     ),
//                     'changeemail' => array(
//                        'label' => 'Change e-mail',
//                         'route' => 'zfcuser/changeemail'
//                     ),
//                     'changepassword' => array(
//                         'label' => 'Change Password',
//                         'route' => 'zfcuser/changepassword'
//                     ),
//                     'logout' => array(
//                         'label' => 'Sign Out',
//                         'route' => 'zfcuser/logout'
//                     ),
//                 )
//             )
//         ) 
    )
);
