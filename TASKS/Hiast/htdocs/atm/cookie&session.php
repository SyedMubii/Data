<?php
//$_COOKIE
$COOKIE_name="User";
$COOKIE_value="info tech";
setcookie($COOKIE_name,$COOKIE_value,time() +(86400),"/");

// echo $_COOKIE[$COOKIE_name];
$a=$_COOKIE[$COOKIE_name];
if($a==True){
    echo "cookie set successfully";
}
else{
    echo "cookie no set";
}
echo "<br>";
//$_SESSION
session_start();
$_SESSION["web"]="Designer3";
echo $_SESSION["web"];
//delete session
session_unset();
session_destroy();

echo $_SESSION["web"];
$a="khatam ta ta by by";
echo $a; 


?>