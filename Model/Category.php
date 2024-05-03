<?php

class Category
{
  public $name;

  public function __construct($_name)
  {
    $this->name = $_name;
  }
}


$categoryCani = new Category('Cani');
$categoryGatti = new Category('Gatti');
