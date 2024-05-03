<?php


class Product
{
  public $image;
  public $name;
  public $price;
  public $category;
  public $type;

  public function __construct(string $_image, string $_name, $_price, $_category, string $_type)
  {
    $this->image = $_image;
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;
    $this->type = $_type;
  }
}
