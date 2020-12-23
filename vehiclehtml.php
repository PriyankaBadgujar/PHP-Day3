<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>">
    Enter Name<input type="text" name="username"><br>
    
   Select Course <select name="choice" >
    <option>--select--</option>
    <option value="Bike">Bike</option>
    <option value="Car">Car</option>
    </select>
    <input type="submit" value="suggest">
    </form>
    <?php
       $name=$_GET["username"];
       $vehicle=$_GET["choice"];
       echo "<h2> Welcome $name</h2>";
       include "vehical.php";
      

    ?>
</body>
</html>