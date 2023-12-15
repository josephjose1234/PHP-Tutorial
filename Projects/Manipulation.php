<?php function manipulate(){
  $arr1 = array("English","Malayalam","Hindi");
  $arr2 = array("Tamil","Kanada","urudu","Telugu","Marathi","Punjabi");
  $arr12 = array_merge($arr1,$arr2);
  echo "<br>arr1<br>";
  foreach($arr1 as $value){ echo "$value \t";}
  echo "<br>arr2<br>";
  foreach($arr2 as $value){ echo "$value\t";}
  echo "<br>After merging<br>arr12<br>";
  foreach($arr12 as $value){echo "$value \t";}
  $arr12 = array_slice($arr12,1,8);
  echo "<br>Arr2 After slicing<br>";
  foreach($arr12 as $value){ echo "$value \t";}
  shuffle($arr12);
  echo "<br>after Shuffling<br>";
  foreach($arr12 as $value){ echo "$value \t";}
} ?>
<html>
<head>
  <title> Array Manipulation</title>
  <body>
    <?php manipulate(); ?>
  </body>
  </html>
