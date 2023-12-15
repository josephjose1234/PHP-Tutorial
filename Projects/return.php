<?php function returnd($days= 0){
  $hours =$days *8;
  return $hours; }?>

  <html>
  <head>
    <title> Return</title>
    <body>
      <?php $amount = returnd(24) *50;
      echo "the employee needs to be paid /$amount";
      ?>
    </body>
    </html>
