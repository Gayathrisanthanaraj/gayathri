<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$age =$_POST['age'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$date =$_POST['date'];
$city =$_POST['city'];
$contact =$_POST['contact'];
$file = $_FILES["file"]["name"];
$folder = "fileupload/";
$path = $folder.$file; 
$aaa=move_uploaded_file($_FILES["file"]["tmp_name"] , $path);
if( $aaa ) {
$details=array();
$details["fname"]=$fname;
$details["lname"]=$lname;
$details["age"]=$age;
$details["email"]=$email;
$details["pass"]=$pass;
$details["contact"]=$contact;
$details["date"]=$date;
$details["city"]=$city;
$details["file"]=$path;
$json=json_encode($details);
$aaa=file_put_contents("stored.json",$json);
if($aaa) {
echo '<script type="text/javascript">';
echo 'setTimeout(function(){swal("profile uploaded successfully","success","success").then(function(){;';
echo 'window.location="login.php";';
echo '});';
echo '});';
echo '</script>';
} else {
echo 'Something went wrong uploading file';
}
} 

?>


