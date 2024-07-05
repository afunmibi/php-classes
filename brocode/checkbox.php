<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
    <label>Checkboxex:</label><br><br>
    <input type="checkbox" name="pizza" value="Pizza" >Pizza <br>
    <input type="checkbox" name="hamburger" value="Hamburger" >Hamburger <br>
    <input type="checkbox" name="hotdog" value="Hotdog" >Hotdog <br>
    <input type="checkbox" name="taco" value="Taco" >Taco <br>
    <input type="submit" name="submit" value="confirm">
    
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
   
    if(isset($_POST["pizza"])){
        echo"You like Pizzas <br>";
    };
     if(isset($_POST["hamburger"])){
        echo"You like Hamburgers <br>";
    };
     if(isset($_POST["hotdog"])){
        echo"You like Hotdogs <br>";
    }; 
     if(isset($_POST["taco"])){
        echo"You like Tacos <br>";
    }; 
// this is to check if the checkbox is empty
 if(empty($_POST["pizza"])){
        echo"You dont like Pizzas <br>";
    };
     if(empty($_POST["hamburger"])){
        echo"You dont like Hamburgers <br>";
    };
     if(empty($_POST["hotdog"])){
        echo"You dont like Hotdogs <br>";
    }; 
     if(empty($_POST["taco"])){
        echo"You dont like Tacos <br>";
    }; 
};


?>