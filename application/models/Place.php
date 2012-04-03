<?php

class Application_Model_Place
{

    protected $_id;
    protected $_created;
    protected $_date_updated;
    protected $_name;
    protected $_address1;
    protected $_address2;
    protected $_address3;
    protected $_town;
    protected $_county;
    protected $_postcode;
    protected $_country;



    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid place property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid place property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
 	

   public function setName($text)
    {
        $this->_name = (string) $text;
        return $this;
    }
 
    public function getName()
    {
        return $this->_name;
    }

   public function setAddress1($text)
    {
        $this->_Address1 = (string) $text;
        return $this;
    }
 
    public function getAddress1()
    {
        return $this->_Address1;
    }


   public function setAddress2($text)
    {
        $this->_Address2 = (string) $text;
        return $this;
    }
 
    public function getAddress2()
    {
        return $this->_Address2;
    }

   public function setAddress3($text)
    {
        $this->_Address3 = (string) $text;
        return $this;
    }
 
    public function getAddress3()
    {
        return $this->_Address3;
    }


   public function setTown($text)
    {
        $this->_town = (string) $text;
        return $this;
    }
 
    public function getTown()
    {
        return $this->_town;
    }


   public function setCounty($text)
    {
        $this->_county = (string) $text;
        return $this;
    }
 
    public function getCounty()
    {
        return $this->_county;
    }

   public function setPostcode($text)
    {
        $this->_postcode = (string) $text;
        return $this;
    }
 
    public function getPostcode()
    {
        return $this->_postcode;
    }

   public function setCountry($text)
    {
        $this->_country = (string) $text;
        return $this;
    }
 
    public function getCountry()
    {
        return $this->_country;
    }

    public function setId($id)
    {
        $this->_id = (int) $id;
        return $this;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}

?>