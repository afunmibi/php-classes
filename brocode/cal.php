<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cal.php" method="post">
    <label>Radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
    
    </form>
</body>
</html>

<?php

$radius =$_POST["radius"];
$circumference = null;
$circumference = 2* pi() * $radius; 
$circumference=round($circumference, 2);
echo"Circumference = {$circumference}cm <br>";

//to calculate for area of Circumference;
$area = null;
// formular to calculate area of circumference is A=2pir(radius)sqrt
$area = pi() * pow($radius, 2);
$area = round($area, 2);
echo"The Area is: {$area}cm2 ";
echo"<br>";
//to calculate for volume

$volume = null;
$volume = 4/3 * pi() * pow($radius, 3); 
$volume = round($volume, 2);
echo "The Volume is: {$volume}cm3";







?>