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
    $id =  $_GET['id'];
    $qry = 'select * from car where carID =' .$id;

    $cars = mysqli_query($conn, $qry);

  ?>
    <div class="product-details" id="product">
    <?php while($car = $cars->fetch_assoc()) { ?>

      <div class="content">
        <div>
          <img
            src='<?php echo $car['imageUrl']?>'
            alt="Mitsubishi Lancer"
          />
        </div>
        <div class="info">
          <h2><?php echo $car['brand']?> - <?php echo $car['name']?></h2>
          <p>
            <?php echo $car['description']?>
          </p>
        </div>
      </div>
      <?php } ?>

    </div>
  </body>
</html>
