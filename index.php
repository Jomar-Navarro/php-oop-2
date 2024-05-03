<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Data/db.php';


var_dump($foodProduct);
var_dump($toyProduct);
var_dump($bedProduct)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Modello</title>
</head>

<body>
  <div class="container my-5">
    <h1> php-oop-2</h1>

    <div class="d-flex flex-wrap justify-content-center">

      <?php foreach ($foodProduct as $product) : ?>
        <div class="card m-3">
          <img src="<?php echo $product->image ?>" alt="Product Image">
          <div class="card-body">
            <h2><?php echo $product->name ?></h2>
            <p>Prezzo: <?php echo $product->price ?> €</p>
            <p>Categoria: <?php echo $product->category->name ?></p>
            <p>Tipo: <?php echo $product->type ?></p>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($toyProduct as $product) : ?>
        <div class="card m-3">
          <img src="<?php echo $product->image ?>" alt="Product Image">
          <div class="card-body">
            <h2><?php echo $product->name ?></h2>
            <p>Prezzo: <?php echo $product->price ?> €</p>
            <p>Categoria: <?php echo $product->category->name ?></p>
            <p>Tipo: <?php echo $product->type ?></p>
          </div>
        </div>
      <?php endforeach; ?>

      <?php foreach ($bedProduct as $product) : ?>
        <div class="card m-3">
          <img src="<?php echo $product->image ?>" alt="Product Image">
          <div class="card-body">
            <h2><?php echo $product->name ?></h2>
            <p>Prezzo: <?php echo $product->price ?> €</p>
            <p>Categoria: <?php echo $product->category->name ?></p>
            <p>Tipo: <?php echo $product->type ?></p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</body>

</html>