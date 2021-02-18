
<?php


$guestName = $_GET['guest'];
$HariIni=date('l jS \of F Y h:i:s A');


$today = date('l');

$backgroundColor = $_GET['color'];


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body bgcolor=<?= $backgroundColor ?>>
    <h1>Program 01</h1>
    Today is : <?php echo $HariIni ?>
<hr>

<h2>Hello, <?php echo $guestName ?></h2>
<h3>Happy <?php echo $today ?></h3>

  </body>
</html>
