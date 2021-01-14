<?php
echo "exo 1";
echo "<br>";
$age = 12;
if($age >= 18)
{echo ' Vous êtes majeur. ';}
else
{echo ' Vous êtes mineur.';}
echo '<br>';
echo '<br>';
echo "exo 2";
echo "<br>";
echo '<br>';
$isEasy = True;
echo ($isEasy) ? 'C\'est facile ' : 'C\'est difficile !!!';
echo "<br>";
if($isEasy)
{echo 'C\'est facile ';}
else
{echo 'C\'est difficile';}
echo '<br>';
echo '<br>';
echo "exo 3";
echo "<br>";
echo '<br>';
$age = 50000;
$gender = 'femme';
if($gender == 'homme' && $age >=18)
{echo 'Vous êtes un homme et vous êtes majeur';}
else if($gender == 'homme' && $age <=18)
{echo 'Vous êtes un homme et vous êtes mineur';}
else if($gender == 'femme' && $age <=18)
{echo 'Vous êtes une femme et vous êtes mineur';}
else
{echo 'Vous êtes une femme et vous êtes majeur';}

?>