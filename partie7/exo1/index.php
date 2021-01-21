<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php 
echo $_SERVER['HTTP_USER_AGENT'] ;
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];


  ?>

</body>
</html>