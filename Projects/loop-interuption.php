<?php function interupt(){
  $iteration=0;
  for($i=0;$i>=0;$i++){
    if($i==4){
      echo "Loop skipped at $i";
      continue;
    }
    $iteration .="$i";
    if($i==10) break;
}
  echo "<br>Loop terminated at $i.";
  echo "<br>iterations completed: $iteration.";
}
?>
<html>
<head>
  <title> Interuption</title>
  <body>
    <?php interupt(); ?>
  </body>
  </html>
