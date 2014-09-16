<?php
namespace Application\Form;

use Zend\Form\Form;

/**
 *
 * @author kolenov
 *        
 */
class ClientsForm extends Form
{
    // TODO - Insert your code here
    
    /**
     */
    function __construct()
    {
        
        parent::__construct();
        $this->setName('Clients');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'clentname',
            'attributes' => array(
            'type' => 'text',
            ),
            'options' => array(
            'label' => 'Name',
            ),
        ));
        
        $this->add(array(
           'name' => 'submit',
            'attributes' => array(
            'type' => 'submit',
                'value' => 'save',
                'id' => 'submitbutton',
            ), 
        ));
        
        
    }
}

?>