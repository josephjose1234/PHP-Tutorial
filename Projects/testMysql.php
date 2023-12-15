<html>
<head>
<title>Testing MySQL Connection</title>
<head>
<body>
<h2>
<?php
$conn=mysqli_connect("localhost","root","")or die("The connection to MySQL database could not be esablished.");
echo("The connection to MySQL database has been successfully established.");
?>
</h2>
</body>
</html>