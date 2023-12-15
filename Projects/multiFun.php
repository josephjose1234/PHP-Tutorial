<html>
<head>
<title>Multiple functions</title>
</head>
<body>
<?php function printin($num){
echo("you entered: $num.<br>");
$numsquare=square($num);
echo("The squared value of $num is $numsquare.");}
function square($arg){
return $arg * $arg;}
?>
<?php printin(9);?>
</body>
</html>
