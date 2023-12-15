<?php function size(){
  $arr = array(1,2,3,4,5,6,7,8,9);
  $total1 = 0;
  foreach($arr as $value){ //first way
    $total1 ++; }
    $total2 = sizeof($arr); //second way
    echo "Total1 = $total1 <br>";
    echo "Total2 = $total2 <br>";
} ?>
<html>
<head>
  <title>Size of An array</title>
  <body>
    <?php size(); ?>
  </body>
  </html>
