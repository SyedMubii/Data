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
    // array reverse
     $b=['iqbal','zain','faheem'];
    $a=['12','2','25'];
    $new1=array_reverse($b);//array_reverse index ki value ko reverse kar data hay, jasa    variabe $b ko ["faheem","zain","iqbal"] is tarha change karda ga
    
    echo "<pre>";
    print_r ($new1);
    echo "</pre>";
    //current
    $a=['moiz','mohsin','moin'];
    $new= current($a);//current index ki first value par lay ata hay,
    print_r($new);
    echo "<br>";
    //key
    $new=key ($a);//key index number batati hay,
    print_r ($new);
    echo "<br>";
    //pos
    $new= pos ($a);
    print_r ($new);
    echo "<br>";
    //next
    $new=next($a);
    print_r ($new);
    echo "<br>";
    //previous
    $new=prev($a);
    print_r ($new);
    echo "<br>";
    //end
    $new=end($a);
    print_r ($new);
    echo "<br>";
    //reset
    $new=reset($a);
    print_r ($new);
    echo "<br>";

    //list
    
    $myarr=['ahmed','ali','zafar'];
    list($a,$b,$c)=$myarr;//list index key value ko variable ma change karta hay
    echo "value 1 is : ".$a."<br>";
    echo "value 2 is : ".$b."<br>";
    echo "value 3 is : ".$c."<br>";
    echo "<br>";
    //extract function
    $arr=['as'=>'shabeer','bs'=>'salina gomez','cs'=>'shakira'];
    extract($arr);//extract key ko varibale bana data hay,
    echo "a value is : ".$as."<br>";
    echo "a value is : ".$bs."<br>";
    echo "a value is : ".$cs."<br>";
    echo "<br>";
    //range
    $qwe=range(1,100,10);//
    echo "<pre>";
    print_r ($qwe);
    echo "</pre>";











    ?>
</body>
</html>