<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
function str($int3,$int4){
    if ($int3 == $int4){
        return 'les deux nombres sont indentiques';
    }
    elseif ($int3 > $int4){
        return 'le premier nombre est plus grand';
    }
    else {
        return 'le deuxiéme nombre est plus grand';
    }
}
echo str(1,2);
?>

</body>
</html>