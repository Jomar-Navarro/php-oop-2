<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Category.php';

$db = [
  $dogFood = [
    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/224338-200-200/virtus-rustic-cane-adult.jpg?v=637454741671700000',
      'Croccantini per Cani',
      20.99,
      $categoryCani,
      'food'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/282088-200-200/purina-one-cane-adult-agnello-riso.jpg?v=638132667548900000',
      'Croccantini per Cani',
      25.99,
      $categoryCani,
      'food'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/276615-200-200/MAIN.jpg?v=638034911955130000',
      'Alimento per Cani',
      25.99,
      $categoryCani,
      'food'
    ),
  ],

  $catFood = [
    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/269928-200-200/virtus-cat-sterilised-nutrition-selection-salmone-1-8-kg.jpg?v=637840506444500000',
      'Croccantini per Gatti',
      20.99,
      $categoryGatti,
      'food'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/299364-200-200/natural-trainer-gatto-sterilised-salmone-10112328--1-.jpg?v=638482560030700000',
      'Croccantini per Gatti',
      20.99,
      $categoryGatti,
      'food'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/285499-200-200/1338015-1-416x599--1-.jpg?v=638197416605200000',
      'Alimento per Gatti',
      20.99,
      $categoryGatti,
      'food'
    )
  ],


  $dogToys = [
    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/273069-200-200/LOVEDI-GIOCO-CANE-PELUCHE-CORDA-JUNGLE-ELEFANTE.jpg?v=637920012649330000',
      'Giocattolo per Cani',
      9.99,
      $categoryCani,
      'toy'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/273072-200-200/LOVEDI-GIOCO-CANE-PELUCHE-CORDA-JUNGLE-VOLPE.jpg?v=637920023069500000',
      'Giocattolo per Cani',
      9.99,
      $categoryCani,
      'toy'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/273062-200-200/LOVEDI-GIOCO-CANE-PELUCHE-ATLANTIDE-POLPO.jpg?v=637919988166230000',
      'Giocattolo per Cani',
      9.99,
      $categoryCani,
      'toy'
    ),
  ],

  $catToys = [
    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/291708-200-200/lovedi-gioco-gatto-xmas-bacchetta-topo-10170309.jpg?v=638351387471670000',
      'Giocattolo per Gatti',
      9.99,
      $categoryGatti,
      'toy'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/273115-200-200/LOVEDI-GIOCO-GATTO-CANNA-PESCA-C_TRE-PALLINE-CM.35.jpg?v=637921031167700000',
      'Giocattolo per Gatti',
      9.99,
      $categoryGatti,
      'toy'
    ),

    new Product(
      'https://arcaplanet.vtexassets.com/arquivos/ids/273114-200-200/LOVEDI-GIOCO-GATTO-CANNA-DA-PESCA-CON-PESCE-CM.42.jpg?v=637921027967030000',
      'Giocattolo per Gatti',
      9.99,
      $categoryGatti,
      'toy'
    ),
  ],

  $kennelDogBed = [
    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/216810-200-200/https---www.arcaplanet.it-media-catalog-product--b-a-baita-ferc14_1.jpg?v=637454582539930000',
      'Cuccia per Cani',
      29.99,
      $categoryCani,
      'bed',
      'small'
    ),

    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/225622-200-200/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000',
      'Cuccia per Cani',
      29.99,
      $categoryCani,
      'bed',
      'Extra Small'
    ),

    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/275501-200-200/luna-e-teo-cuccia-angolare-colore-natural.jpg?v=637992740538100000',
      'Cuccia per Cani',
      29.99,
      $categoryCani,
      'bed',
      'Extra Large'
    ),
  ],

  $KennelCatBed = [
    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/265702-200-200/PHO_PRO_CAT_CLIP_49920-01-49923-1_-SALL_-APRKU_-V1.jpg?v=637737941822300000',
      'Cuccia per Gatti',
      29.99,
      $categoryGatti,
      'bed',
      'Extra Small'
    ),

    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/276588-200-200/luna-e-teo-cuccia-ratto-royal-blu-con-cuscino.jpg?v=638034263386000000',
      'Cuccia per Gatti',
      29.99,
      $categoryGatti,
      'bed',
      'Small'
    ),

    new Kennel(
      'https://arcaplanet.vtexassets.com/arquivos/ids/257703-200-200/36357--2-.jpg?v=637586781842200000',
      'Cuccia per Gatti',
      29.99,
      $categoryGatti,
      'bed',
      'Large'
    ),
  ],
];
