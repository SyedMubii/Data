<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label>Enter Your value : </label>
<input type="text" name="value">
<input type="submit" name="submit">

</form>
    <?php
   if (isset($_POST['submit'])){
       $amount=$_REQUEST['value'];
       echo $amount;
     } 










    ?>
</body>
</html>