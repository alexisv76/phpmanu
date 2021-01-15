<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
function str($lastname,$firstname,$age){
    return 'bonjour '.$lastname.' '.$firstname.' tu as '.$age.' ans';
}
echo str('monsieur','moi',4);
?>

</body>
</html>