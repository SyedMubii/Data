<?php
$a=$_REQUEST['number'];
echo "round of : ",round($a);
echo "<br><br>";
echo "floor of : ",floor($a);
echo "<br><br>";
echo "ceilling of : ",ceil($a);
echo "<br><br>";
echo "square_root of : ",sqrt($a);
echo "<br><br>";
echo "power of : ",pow($a,2);
echo "<br><br>";


function abc(int $num1, int $num2){
    $sum=$num1+$num2;
    echo $sum;
}
abc(11,31);
?>