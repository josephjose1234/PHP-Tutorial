<html>
<title>Working with Forms</title>
<body>
  <form action="<?php $PHP_SELF ?>" method="post">
    <b>First Name:<b/>
      <input type = "text" size = "45" name ="fname" > <br>
    <b>Last Name:<b/>
      <input type = "text" size = "45" name ="lname" > </br>
    <b>Gender:<b/>
      <input type ="radio" name="Sex" value="male">male
      <input type ="radio" name="Sex" value="female">female
    <br>
    <b>E-mail:<b/>
      <input type = "text" size="45" name="email"><br/><br/>
      <input type="submit" name="Submit" >
    </form>
    <?php
    $name = $_POST['fname']." ".$_POST['lname'];
    $sex = $_POST['Sex'];
    $email = $_POST['email'];
    if($name !=null && $name != " "){
      $msg = "$name your details has been successfully submitted. your details are as follows";
      $msg .= "Name :$name <br> ";
      $msg .= "Gender :$sex <br> ";
      $msg .= "Email :$email <br> ";
       }
       echo "$msg";
     ?>
  </body>
  </html>
