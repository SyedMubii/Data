<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  echo "<form action ='' method='post'>";
 for ($i=0; $i<5; $i++){
    print "<input type='text' name='num$i'/>";

 }
 echo "<input type= 'submit' name= 'submit'/>";

 echo "</form>";
 $myarr= array();
 if(isset($_POST['submit'])){
 // $sum =0;
 for($i=0; $i<5; $i++){
    $myarr[$i] =$_POST['num'.$i];
    // $sum =$sum+$myarr[$i];
 }
 echo "<pre>";
 print_r ($myarr);
 echo "</pre>";
// echo $sum;
}



?>
    
</body>
</html>