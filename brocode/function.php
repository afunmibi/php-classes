<?php
$last_name = null;


function happy_birthday($first_name,$last_name ,$age){
    echo"Happy Birthdy dear {$first_name} {$last_name}! <br>";
    echo"Happy Birthdy to you! <br>";
    echo"Happy Birthdy dear {$first_name}! <br>";
    echo"You are {$age} years old today! <br>";
}

happy_birthday("Felix","Adewale", 9);

 function is_even($number){
    $result = $number %2;
    return $result;
 }
echo is_even(10);
echo "<br>";

//to find hypothenus of the right angle triangle

function hypothenuse($a, $b){
    $c = sqrt($a ** 2 + $b **2);
    return $c;
}
echo hypothenuse(4,5);


?>