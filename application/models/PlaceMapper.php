<?php

class Application_Model_PlaceMapper
{

    protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Places');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_Place $place)
    {
     	$data = array(
            'name'   => $place->getName(),
            'address1' => $place->getAddress1(),
            'address2' => $place->getAddress2(),
            'address3' => $place->getAddress3(),
     		'town' => $place->getTown(),
     		'county' => $place->getCounty(),
     		'postcode' => $place->getPostcode(),
     		'country' => $place->getCountry()
     		
     	
     	);
 
        if (null === ($id = $place->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }    	
    } 

    public function find($id, Application_Model_Place $place)
    {
        $result = $this->getDbTable()->find($id);
		
		
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $place->setId($row->id)
                  ->setName($row->name)
                  ->setAddress1($row->address1)
                  ->setAddress2($row->address2)
				  ->setAddress3($row->address3)
				  ->setTown($row->town)
				  ->setCounty($row->county)
				  ->setPostcode($row->postcode)
				  ->setCountry($row->country);
	}
	
	public function fetchAll()
    	{
        	$resultSet = $this->getDbTable()->fetchAll();			
        	$entries   = array();
    	    
        	foreach ($resultSet as $row) 
        	{
            	$entry = new Application_Model_Place();
            	$entry->setId($row->id)
                  ->setName($row->name)
                  ->setAddress1($row->address1)
                  ->setAddress2($row->address2)
				  ->setAddress3($row->address3)
				  ->setTown($row->town)
				  ->setCounty($row->county)
				  ->setPostcode($row->postcode)
				  ->setCountry($row->country);
            	$entries[] = $entry;
        	}       
			
        return $entries;
	}
}

?>