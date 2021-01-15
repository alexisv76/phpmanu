<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
function maximum($i,$a) {
    $t = array($i,$a);
    return max($t);
}

echo maximum(35, 5);

?>

</body>
</html>