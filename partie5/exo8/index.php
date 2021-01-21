<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php

$month = array('janvier','fevrier','mars','avril','mai','juin',
'juillet','aout','septembre','octobre','novembre','decembre');

foreach ($month as $value) {
    echo $value;
    echo "<br>";
}

?>
</body>
</html>