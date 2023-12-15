<?php  function ifelse() {
  $num=0;
  if($num==0)
  {
    echo("num is zero");
  }
  else if($num%2==0)
  { echo("num is even");
}
else{
  echo("num is odd");
}
}
?>
<html>
<head>
  <title> if-else-if</title>
  <body>
    <?php ifelse(); ?>
  </body>
  </html>
