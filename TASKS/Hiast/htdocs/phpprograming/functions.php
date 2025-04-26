<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Functions</title>
</head>
<body>
	<?php
	// pre define functions
	echo strrev("hello world"); //its work right mirror
	echo "<br>"; 
	echo strrev("dlrow olleh ");
	echo "<br>";  
	echo str_repeat("I love YOu Baba ",2);//its work repeation
	echo "<br>";
	echo strlen("Karachi vs peshawar");
	echo "<br>";
	echo strtoupper("rise");
	echo "<br>";
	echo strtolower("RISE");
	echo "<br>";
	echo ucfirst("rise");
	echo "<br>";
	echo ucwords("karachi pakistan");
	echo "<br>";
	//user define functions
	function text(){ //funtion define
		echo "user define function";
	} 
	text();//funtion call
	echo "<br>";
	function myfun(){
		global$a;
		global$b;
		$a=2;
		$b=3;
		echo($a+$b);
	}
	myfun();
	echo "<br>";
	$c=$a+$b;
	echo $c;
	echo "<br>";
	echo $a;












	
	?>

</body>
</html>