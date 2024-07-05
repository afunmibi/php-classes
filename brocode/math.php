<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Absolute value-->
   <form method="post" action="">
   <label>X:</labe>
   <input type="text" name="x"><br>
   <label>Y:</labe>
    <input type="text" name="y"><br>
    <label>Z:</labe>
    <input type="text" name="z"><br>

   <input type="submit" value="total"><br>
   </form>
</body>
</html>

<?php
//absolute value for mathematics
$x= $_POST["x"];
$y= $_POST["y"];
$z= $_POST["z"];
$total = null;
//$total = abs($x); absolute in mathematics
//$total = round($x); to round number to the nearest interger 
//$total = floor($x); to round down the float number
//$total = ceil($x); to round up float number 
//$total = pow($x, $y); raise to power like 2 raised to power of 3
//$total = sqrt($x); square root of 9 is 3, remember mathematics
//$total = sqrt($y);
//$total = max($x, $y, $z); look for maximum number among them
//$total = min($x, $y, $z); look for manimum number among them
//$total = pi(); to get pi in mathematics
//$total = rand(1, 6); like rolling of a dice rand(1, 100); etc
$total = pi();
 











echo $total; 
?>