<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
     <label>number1</label>
    <input type="text" name="num1">
    <br>
    <label>number2</label>
    <input type="text" name="num2">
    <br>

   <input type="submit" name="submit">
    
        </form>
</body>
</html>

<?php
if(isset($_GET['submit']));
$a=$_GET['num1'];
$b=$_GET['num2'];
echo "sum is : ".($a+$b)."<br>";
 echo "<pre>";
 print_r($_SERVER);
 echo "</pre>";





?>