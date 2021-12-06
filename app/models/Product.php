<?php

interface productsInterface
{
    public function __construct($id, $name, $image, $description, $price);
    public function getId();
    public function getImage();
    public function getDescription();
    public function getPrice();
    public function getName();
}
class Product implements productsInterface
{
    protected $id;
    protected $image;
    protected $description;
    protected $price;
    protected $name;
    public function __construct($id, $name, $image, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getName()
    {
        return $this->name;
    }
}
