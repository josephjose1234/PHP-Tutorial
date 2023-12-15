

<html>
<head>
  <title> Directory</title>
  <body>
    <?php

    if ($handle = opendir('D:\VSCODE')) {
      //  echo "Directory handle:\n $handle\n";
        echo "Entries:<br>";

        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($handle))) {
            echo "$entry <br>";
        }

        /* This is the WRONG way to loop over the directory. */
        while ($entry = readdir($handle)) {
            echo "$entry\n";
        }

        closedir($handle);
    }
    ?>
    <?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry<br>";
        }
    }
    closedir($handle);
}
?>
  </body>
  </html>
