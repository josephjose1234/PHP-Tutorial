<?php function foreachD(){
  $marks = array(70,68,84,90,80);
  $total = 0;
  foreach ( $marks as $value ){
    $total=$total+$value;
    echo "$value";}
    $percentage = $total/5;
  echo "<br> TOTAL MARKS : $total";
  echo "<br> Percentage :$percentage";

}?>
<html>
<head>
  <title>forEach</title>
  <body>
    <?php foreachD(); ?>
  </body>
  </html>
