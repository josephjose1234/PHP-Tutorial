<?php function arrayd(){
  $arr=array("one","two","three");
  echo ($arr[0].$arr[1].$arr[2]) ;
  echo "<br>hello $arr[0]";
  $ar=array();
  $ar[0]=5;
  $ar[1]=21;
  $ar[2]=$ar[0]+$ar[1];
  echo "$ar[0]+$ar[1]=$ar[2]";
}
?>
<html>
<head>
  <title>ARRAY</title>
</head>
<body>
  <?php arrayd(); ?>
  </body>
</html>
