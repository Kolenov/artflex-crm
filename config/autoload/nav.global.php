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
                'route' => 'application/dashboard'
            ),
            array(
                'label' => 'Manager',
                'route' => 'home'
            ),
            array(
                'label' => 'Home',
                'route' => 'home'
            )
        )
    )
);
