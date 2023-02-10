<?php
$mode=$_POST['mode'];
if($mode=="reg")
{
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$pass = $_POST['pass'];
$year = $_POST['year'];
$dept = $_POST['dept'];
$details=array();
$details["username"]=$username;
$details["email"]=$email;
$details["number"]=$number;
$details["pass"]=$pass;
$details["year"]=$year;
$details["dept"]=$dept;
$data=file_put_contents("form.json",json_encode($details));
echo "registration successfully";
}

?>
