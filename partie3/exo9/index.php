
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
$number = random_int(0, 30);
echo $number;
for ($i = 0; $i <= 100; $i++) {
    echo '<br>';
    echo $i;
    if ($i == $number ){
        break;
    }  
}
?>

</body>
</html>
