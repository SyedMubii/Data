<?php
//str_replace(find,replace,string)
$arr="I am web designer and web developer";
$new=str_replace("web","game",$arr);

echo $new;
echo "<br>";
//substr_replace(string,replace,start,length)
$arr2="I am web designer and web developer";
$new2=substr_replace($arr2,"game",5,3);

echo $new2;
echo "<br>";
//strcmp(string1,string2)case sensitive
           // equal=0
$a="Hello";//S1 less s2=>0
           //S1 greater s2=<0
$b="Hello";

echo strcmp($a,$b);
echo "<br>";
//strcasecmp(string1,string2)case insensitive
 
$c="Hellow";//S1=less s2=>0
$d="hellow";

echo strcasecmp($c,$d);
echo "<br>";
//smilar_text(string1,string2)case sensitive
$f="SaMAd,";
$g="sAMAD";
$new3=similar_text($f,$g);

echo $new3;
echo "<br>";
//strrev(string)
$arr3="moiz";
$new4=strrev($arr3);

echo $new4;
echo "<br>";
//str_shuffle(string)
$arr4="moiz afreen";
$new5=str_shuffle($arr4);

echo $new5;
echo "<br>";
//str_repeat(string,repeat)
$arr5=" Qabool hai";
echo str_repeat($arr5,3);
echo "<br>";

//trim(string,trim character) trim function remove character
$arr6="this is Hameed";
echo $arr6;
echo "<br>";
$ass =  trim($arr6,"meed");
echo $ass;
echo "<br>";
//rtrim (string,character)
$arr7="this is Hameed";
echo $arr7;
echo "<br>";
$new6 =  rtrim($arr7,"meed");
echo $new6;
echo "<br>";
//addslashes(string)
$uyt = "moiz";
echo addslashes($uyt);
echo "<br>";
//stripslashes(string)
echo stripslashes("khan");
echo "<br>";
//addcslashes (string,character)
$qwer = "hameed";
echo addcslashes($qwer,"mee");
echo "<br>";
//stripcslaches(string)
echo stripcslashes($qwer);
echo "<br>";




//stripcslaches(string)
//echo stripcslashes("khan");
//echo "<br>";
?>  