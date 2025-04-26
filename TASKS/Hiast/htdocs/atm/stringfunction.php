<?php
//explode (seperator,string)
$a="hello i am student";
 $array=explode(" ",$a);

 echo "<pre>";
 print_r($array);
 echo "</pre>";

//implode(seprator,string)
$arr1=["My","Name","Is","Khan"];
$my=implode("_",$arr1);

echo "<pre>";
 print_r($my);
 echo "</pre>";

 //str_split(string)
$arr2="Pakistan";
$new=str_split($arr2);

 echo "<pre>";
 print_r($new);
 echo "</pre>";

 //chunk_split(string,length,seperator)
$arr3="programming";
$b=chunk_split($arr3,3,"*=?=*");

 echo "<pre>";
 print_r($b);
 echo "</pre>";

 //strtoupper(string)
 $arr4="hello i am student";
 $new2=strtoupper($arr4);

 echo $new2;
 echo "<br>";
//strtolower(string)
$arr5="I LOVE YOU ";
$new3=strtolower($arr5);
 
echo $new3;
echo "<br>";
//lcfirst(string)
$arr6="PYTHON PROGRAMMING";
$new4=lcfirst($arr6);

echo $new4;
echo "<br>";
//ucfirst(string)
$arr7="pakistan zindabad";
$new5=ucfirst($arr7);

echo $new5;
echo "<br>";
//ucwords(string)
$arr8="php programming";
$new6=ucwords($arr8);

echo $new6;
echo "<br>";
//strlen(string)
$arr9="Programming HTML";
$new7=strlen($arr9);

echo $new7;
echo "<br>";
//str_word_count(string)
$arr10="I am Student";
$new8=str_word_count($arr10);

echo $new8;
echo "<br>";
//substr_count(string,substring)
$arr11="Graphics Design and Web Design";
$new9=substr_count($arr11,"Design");

echo $new9;
echo "<br>";
//strpos(string,find)
$arr12="this is ali and this is kamran";
$new10=strpos($arr12,"and");

echo $new10;
echo "<br>";
//strrpos(string,find)
$arr13="this is ali and this is kamran";
$new11=strrpos($arr13,"is");

echo $new11;
echo "<br>";
//strstr(string,find)
$arr14="this is ali and this is kamran";
$new12=strstr($arr14,"and");

echo $new12;
echo "<br>";
// //stripos(string,find)
// $arr12="this is ali and this is kamran";
// $new10=stripos($arr12,"and");

// echo $new10;
// echo "<br>";
// //strirpos(string,find)
// $arr13="this is ali and this is kamran";
// $new11=strirpos($arr13,"is");

// echo $new11;
// echo "<br>";
// //stristr(string,find)
// $arr14="this is ali and this is kamran";
// $new12=stristr($arr14,"and");

// echo $new12;
// echo "<br>";

//strpbrk
$c="this is ali";
$d=strpbrk($c,"i");

echo $d;
echo "<br>";



?>