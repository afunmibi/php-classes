<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetandempty.php" method="post">
    <label>username:</label>
    <input type="text" name="username"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log in">
    
    </form>
</body>
</html>

<?php
//isset and empty() to validate form through button and input fields
if(isset($_POST["login"])){
     //echo"you clicked me";
     $username = $_POST["username"];
     $password = $_POST["password"];

     if(empty($username)){
        echo"Username is missing";
     }elseif(empty($password)){
        echo"Password is mising";
     }  else{
        echo"Hello {$username} <br>";
       // echo"{$username} <br>";
       // echo"{$password} <br>";
     }
}
