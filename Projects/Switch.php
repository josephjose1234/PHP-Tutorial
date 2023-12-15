<?php function witch() {
  $day= 1;
  switch ($day) {
    case 1 :echo("Monday"); break;
    case 2 :echo("Tuesday"); break;
    case 3 :echo("Wensday"); break;
    case 4 :echo("Thursday"); break;
    case 5 :echo("Friday"); break;
    case 6 :echo("Sarurday"); break;
    case 7 :echo("Sunday"); break;
    default :echo("not valid"); break;
  }
}
  ?>
  <html>
  <head>
    <title>S W I T C H</title>
  </head>
  <body>
    <?php witch(); ?>
  </body>
  </html>
