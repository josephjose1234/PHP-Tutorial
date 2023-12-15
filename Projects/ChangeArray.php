<?php  function changeD(){
  $arr = array("alfa","beta","gamma","theta");
  $arr[1]="psy";
  $arr[2]="phy";
  echo "$arr[0]<br> $arr[1]<br> $arr[2]";
} ?>
<html>
<head>
  <title>Changing array</title>
  <body>
    <?php changeD(); ?>
  </body>
  </html>
