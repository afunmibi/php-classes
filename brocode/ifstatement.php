<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ifstatement.php" method="post">
    <label>Hours:</label>
    <input type="text" name="hours" placeholder="Please enter number of Hours worked">
    <input type="submit" value="weekly_pay">
    
    </form>



</body>
</html>

<?php
$hours= $_POST["hours"];
$weekly_pay = null;
$rate = 15;
if($hours<=0){
$weekly_pay =0;
}
elseif($hours<=40){
$weekly_pay = $hours * $rate; 
} elseif($hours > 40){
    $weekly_pay = ($rate * 40) + (($hours-40)* ($rate *1.5));
}
echo"you made weekly_pay of \${$weekly_pay}";



// if else statement to check conditions
$age = 15;
if($age>= 100){
echo"You are too old to enter the website";
}
elseif($age>=18){
echo"You may enter this website";

}elseif($age <=0){
echo"you were just born";
}


else{
    echo"You must be 18+ to enter this website";
}





 ?>













<?php
/*
$hours = 50;
$rate =15;
$weekly_pay = null;
 
 if($hours <=0){
    $weekly_pay = 0;

 }elseif($hours<=40){
    $weekly_pay = $hours * $rate;
 }else{
    $weekly_pay = ($rate *40) + (($hours-40) *($rate *1.5));
 }
echo"You made \${$weekly_pay} this week"; 

*/
?>





















<?php
/*
$age = 10;

if($age>=18){
echo"You may enter the website";
}
elseif($age==0){
    echo"You were just born";
}

else{
    echo"You must be 18+ to enter the website";
}
*/
?>