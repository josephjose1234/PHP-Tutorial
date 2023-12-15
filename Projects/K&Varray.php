<?php function keyvalue(){
  $car=array("brand"=>"Tesla","name"=>"Cybertruck","model"=>"Roadster");
  echo "$car[brand] makes $car[name] <br>";
  echo "<br>A $car[name] is also avilable as a convertible $car[model]";
} ?>
<html>
<head>
  <title> Coustom keys and values</title>
  <body>
    <?php Keyvalue(); ?>
  </body>
  </html>
