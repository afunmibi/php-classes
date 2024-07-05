<?php

setcookie("fav_food","pizza",time() + (86400 *2), "/"); 
// the time there shows number of days you want cookie to expire bcos 
//86400 is for one day and the two there means x 1
setcookie("fav_drink","coffee",time() + (86400 *3), "/"); 
setcookie("fav_deseve","ogbonge",time() -0, "/"); 

foreach($_COOKIE as $key => $value){
echo"{$key} = {$value} <br>";
}




?>