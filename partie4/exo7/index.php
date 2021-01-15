<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> exo php </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
function genre($gender,$age){
    if($gender == 'homme' && $age >=18)
{return 'Vous êtes un homme et vous êtes majeur';}
else if($gender == 'homme' && $age <=18)
{return 'Vous êtes un homme et vous êtes mineur';}
else if($gender == 'femme' && $age <=18)
{return 'Vous êtes une femme et vous êtes mineur';}
else
{return 'Vous êtes une femme et vous êtes majeur';}

}
echo genre('homme',4);
?>

</body>
</html>