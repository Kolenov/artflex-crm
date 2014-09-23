<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DashboardController
 *
 * @author
 *
 * @version
 *
 */
class DashboardController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        // TODO Auto-generated DashboardController::indexAction() default action
        return new ViewModel();
    }
}