<html>
<title> Escape characters</title>
<body>
  <?php
  $MyString = "This is an \"Escaped\" string";
  $MySingleString = 'this\'will\'work';
  $MyNonVariable = "I have \$zilch in my pocket";
  $MyNewLine = "This ends with a line in return\n";

  echo $MyString;
  echo $MySingleString;
  echo $MyNonVariable;
  echo $MyNewLine;
  ?>

</body>
</html>
