<?php function one(){
  $two=array(1=> 10,20,30,40,50);
  for($i=1;$i<=sizeof($two);$i++){
    echo "twoof $i=$two[$i]<br>";
  }
} ?>
<html>
<head>
  <title>One based Array</title>
</head>
<body>
  <?php one(); ?>
</body>
</html>
