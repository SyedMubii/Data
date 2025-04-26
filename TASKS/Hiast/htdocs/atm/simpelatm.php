<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE ATM MACHINE</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<center>
<form action="" method="post">
<h1>---Welcome to ATM Machine----</h1>
    <label>Enter Your Amount</label>
    <input type="text" name="amount">
    <input type="submit" name="submit">
    <br>    
    <!-- <label>$5000 : </label> -->
    <!-- <br> -->
    <!-- <label>$1000 : </label> -->
    <!-- <input type="text" name="  "> -->
    
    <?php
    if(isset($_POST['submit'])){
    $income=$_POST['amount'];
    $fivethousand=$income/5000;
    $income=$income%5000;
    echo "$5000 : " .(int)$fivethousand;
    echo "<br>";
    // $income=$_POST['amount'];
    $thousand=$income/1000;
    $income=$income%1000;
    echo "$1000 : ".(int)$thousand;
    echo "<br>";
    // $income=$_POST['amount'];
    $fivehundered=$income/500;
    $income=$income%500;
    echo "$500 : ".(int)$fivehundered;
    echo "<br>";
    // $income=$_POST['amount'];
    $hundered=$income/100;
    $income=$income%100;
    echo "$100 : ".(int)$hundered;
    echo "<br>";
    // $income=$_POST['amount'];
    $fiftty=$income/50;
    $income=$income%50;
    echo "$50 : ".(int)$fiftty;
    echo "<br>";
    // $income=$_POST['amount'];
    $twenty=$income/20;
    $income=$income%20;
    echo "$20 : ".(int)$twenty;
    echo "<br>";
    // $income=$_POST['amount'];
    $ten=$income/10;
    $income=$income%10;
    echo "$10 : ".(int)$ten;
    echo "<br>";
    // $income=$_POST['amount'];
    echo "Remains : ". $income;
}
   
    ?>
     </form>
</body>
</center>
</html>