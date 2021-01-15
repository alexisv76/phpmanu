<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
function sum(...$numbers) {
    $i = 0;
    foreach ($numbers as $n) {
        $i += $n;
    }
    return $i;
}

echo sum(1, 2);

?>

</body>
</html>