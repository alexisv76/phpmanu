<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php

$hautDeFrance = array(2=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-calais"
,80=>"Somme");

$hautDeFrance[51] = "Marne";

print_r($hautDeFrance)

?>
</body>
</html>