<?php
$mode=$_POST['mode'];
if($mode=="login")
{
$email = $_POST['email'];
$pass = $_POST['pass'];
$datas=json_decode(file_get_contents("stored.json"),true);
if($datas['pass']==$pass && $datas['email']==$email)
{
echo "success";
}
else{
echo "login not successfully";
}
}



?>