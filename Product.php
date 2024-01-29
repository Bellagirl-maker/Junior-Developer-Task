<?php
abstract class Product
{
    protected $id;
    protected $name;
    protected $price;

    // Constructor
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for ID
    public function getId()
    {
        return $this->id;
    }

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Getter for price
    public function getPrice()
    {
        return $this->price;
    }

    // Setter for ID
    public function setId($id)
    {
        $this->id = $id;
    }

    // Setter for name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Setter for price
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Other common methods can be added here
}
?>
