<html>
<title>Working with form</title>
<body>
  <?php
$name = $_POST['fname']." ".$_POST['lname'];
$sex = $_POST['Sex'];
$email = $_POST['email'];
if($name !=null){
  $msg = "$name your details has been successfully submitted. your details are as follows";
  $msg .= "Name :$name <br> ";
  $msg .= "Gender :$sex <br> ";
  $msg .= "Email :$email <br> ";
   }
   echo "$msg";
   ?>
 </body>
 </html>
