<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Data/db.php';


// var_dump($foodProduct);
// var_dump($toyProduct);
// var_dump($bedProduct)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Modello</title>
</head>

<body>
  <div class="container my-5">
    <h1 class="text-center my-5 fw-bolder text-white">Pet's Shop</h1>

    <div class="row d-flex flex-wrap justify-content-center">

      <h3 class="text-white fw-bold text-center">Food</h3>
      <h4 class="fw-bold text-white">Dog's</h4>
      <div class="col-12 d-flex">
        <?php foreach ($dogFood as $product) : ?>
          <div class="card m-3">
            <img class="img-fluid" src="<?php echo $product->image ?>" alt="Product Image">
            <div class="card-body">
              <h2><?php echo $product->name ?></h2>
              <p>Prezzo: <?php echo $product->price ?> €</p>
              <p>Categoria: <?php echo $product->category->name ?></p>
              <p>Tipo: <?php echo $product->type ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <h4 class="fw-bold text-white">Cat's</h4>
      <div class="col-12 d-flex">
        <?php foreach ($catFood as $product) : ?>
          <div class="card m-3">
            <img class="img-fluid" src="<?php echo $product->image ?>" alt="Product Image">
            <div class="card-body">
              <h2><?php echo $product->name ?></h2>
              <p>Prezzo: <?php echo $product->price ?> €</p>
              <p>Categoria: <?php echo $product->category->name ?></p>
              <p>Tipo: <?php echo $product->type ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <h3 class="text-white fw-bold">Toys</h3>
      <div class="col-12 d-flex">
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
      </div>

      <h3 class="text-white fw-bold">Kennel</h3>
      <div class="col-12 d-flex">
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
  </div>
</body>

</html>