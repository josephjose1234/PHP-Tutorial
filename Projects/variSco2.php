<html>
<head>
<title>Global Variable </title>
</head>
<body>
<?php
$num;

function square($arg){
    global $num;
    $num = $arg * $arg;
    print($num);
}

function printNum(){
    global $num;
    echo(".<br>the square of 5 is $num");
}

square(5);
printNum();
?>
</body>
</html>
