<?php
//md5(string,true/false)
$arr="hello123";
$new=md5($arr,true);

echo $new;
echo "<br>";
//sha1(string,true/false) (us secure algorithum) ziyada powerful ha md5 say
$arr2="hello321";
$new2=sha1($arr2,true);

echo $new2;
echo "<br>";
//convert_uuencode(string)
$arr3="paksitan123";
$new3=convert_uuencode($arr3);
//convert_uudecode(string)
echo $new3."<br>";
echo "<br>";
$new4=convert_uudecode($new3);
echo $new4;
echo "<br>";
//chr(ascii) ascii code start(65 to 90 ) capital A to Z
//(97 to 122) small a TO z
$a=90;
$b=chr($a);
echo $b;
echo "<br>";
//ord(string)
$arr4="z";
$new5=ord($arr4);

echo $new5;
echo "<br>";
//wordwrap(string,width,break)
$arr5="mohsin ands moiz friends";
$new6=wordwrap($arr5,8,"<br>");

echo $new6;
echo "<br>";
//strip_tags(string)
$arr6="<b>hameed and latif</b> both are <i> brother </i>";
echo $arr6;
echo "<br>";
$new7=strip_tags($arr6);
echo $new7;
echo "<br>";

//start maths function
//Max(range)
echo max(12,101,1,54,57);
echo "<br>";
//Min(range)
echo min(10,2,150,65,47);
echo "<br>";
//abs(value)
$arr7=-6.35;
$new8=abs($arr7);

echo $new8; 
echo "<br>";
//floor(value)
$a=12.4;
$b=15.5;
echo floor($a);
echo "<br>";
//ceil(value)
$a=12.4;
$b=15.5;
echo ceil($a);
echo "<br>";
//round(value)
$a=12.4;
$b=15.5;
echo round($a);
echo "<br>";
//pow(base,exponent)
$base=2;
$exponent=5;
echo pow($base,$exponent);
echo "<br>";
//sqrt(value)
$squareroot=16;
echo sqrt($squareroot);
echo "<br>";
//intdiv(divident,devisor)
$devisor=2;
$devident=10;
echo intdiv($devident,$devisor);
echo "<br>";
//rand(min,max)
$start=1;
$end=50;
echo rand($start,$end);
echo "<br>";
//mt_rand(min,max)most faster than rand
$start=1;
$end=50;
echo mt_rand($start,$end);
echo "<br>";
//rand()
echo rand();
echo "<br>";
//lcg_value( 0 to 1)
echo lcg_value();
echo "<br>";

//
echo date("d-F-Y-l");
echo "<br>";
echo checkdate(01,15,2021);
echo "<br>";
echo date_add(date("j-M-y"),30);
echo "<br>";



?>