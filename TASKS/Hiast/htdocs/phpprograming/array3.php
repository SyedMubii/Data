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
$a=['farzana','nabeel'];
$b=['pak'];
$c=array_merge($a,$b);
echo "<pre>";
print_r($c);
echo "</pre>";
echo"<br><br>";
$even=[1,2,3,4,5,6,7,8,9,10];
$sum=0;
for ($i=0; $i<10; $i++){
    if($even[$i]%2==0){
        $sum=$sum+$even[$i];
    }
}
echo $sum;
echo"<br><br>";
$even=[1,2,3,4,5,6,7,8,9,10];
$sum=0;
for ($i=0; $i<10; $i++){
    if($even[$i]%2==0){
        $sum=$sum+$even[$i];
    }
}
echo $sum;

    ?>
</body>
</html>