<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="sanitize.php" method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Age:</label>
    <input type="text" name="age"><br>
    <label>Email:</label>
    <input type="text" email="age"><br>

    <input type="submit" name="age" value="Login">
    
    </form>
</body>
</html> 

<?php
if(isset($_POST["login"])){
$username =filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); 

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); 
echo"Hello {$username}";
if(empty($username)){
    echo"That was not a valid character";

}else {
    echo"Your Username is: {$username}";
}
if(empty($email)){
    echo"That was not a valid Email";

}else {
    echo"Your Username is: {$email}";
}
if(empty($age)){
    echo"That was not a valid numberr";

}else {
    echo"Your Username is: {$age}";
}



}


?>