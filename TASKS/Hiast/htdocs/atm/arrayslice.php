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
    // array_slice=(array_name,start,length);
    /*$a=["moiz","shabana","rizwana","farhana","ruksana"];
    $b=["mohsin","treat"];
    $c=array_slice($a,-2,2);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    echo "<br>";*/
    ?>
    <?php
    // array_splice
    /*$a=["moiz","shabana","rizwana","farhana","ruksana"];
    $b=["mohsin","treat"];
    $c=array_splice($a,1,2,$b);
    echo "<pre>";
    print_r ($c);
    echo "</pre>";*/
    ?>
    <?php
    //array keys
    /*$a=["moiz","shabana","rizwana","farhana","ruksana"];
    $b=["mohsin","treat"];
    $c=array_keys($b);
    echo "<pre>";
    print_r ($c);
    echo "</pre>";
    echo "<br>";*/
    $arr=['name'=>'ahmed','fees'=>5000,'Marks'=>75.5];
    $check=array_keys($arr);
    echo "<pre>";
    print_r ($check);
    echo "</pre>";
    echo "<br>";
    //array key first & last 
    $check=array_key_first($arr);
    echo "<pre>";
    print_r ($check);
    echo "</pre>";
    echo "<br>";
    $check=array_key_last($arr);
    echo "<pre>";
    print_r ($check);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    //array key exists
    $check=array_key_exists('Maks',$arr);
    if($check){
        echo "key_exists";
    }
    else{
        echo "key not exist";   
    }
    echo "<pre>";
    print_r ($check);
    echo "</pre>";
    echo "<br>";
    //array intersect
    $a=['a'=>'ahmed','b'=>'ali','c'=>'kamran'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    $c=array_intersect($a,$b);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    echo "<br>";
    //array intersect key
    $a=['a'=>'ahmed','b'=>'ali','c'=>'kamran'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    $c=array_intersect_key($a,$b);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    //array intersect associate
    echo "<br>";
    $a=['a'=>'ahmed','b'=>'ali','c'=>'kamran'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    $c=array_intersect_assoc($a,$b);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    //array different & different key
    echo "<br>";
    $a=['a'=>'ahmed','b'=>'ali','c'=>'kamran'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    
    $c=array_diff($a,$b);
    $d=array_diff($b,$a);
    // $c=array_diff_key($a,$b);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    echo "<pre>";
    print_r($d);
    echo "</pre>";
    //array values
    echo "<br>";
    $a=['a'=>'ahmed','b'=>'ali','c'=>'kamran'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    $c=array_values($a);
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    // array unique
    echo "<br>";
    $a=['a'=>'ahmed','b'=>'ali','c'=>'ahmed'];
    $b=['e'=>'ahmed','b'=>'ali','c'=>'asad'];
    $c=array_unique($a);
    echo "<pre>";
    print_r($c);
    echo "</pre>";






?>
</body>
</html>