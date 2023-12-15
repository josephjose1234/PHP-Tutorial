<?php
function condit() {
$var1=50;
$var2=50;
$val=($var1==$var2) ? "var1 is equal to var2." : "var1 is not equal to var2.";
$val2=($var1>$var2) ? "var1 is greater." : "var1 is not greater." ;
echo("<br>$val");
echo("<br>$val2");
}
?>
<html>
<head>
<titile>Conditional and comparison</title>
</head>
<body>
<?php condit(); ?>
</body>
</html>
