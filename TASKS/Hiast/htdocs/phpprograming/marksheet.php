<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marksheet</title>
</head>
<style>
	
</style>
<body>
	<center><?php
	echo "<h1>------Marksheet------<br><h1>";
	$English=60;
	$Physics=50;
	$Maths=40;
	$Computer=70;
	$Urdu=55;
	$Obtained=($English+$Physics+$Maths+$Computer+$Urdu);
	$Total=500;
	$percentage=$Obtained/$Total*100;

	echo "Your English Number Is: ".$English."<br>";
	echo "Your Physics Number Is: ".$Physics."<br>";
	echo "Your Maths Number Is: ".$Maths."<br>";
	echo "Your Computer Number Is: ".$Computer."<br>";
	echo "Your Urdu Number Is: ".$Urdu."<br>";
	echo "Your Obtained Marks Is: ".$Obtained."<br>";
	echo "Your Total Marks Is: ".$Total."<br>";
	echo "Your percentage Marks Is: ".$percentage."<br>";


	if($percentage>=90 && $percentage<=100) {
		echo "Your grade is A1+"."<br>";
		echo "Your Remarks is  Excellence"."<br>";
	}
	else if($percentage>=80 && $percentage<=90) {
	echo "Your grade is A1"."<br>";
	echo "Your Remarks is  weldone"."<br>";	
	}
	else if($percentage>=70 && $percentage<=80) {
		echo "Your grade is A"."<br>";
		echo "Your Remarks is  Very Good"."<br>";
	}
	else if($percentage>=60 && $percentage<=70) {
	echo "Your grade is B"."<br>";	
	echo "Your Remarks is  Good"."<br>";
	}
	else if($percentage>=50 && $percentage<=60) {
		echo "Your grade is C"."<br>";
		echo "Your Remarks is Nice "."<br>";
	}
	else if($percentage>=40 && $percentage<=50) {
	echo "Your grade is Fail"."<br>";
	echo "Your Remarks is  Fail"."<br>";	
	}
	// else if(per>=80 && per<=90){
	// document.write("Your Grade is A1");	
	// }
// if(per>=90 && per<=100){
// 		document.write("Your Grade is A1+");
// 	}




	?></center>

</body>
</html>