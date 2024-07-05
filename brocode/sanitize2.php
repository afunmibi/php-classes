<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize2.php" method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Age:</label>
    <input type="text" name="age"><br>
     <label>Email:</label>
    <input type="email" name="email">
    <input type="submit" name="login" value="login">
    
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
    //to sanitize your input bcos users are not to be trusted
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
 
echo "Hello, {$username} <br>"; 
echo "Hello, your age is: {$age} <br>"; 
echo "Hello, {$email} <br>";
} 
//How to validate input
 
if(isset($_POST["login"])){
   
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    
if(empty($age)){
echo"That was't a valid number";
}elseif(empty($email)){
echo "That email was not valid";
}
else{
    echo"You have entered correct data <br>";
}






}

?>