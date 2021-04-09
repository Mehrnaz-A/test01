<?php


class Test 
{
    public $name;
    public $family;
    public $age;


    public function __construct($name,$family,$age) {
        $this->name = $name;
        $this->family=$family;
        $this->age= $age;

    }
    public function intro()
    {
      echo "My name is {$this->name} my family is{$this->family} My age is{$this->age}. </br>";
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     */
    /**
     * @return mixed
     */
    public function getFamily()
    {
        return $this->family;
    }

}
