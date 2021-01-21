<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php

function facto($i) {
    $product = 1;
    while ($i != 0):
        $product = $product*$i;
        $i--;
    endwhile;
    return $product; 
}

echo facto(7);
echo '<br>';
function factorielle($nbr) 
    { 
       if($nbr == 0) // condition d'arret 
          return 1;  
      else 

          return $nbr*factorielle($nbr-1); 
    }  
    echo factorielle(7);
    echo '<br>';
?>

</body>
</html>