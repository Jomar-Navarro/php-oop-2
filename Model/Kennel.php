<?php

require_once __DIR__ . '/Product.php';


class Kennel extends Product
{
  public $size;

  public function __construct(string $_image, string $_name, float $_price, $_category, string $_type, string $_size)
  {
    parent::__construct($_image, $_name, $_price, $_category, $_type);
    $this->size = $_size;
  }
}
