<?php
 $temp = -10;
 if($temp >=0 && $temp <=30){
    echo "The weather is good";
 }else{
    echo"The weather is bad <br>";
 };

 


 $temp = 45;
 $cloudy= true;

 if($temp >=0 || $temp <=30){
    echo "The weather is good <br>";
 }else{
    echo"The weather is bad <br>";
 }
if($cloudy==true){
echo"It's cloudy";
}else{
    echo"It's sunny";
}






$age = 18;
$citizen = false;
if($age >=18 && $citizen){
    echo "You can vote <br>";
}else{
    echo"you cannot vote <br>";
}


$child = true;
$senior = false;
$ticket = null;
if($child || $senior){
$ticket = 10; 
}else{
    $ticket = 15; 
}
echo"The ticket price is \${$ticket}";



?>