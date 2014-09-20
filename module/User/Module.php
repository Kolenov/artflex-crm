<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/User for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace User;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements AutoloaderProviderInterface
{

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php'
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    
                    // if we're in a namespace deeper than one level we need to fix the \ in the path
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/', __NAMESPACE__)
                )
            )
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function onBootstrap(MvcEvent $e)
    {
        // You may not need to do this if you're doing it elsewhere in your
        // application
        $application = $e->getApplication();
        $eventManager = $application->getEventManager();
        $sharedManager = $eventManager->getSharedManager();
        $serviceManager = $application->getServiceManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        // Добавляем поле выбора роли в форму
        $sharedManager->attach('ZfcUser\Form\Register', 'init', function ($e) use($serviceManager)
        {
                // @var $form \ZfcUser\Form\Register
            $form = $e->getTarget();
            $form->add(array(
                'name' => 'role',
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'options' => array(
                    'label' => 'Roles',
                    'object_manager' => $serviceManager->get('doctrine.entitymanager.orm_default'),
                    'target_class' => '\User\Entity\Role',
                    'property' => 'roleId'
                )
            ));
            
            //$filter = $e->getTarget();
            //$filter->add();
        }); 

        $zfcServiceEvents = $serviceManager->get('zfcuser_user_service')->getEventManager();
        // Store the field
        $zfcServiceEvents->attach('register', function ($e) use($serviceManager)
        {
            $form = $e->getParam('form');
            $roleId = $form->get('role')->getValue();
            $user = $e->getParam('user');
            $objectManager = $serviceManager->get('doctrine.entitymanager.orm_default');
            // Получаем объект Role
            $role = $objectManager->find('User\Entity\Role', $roleId);
            $user->addRole($role);
        });
        
/*      // add default role
        $zfcServiceEvents = $mvcEvent->getApplication()->getServiceManager()->get('zfcuser_user_service')->getEventManager();
        $zfcServiceEvents->attach('register', function($e) use($mvcEvent) 
        {
            $user = $e->getParam('user');
            $em = $mvcEvent->getApplication()->getServiceManager()->get('doctrine.entitymanager.orm_default');
            $config = $mvcEvent->getApplication()->getServiceManager()->get('config');
            $defaultUserRole = $em->getRepository('User\Entity\Role')->find($config['user_role_id']);
            $user->addRole($defaultUserRole);
        }); 
*/     
    }
}
