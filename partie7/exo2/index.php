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
$lastname = "last";
$firstname = "first";
$age = 15;
$_SESSION["lastname"] = $lastname;
$_SESSION["firstname"] = $firstname ;
$_SESSION["age"] = $age = 15;
  ?>
<a href="session.php">redirection</a>
</body>
</html>