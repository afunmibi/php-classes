<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
    <label>Radio Buttons:</label><br><br>
    <input type="radio" name="credit_card" value="Visa" >Visa <br>
    <input type="radio" name="credit_card" value="Mastercard" >Mastercard <br>
    <input type="radio" name="credit_card" value="American Express" >American Express <br>
    <br>
    <input type="submit" name="confirm" value="confirm">
    
    </form>
</body>
</html>

<?php
/*
if(isset($_POST["confirm"])){
    if(isset($_POST["credit_card"])){
      $credit_card = $_POST["credit_card"];
      echo"$credit_card <br>";  
    }else{
        echo"Please make a selection";
    }
    echo"{$credit_card}, thank you for banking with us <br>";
}
*/
?>



<?php
/*
// better again
$credit_card= null;

if(isset($_POST["confirm"])){
    if(isset($_POST["credit_card"])){
      $credit_card = $_POST["credit_card"];
if($credit_card=="Visa"){
    echo"You selected Visa";
}elseif($credit_card=="Mastercard"){
    echo"You selected Mastercard";
}elseif($credit_card=="American Express"){
 echo"You selected American Express";
}
}else{
    echo"Please make a selection";
}}
*/
?>
<?php
$credit_card= null;
if(isset($_POST["confirm"])){
    if(isset($_POST["credit_card"])){
      $credit_card = $_POST["credit_card"];
    }
switch($credit_card){
 case "Visa":
 echo"You selected Visa";
 break;

 case "Mastercard":
 echo"You selected Mastercard";
 break;

 case "American Express":
 echo"You selected American Express";
 break;
default;
echo"Please make a selection";
}

}





?>