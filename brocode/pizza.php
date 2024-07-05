<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Quantity:</label>
    <input type="text" name="quantity">
    <input type="submit" value="Total">
    
    </form>
</body>
</html>

<?php
$item = "pizza";
$price = 6.49;
$qua = $_POST["quantity"];
$total = null;
$total = $price * $qua;

 echo "you have ordered {$qua} of {$item}";
 echo"<br>";
 echo"Your Total payment is: {$total}";



?>