<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
$str1 = 'bonjour ';
$str2 = 'toi';
function str($str3,$str4){
    return $str3.$str4;
}
echo str($str1,$str2);
?>

</body>
</html>
