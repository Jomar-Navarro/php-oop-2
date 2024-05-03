<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Category.php';

$foodProduct = [
  new Product('image01.jpg', 'Croccantini per Cani', 20.99, $categoryCani, 'food'),
  new Product('image01.jpg', 'Croccantini per Gatti', 20.99, $categoryGatti, 'food')
];


$toyProduct = [
  new Product('dog_toy.jpg', 'Giocattolo per Cani', 9.99, $categoryCani, 'toy'),
  new Product('cat_toy.jpg', 'Giocattolo per Gatti', 9.99, $categoryGatti, 'toy')
];

$bedProduct = [
  new Product('dog_bed.jpg', 'Cuccia per Cani', 29.99, $categoryCani, 'bed'),
  new Product('gatti_bed.jpg', 'Cuccia per Gatti', 29.99, $categoryGatti, 'bed'),
];
