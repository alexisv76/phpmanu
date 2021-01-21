<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<form  action="" method="Post">
 <p>Votre mail: <input type="mail" name="mail" required /></p>
 <p>mdp : <input type="password" name="mdp" required /></p>
 <p><input type="submit" value="OK" required></p></p>
</form>
<?php 
if(isset($_POST['mail'])){
    setcookie("mail", $_POST['mail']);
    setcookie("mdp", $_POST['mdp']);

}
?>

</body>
</html>