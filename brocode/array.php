<?php
$foods=array("apple", "orange", "banana", "coconut");
//$foods[0]= "pineaplle";
//array_push($foods, "pineaplle", "kiwi", "igba"); 
//array_pop($foods);
//array_shift($foods);

$reversed_foods=array_reverse($foods);
foreach($foods as $food){
    echo $food."<br>";


}


echo count($foods);


//foreach($reversed_foods as $food){
  // echo $food."<br>";

//}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
    <label>username:</label>
    <input type="text" name="username"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log in">
    
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
     echo"you clicked me";
}






















/*
foreach($_POST as $key => $value){
    echo"{key} = {value} <br>";
}
*/
?>