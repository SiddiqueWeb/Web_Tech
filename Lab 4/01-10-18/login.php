<?php

$usr=$_POST['un'];
$fullname=$_POST['fn'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$pass=$_POST['pw'];
$pass2=$_POST['pw2'];
$gender=$_POST['gender'];
$education=$_POST['Education'];




echo "Registration Succesfull <br>";
echo "Username:".$usr." <br>";
echo "Fullname:".$fullname." <br>";
echo "Email:".$email." <br>";
echo "Phone:".$phone." <br>";
echo "Password:".$pass." <br>";
echo "Gender:".$gender." <br>";
echo"Education:";
foreach($education as $Education2 )
{echo "<br>".$Education2; }


?>