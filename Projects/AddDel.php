<?php function adddel1(){
  $arr= array(1,2,3,4);//intializeing array
  echo "Array";
  foreach($arr as $value){//displaying the Array;
    echo "$value";}
  array_shift($arr);//Delete an element from the beginning of the array.
  echo "<br> Array after deleting an element from begining:";
  foreach($arr as $value){
    echo "$value";  }
 array_pop($arr);// Delete an element from the end of the array.
 echo "<br> Array after deleting at the end:";
  foreach($arr as $value){
   echo "$value";}
   array_unshift($arr,1); // Add an element at the beginning of the array.
 echo "<br> Array after adding element at the begining";
  foreach($arr as $value){
    echo "$value";}
    array_push($arr,5); // Add an element at the end of the array.
  echo "<br> Array after adding element at the end";
   foreach($arr as $value){
     echo "$value";}
  }   ?>
  <html>
  <head>
    <title>Adding and deleting array elements</title>
  </head>
  <body>
    <?php adddel1(); ?>
    </body>
  </html>
