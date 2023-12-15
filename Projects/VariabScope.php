<html>
<head>
<title>Global Variable </title>
</head>
<body>
<?php $num;
function square($arg){
global $num;
$num = $arg * $arg;
printNum($num);
};
function printNum(){
  global $num;
  echo("the square of  is $num"); } ?>
<?php square(6); ?>
</body>
</html>
