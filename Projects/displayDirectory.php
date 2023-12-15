<?php
$dirnm = "D:\\VSCODE";
$dirhndlr= opendir($dirnm);
$file_list="";
$file="";
while (false != ($ifle = readdir($dirhndlr)))
{
  if($file != "." && $file != "..")
  {
    $file_list .="<li>$file</li>";
  }
}
closedir($dirhndlr);
 ?>
 <html>
 <head>
   <title>List of files in the directory</title>
 </head>
 <body>
 <p>Files in <?php echo($dirnm); ?> directory</p>
 <ul>
<?php echo($file_list);?>
</ul>
</body>
</html>
