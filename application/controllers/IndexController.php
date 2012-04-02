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
		$this->view->assign('title', 'Main Page');

    }
	
	public function aboutAction()
	{
		$this->view->assign('title', 'About Me');
	}


}

?>