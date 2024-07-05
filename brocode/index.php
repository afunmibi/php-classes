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
$price = 5.99;
$quantity = htmlspecialchars( $_POST["quantity"]);
$total = null; 
$total = $quantity * $price; 

echo "You have ordered {$quantity} x {$item}/s <br>";
echo"Your total is: \${$total} <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
<form action="index.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>

        <label>Password</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log In" name="btn">
        </form>  
-->
</body>
</html>
<?php
/*
//to get input from form input fields using $_GET and $_POST method
echo $_POST["username"]; 
echo"<br>";
echo $_POST["password"]; 
*/
?>



<?php
/*
//Arithmetic operators
//+ - * / ** %
$x = 10;
$y = 3;
$z = null;
$z = $x + $y;
echo $z; 
echo"<br>";
$z = $x - $y;
echo $z; 
echo"<br>";

$z = $x * $y;
echo $z;
echo"<br>"; 
$z = $x ** $y;
echo $z; 
echo"<br>";
$z = $x % $y;
echo $z; 
echo"<br>";

//Increment/decrement operators
//++, --
$counter = 0;
$counter += $counter++;
echo"<br>";
//$counter += $counter--;
//echo $counter;
echo"<br>";
//Operator Precedence
//()
//**
//* / %
// + -
*/

/*
//data types in php
$name = "Bro Code <br>";
echo "Hello {$name}";
$food = "pizza";
$email = "fake@gmail.com <br>";
$age = 21;
$users = 2;
$quantity = 5;
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1 ;
$employed = true;
$online = true;
$for_sale = true; 

//examples from Bro code
$total = null; 
echo" you have ordered {$quantity} x {$food}s <br>";
$total = $quantity * $price;
echo"Your total is: \${$total} <br>";
*/


//examples fro Bro code //intro to php
/*
echo"you are {$age} years old <br>";

echo"There are {$users} users online <br>";

echo"you like  {$food} <br>";
echo "you email is {$email} <br>"; 
echo"you would like to buy {$quantity} items <br>";
echo"your gpa is {$gpa} <br>";
echo"your pizza is \$ {$price}<br>";
echo"The sales tax rate is: {$tax_rate}% <br>";
echo"Online status:  {$online} <br>";
*/
 ?>
