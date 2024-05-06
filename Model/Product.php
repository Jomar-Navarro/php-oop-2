<?php

trait Price
{
  public function getPrice($message)
  {
    throw new Exception($message);
  }
}

class Product
{

  use Price;

  public $image;
  public $name;
  public $price;
  public $category;
  public $type;

  public function __construct(string $_image, string $_name, float $_price, $_category, string $_type)
  {
    $this->image = $_image;
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;
    $this->type = $_type;
  }

  public function prezzo()
  {
    if ($this->price <= 0) {
      $this->getPrice('Prezzo non valido: il prezzo deve essere maggiore di zero.');
    }
  }
}
