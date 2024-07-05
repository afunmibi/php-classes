<?php
//for loop
for($i =0; $i<5; $i++){
    echo "Hello". " ". $i ;
    echo"<br>";
}; 



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forloop.php" method="post">
    <label>Enter a number to count to:</label>
    <input type="text" name="counter">
    <input type="submit" value="start">
    
    </form>


     <form action="forloop.php" method="post">
    <label>Enter a number to count down from:</label>
    <input type="text" name="counter1">
    <input type="submit" value="start1">
    
    </form>
</body>
</html>

<?php
$counter = $_POST["counter"];

for($i=1; $i<=$counter; $i++){
    echo$i."<br>";
}

?>
<?php
$counter1 = $_POST["counter1"];
for($i = $counter1; $i>0; $i--){
    echo $i."<br>";
}

?>