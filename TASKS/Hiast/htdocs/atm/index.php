
	<?php
	$amount = $_POST['amt'];
	
	

?>

<html>
	<head>
		<title>ATM Machine</title>
	</head>
	<body style="background-color:skyblue;">
		<h1 align="center"><font color="white">"WELCOME TO ATM MACHINE"</font></h1>
		<hr size="5" color="white" width="50%">
		
		<form action="" method="post">
			<table border="1" align="center" width="80%" height="30%">
				<tr>
					<th><label>Enter Your Amount</label></th>
					<th><input type="text" name="amt" size="30"/></th>
				</tr>
				<tr>
					<th><label>Your Amount is : </label></th>
					<th><label><?php if(isset($_POST['submit'])){
					echo $amount;}?></label></th>
				</tr>
				<tr>
					<th><label>$5000 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$fivethousand = $amount/5000;}
						$amount = $amount%5000;
						echo (int)$fivethousand;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$1000 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$onethousand = $amount/1000;}
						$amount = $amount%1000;
						echo (int)$onethousand;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$500 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$fivehundred = $amount/500;}
						$amount = $amount%500;
						echo (int)$fivehundred;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$100 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$hundred = $amount/100;}
						$amount = $amount%100;
						echo (int)$hundred;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$50 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$fifty = $amount/50;}
						$amount = $amount%50;
						echo (int)$fifty;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$20 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$twenty = $amount/20;}
						$amount = $amount%20;
						echo (int)$twenty;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>$10 : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						$ten = $amount/10;}
						$amount = $amount%10;
						echo (int)$ten;
					
					
					?></label></th>
				</tr>
				
				<tr>
					<th><label>Remains : </label></th>
					<th><label>
					<?php 
						if(isset($_POST['submit'])){
						
						echo (int)$amount;
						}
					
					?></label></th>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" name="submit"/></th>
				
				</tr>
			</table>
		</form>
	

	</body>
</html>
