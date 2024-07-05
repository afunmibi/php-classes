<?php
//while loop = do some code infinitely while some condition remains true; 

$counter = 0;
while($counter <10){
$counter++;
echo $counter ."<br>";
}




//stop watch

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileloop.php" method="post">
    <input type='submit' name="stop" value="stop">
    
    </form>
</body>
</html>

<?php
$seconds = 0;
$running = true; 

while($running = false){
if(isset($_POST["stop"])){
    $running = false;
}else{
//wait 1 seconds
$seconds ++;
echo $seconds . "<br>";
}
}





?>