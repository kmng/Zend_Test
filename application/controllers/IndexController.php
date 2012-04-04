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

		$oldplace = new  Application_Model_Place();
		$place = new  Application_Model_Place();
		$placeMapper = new Application_Model_PlaceMapper();
		$placeMapper->find(1, $place);
		$placeMapper->find(1, $oldplace);
		
		$this->view->p = $oldplace;
		$place->setName('Kin-Man');
		$placeMapper->save($place);
		
		$this->view->place = $place;

		
    }
	
	public function aboutAction()
	{
		$this->view->title = 'About Me';
		$placeMapper = new Application_Model_PlaceMapper();
		$this->view->allview = $placeMapper->fetchAll();
	}


	public function insertAction()
	{
        $request = $this->getRequest();
        $form    = new Application_Form_Placeform();

      	if ($this->getRequest()->isPost()) 
		{
            if ($form->isValid($request->getPost())) 
			{
                $place = new Application_Model_Place($form->getValues());
                $placemapper  = new Application_Model_PlaceMapper();
                $placemapper->save($place);
                return $this->_helper->redirector('index');
            }
        }
 
		$this->view->form = $form;

	}
}

?>
