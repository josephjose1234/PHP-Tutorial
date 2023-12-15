<html>
<head>
  <title>Date Function</title>
  <body>
    <?php
    $hr=date("G");
    $date = date("g:i a");
    if($hr<12){$val = "GOOD MORNING";}
    else { $val = "GOOD EVENING";}
    echo "$val,its $date.";
     ?>
  </body>
  </html>
