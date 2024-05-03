<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Kennel.php';
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

      <div>
        <h3 class="text-white fw-bold text-center mt-5">Food</h3>
        <h4 class="fw-bold text-white my-4">Dog's</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($dogFood as $product) : ?>
            <div class="card m-3">
              <img class="img-fluid" src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <h4 class="fw-bold text-white my-4">Cat's</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($catFood as $product) : ?>
            <div class="card m-3">
              <img class="img-fluid" src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div>
        <h3 class="text-white fw-bold text-center mt-5">Toys</h3>
        <h4 class="fw-bold text-white my-4">Dog's Toys</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($dogToys as $product) : ?>
            <div class="card m-3">
              <img src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <h4 class="fw-bold text-white my-4">Cat's Toys</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($catToys as $product) : ?>
            <div class="card m-3">
              <img src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div>
        <h1 class="text-white fw-bold text-center mt-5">Kennel</h1>
        <h4 class="fw-bold text-white my-4">Dog's Kennel</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($kennelDogBed as $product) : ?>
            <div class="card m-3">
              <img src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
                <p>Dimensione: <?php echo $product->size ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <h4 class="fw-bold text-white my-4">Cat's Kennel</h4>
        <div class="col-12 d-flex justify-content-center">
          <?php foreach ($KennelCatBed as $product) : ?>
            <div class="card m-3">
              <img src="<?php echo $product->image ?>" alt="Product Image">
              <div class="card-body bg-body-secondary">
                <h2><?php echo $product->name ?></h2>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Categoria: <?php echo $product->category->name ?></p>
                <p>Tipo: <?php echo $product->type ?></p>
                <p>Dimensione: <?php echo $product->size ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

    </div>
  </div>
</body>

</html>