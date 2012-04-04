<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		
		$this->view->title =  'Main Page';

		$place = new  Application_Model_Place();
		$placeMapper = new Application_Model_PlaceMapper();
		$placeMapper->find(1, $place);
		
		$this->view->place = $place;
		

    }
	
	public function aboutAction()
	{
		$this->view->title = 'About Me';
	}


}

?>
