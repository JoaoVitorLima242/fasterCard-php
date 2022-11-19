<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="/assets/logo1.png" />
    <title>Faster Cars</title>
  </head>
  <body>
  <?php
    include "layout/menu.php";

    $conn = mysqli_connect('localhost','root','', 'fastercar');

    $cars = mysqli_query($conn, "
      select * from car
    ");
    ?>

<div class="product-container" id="product">
   <?php while($car = $cars->fetch_assoc()) { ?>
      <div class="card">
        <div class="card-image" id="car2" style="background-image: url(<?php echo $car['imageUrl']?>);"></div>
        <h3><?php echo $car['brand']?> - <?php echo $car['name']?>  </h3>
        <p>
        <?php echo $car['description']?>
        </p>
        <a href="product.php?id=<?php echo $car['carID']?>">MOSTRAR MAIS</a>
      </div>;
  <?php 
    }
  ?>
  </body>
</html>
