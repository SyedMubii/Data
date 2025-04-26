<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>>
    <?php
    //array_column(arrayname,columnname)
    $myarray=[
        ['id'=>2001,'firstName'=>'Moiz','wifeName'=>'sultana'],
        ['id'=>2002,'firstName'=>'shoaib','wifeName'=>'nimra graphics'],
        ['id'=>2003,'firstName'=>'ali','wifeName'=>'faiza'],
    ];
    $newarray=array_column($myarray,"firstName","id");
    echo "<pre>";
    print_r($newarray);
    echo "</pre>";
    // array_chunk(arrayname,size of pair)
    $arr=['moiz','shabana','shoaib','farhana','ali'];
    $newarr=array_chunk($arr,2);
    echo "<pre>";
    print_r ($newarr);
    echo "</pre>";
    //array_flip(arrayName)
    $myyarray2=['bilal'=>34,'humna'=>55,'Niaz'=>41];
    $newarray2=array_flip($myyarray2);
    echo "<pre>";
    print_r($newarray2);
    echo "</pre>";
    //array_change_key_case(arrayname,case(input type capital))
    $arr3=['Moiz'=>'kabab','hameed'=>'kofty','ali'=>'pasta','sir'=>'pizza'];
    $newarr3=array_change_key_case($arr3,CASE_LOWER);
    echo "<pre>";
    print_r ($newarr3);
    echo "</pre>";
    //array_sup(arrayName)
    $arr4=[1,2,3,4,5];
    $newarr4=array_sum($arr4);
    echo $newarr4;
    echo "<br>";
    //array_product(arrayname)
    $arr5=[1,2,3,4];
    $newarr5=array_product($arr5);
    echo $newarr5;
    echo "<br>";
    //array_rand(arrayname,number)
    $arr6=[2=>'faheem',22=>'Iqbal',100=>'rabia',105=>'alisha'];
    $newarr6=array_rand($arr6,2);
    echo "<pre>";
    print_r($newarr6);
    echo "</pre>";
    echo "<br>";
    //shuffle (arrayname)
    $arr7=['banana','mango','apple','amrood'];
    shuffle($arr7);
    echo "<pre>";
    print_r ($arr7);
    echo "</pre>";
    // sort(arrayname)
    $arr8=['faheem','dawood','raees','amir','moin'];
    sort($arr8);
    echo "<pre>";
    print_r($arr8);
    echo "</pre>";
    // rsort(arrayname)//reverse sort
    $arr9=['faheem','dawood','raees','amir','moin'];
    rsort($arr9);
    echo "<pre>";
    print_r($arr9);
    echo "</pre>";
    //asort(arrayname)//associative sort
    $arr10=['faheem','dawood','raees','amir','moin'];
    asort($arr10);
    echo "<pre>";
    print_r($arr10);
    echo "</pre>";
    //arsort (arrayname)
    $arr11=['faheem','dawood','raees','amir','moin'];
    arsort($arr11);
    echo "<pre>";
    print_r($arr11);
    echo "</pre>";
    //ksort (arrayname)
    $arr12=[22=>'kamran',12=>'ali',33=>'furqan',2=>'bilal'];
    ksort($arr12);
    echo "<pre>";
    print_r($arr12);
    echo "</pre>";
    //krsort (arrayname)
    $arr13=[22=>'kamran',12=>'ali',33=>'furqan',2=>'bilal'];
    krsort($arr13);
    echo "<pre>";
    print_r($arr13);
    echo "</pre>";
    //natsort(arrayname)
    $arr14=['abc5.png','abc122.png','abc3.png'];
    natsort($arr14);
    echo "<pre>";
    print_r($arr14);
    echo "</pre>";
















    ?>
</body>
</html>