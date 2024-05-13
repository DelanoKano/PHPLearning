<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP || DelanoKano</title>
</head>
<body>
<?php
// variable maken
$hello = "Hello World";
echo ("{$hello}<br><br>");
//optellen en printen 
$number = 2;
$number2 = 1;
$total = $number + $number2;
echo ("Answer: {$total}<br><br>");
//Opdracht array
$cars = array("Peugeot", "Opel", "Ferrari");
echo ("{$cars[2]}<br><br>");
//Opdracht Associative array
$objectauto = array("kleur", "snelheid", "zitplaatsen");
$objectauto[0] = "Geel";
$objectauto[1] = "200km";
$objectauto[2] = 4;
echo ("Mijn autokleur is
     {$objectauto[0]}
      en ik rijd {$objectauto[1]} per uur 
      en ik heb {$objectauto[2]} 
      zitplaatsen in me autO");

// Opdracht Maak Associative array
      
?>
</body>
</html>
