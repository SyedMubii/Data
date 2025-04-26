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
    // pre define function
    $myarr=['faheem',45,'kamran','atif'];
    //count
    echo count($myarr);
    echo "<br>";
    //sizeof
    echo sizeof($myarr);
    echo "<br>";
    if(in_array('kamran',$myarr)){
        echo "find successfully";
    }
    else{
        echo "Not final";
    }
    echo "<br>";
    //array search
    echo array_search('kamran',$myarr);
    echo "<br>";
    //array replace
    $change=['grapes','watermelon','guava','apple'];
    $fruits=['banana','mango','orange'];
    $exchange=[14,55,10];
    $my=array_replace($change,$fruits,$exchange);
    print_r($my);
    echo "<br>";
    //pop and push
    $myarray=['faheem',433,'ali','atif'];
    array_pop($myarray);
    echo "<pre>";
    print_r($myarray);
    echo "</pre>";
    echo "<br>";
    $myarray=['faheem',433,'ali','atif'];
    array_push($myarray,'shabana','moiz');
    echo "<pre>";
    print_r($myarray);
    echo "</pre>";
    //shift and unshift
    echo "<br>";
    $myarray=['faheem',433,'ali','atif'];
    array_shift($myarray);
    echo "<pre>";
    print_r($myarray);
    echo "</pre>";


    ?>
</body>
</html>