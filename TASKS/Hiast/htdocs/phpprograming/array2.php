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
/*$myarr2= ["ahmed",34.53,34,'a'];
// echo $myarr2[2];
// print_r($myarr2);
echo "<pre>";
var_dump($myarr2);
echo "</pre>";

?>
<?php
//indexing array
$arr1[100]="kamran";
$arr1[12]="ali";
$arr1[30]="fatima";
$arr1[45]="misbah";
echo "<ul>";
echo "<li>".$arr1[100]."</li>";
echo "<li>".$arr1[12]."</li>";
echo "<li>".$arr1[45]."</li>";
echo "<li>".$arr1[30]."</li>";
echo "</ul>";
print_r($arr1);
?>
<br>
<?php
//associative array
$abc = [
    "rollno"=>10,
    "studentname"=>"ali",
    "age"=>23,
    43=>323
];
echo $abc ["rollno"];
// print_r ($abc);
?>
<br>
<?php
//foreach loop
$student=["fatima","ali","aliyan","mehak"];
foreach ($student as $value) {
    echo "$value"." ";
}
?>
<br>
<?php
//foreach loop with associative array
$std=["name"=>"ali","age"=>34,"marks"=>65,"gender"=>"male"];
foreach ($std as $keys=>$value) {
    echo $keys." = ".$value ."<br>";
    # code...
}*/
?>
<?php
     // Multi-dimentional arrray
     $multi_array=[
[1,"ahmed","manager",45000],
[2,"fatima","assistant",41000],
[3,"hassan","ceo",150000],
[4,"kamaran","supervisor",30000],
[5,"farzana","manegment",20200],
[6,"sharif","peon",4000],
[7,"aliyan","postboy",3200],
[8,"ahmed","cleaner",3000],
[9,"farhan","worker",4500],
[10,"ali","clerk",32000],
 ];
     echo $multi_array[0][0]."<br>";
     echo $multi_array[0][1]."<br>";
     echo $multi_array[0][2]."<br>";
     echo $multi_array[0][3]."<br>";




  
?>






</body>
</html>