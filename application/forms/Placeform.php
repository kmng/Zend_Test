<?php

class Application_Form_Placeform extends Zend_Form
{

    public function init()
    {
    	$this->setMethod('post');

    	$this->addElement('text', 'name', array(
            'label'      => 'Name',
            'required'   => true,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'address1', array(
            'label'      => 'Address Line 1',
            'required'   => true,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'address2', array(
            'label'      => 'Address Line 2',
            'required'   => false,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'address3', array(
            'label'      => 'Address Line 3',
            'required'   => false,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'town', array(
            'label'      => 'Town',
            'required'   => true,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'county', array(
            'label'      => 'County',
            'required'   => true,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'postcode', array(
            'label'      => 'Post Code',
            'required'   => false,
            'filters'    => array('StringTrim')
        ));

    	$this->addElement('text', 'country', array(
            'label'      => 'Country',
            'required'   => true,
            'filters'    => array('StringTrim')
        ));


        $this->addElement('captcha', 'captcha', array(
            'label'      => 'Please enter the 5 letters displayed below:',
            'required'   => true,
            'captcha'    => array(
                'captcha' => 'Figlet',
                'wordLen' => 5,
                'timeout' => 300
            )
        ));

      	$this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Enter Address',
        ));	
    	    
    }


}

?>