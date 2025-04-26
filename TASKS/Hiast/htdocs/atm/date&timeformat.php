<?php
// echo date("d-F-Y-l");
// echo "<br>";
// echo checkdate(01,15,2021);
// echo "<br>";

//enter time zone
date_default_timezone_set("asia/karachi");
echo date("d-F-Y h:i:sa");
echo "<br>";
//date_add
$date=date_create("16-07-2021");
date_add($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,"d-F-Y");
echo "<br>";
//date_sub
$date=date_create("16-07-2021");
date_sub($date,date_interval_create_from_date_string("30 days"));
echo date_format($date,"d-F-Y");
echo "<br>";
//strtotime
echo date("d-F-Y h:i:sa",strtotime("now"));
echo "<br>";
echo date("d-F-Y h:i:s:a",strtotime("+1 week"));
echo "<br>";
echo date("D d-F-Y h:i:s:a",strtotime("first day of next month"));



?>