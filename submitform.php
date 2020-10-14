<?php
$dbhost="localhost";
$dbuser="submitform";
$dbpassword="112233";
$dbname="contactsubmit";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$insertquery="INSERT INTO table1(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
$runquery=mysqli_query($dbconn,$insertquery);
if($insertquery==true)
{
  echo "registration submited";

}
else
{
  echo "registration faild";
}




 ?>
