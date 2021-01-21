<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php 
session_start();

echo $_SESSION["lastname"];
echo "<br>";
echo $_SESSION["firstname"] ;
echo "<br>";
echo $_SESSION["age"];
  ?>

</body>
</html>