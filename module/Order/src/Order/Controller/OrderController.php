<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Order for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Order\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Order\Entity\Order;

class OrderController extends AbstractActionController
{
    public function indexAction()
    {
            $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');
        
            $order = new Order();
            $order->setId(0);
            $order->setManager(1);
            $order->setCalculation(1);
            $order->setClient(1);
            $order->setState(1);
        
            $objectManager->persist($order);

            $objectManager->flush();
        
            die(var_dump($order->getId())); // yes, I'm lazy

        //return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /order/order/foo
        return array();
    }
}
