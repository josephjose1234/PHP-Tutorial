<?php function envr(){
  $useragent=getenv("HTTP_USER_AGENT");
  echo "$useragent";
}?>
<html>
<head>
  <title> Browser and Platform Information</title>
  <body>
    <?php envr(); ?>
  </body>
  </html>
