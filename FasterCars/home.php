<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="/assets/logo1.png">
  <title>Faster Cars</title>

</head>
<body>


<?php
  include "layout/menu.php";
  
  $link = mysqli_connect('localhost','root','', 'fastercar');
?>
  <main>
    <!--
     Title and a litle resume. I put a background-image to be more beautiful.
-->
    <div class="title-container" id="title-container">
      <div class="title">
        <h1>Faster cars</h1>
        <h2>Caros com qualidade e preços baixos.</h2>
      </div>
    </div>
    <!--
    In this container I can put a little resume about your shop, and add a image, video our another information of our choice.
-->
    <div class="about-container" id="about-us">
      <!--
   I used a youtube video for example.
-->
      <div>
        <iframe src="https://www.youtube.com/embed/UT5hhWLtewM" muted id=video>
        </iframe>
      </div>
      <div class="box-p">
        <h3>Sobre Nós:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </main>
</body>
</html>