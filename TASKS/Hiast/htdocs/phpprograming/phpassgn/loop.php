<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docum"ent</title>
</head>
<body>
    <table border=1 width="80%" align="center">

    

<?php
for($row=1;$row<=8;$row++){
    echo "<tr>";
    
    for($col=1;$col<=8;$col++){
        $count=$row+$col;
        if($count%2==0){

        echo"<td height='30' width='30' bgcolor='black'></td>";
    }
    else{
        echo"<td height='30' width='30' bgcolor='white'></td>";
    
    }
}
    echo "<br>";

}





?>
</table>
</body>
</html>