<?php
function multi($num1=1,$num2=1,$num3=1){
$num4=$num1*$num2*$num3;
echo("<br>$num1*$num2*$num3=$num4"); }?>
<html>
<head>
<title>Multiple Arguments</title>
</head>
<body>
<?php multi(5,6,7); ?>
<?php multi(10,20); ?>
</body>
</html>
