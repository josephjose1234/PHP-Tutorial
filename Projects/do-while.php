<?php function doo(){
  $i=0; $var=5;
  do{echo("$var<br>");
  $var=$var+1;
$i++;
}
while($i<5);

} ?>
<html>
<head>
  <title> Do-While</title>
  <body>
    <?php doo(); ?>
  </body>
  </html>
