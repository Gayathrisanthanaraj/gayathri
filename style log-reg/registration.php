<html>
<head><title>reg-form</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body{
font-family:cursive;
font-size:20px;
background:url('../Saved Pictures/p11.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
margin-top:15px;
}
.a{
margin-top:6px;
width:210px;
}
#para{
font-size:20px;
}
label{
margin-top:6px;
font-size:15px;
}
#div{
background-color:white;
padding:0;
border-radius:10px;
}
.container{
width:99%;
padding:10px;
}
.line{
border:1px solid gray;
width:400px;
display:fixed;
}
#head{
text-align:center;
color:#391aad;
}
#subbtn{
width:100%;
}
#body{
width:50%;
padding:0;
}
#subbody{
width:50%;
padding:0;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
</div>
<div class="col-md-4" id="div">
<div id="head" >
<h2>Registration Form</h2>
</div>
<hr class="line">
<div class="col-md-12">
<form action="reg-back.php"  method="post" enctype="multipart/form-data">
<div class="col-md-6" id="body">
<label>Enter First Name :</label>
<input type="text" name="fname" id="fname" class="form-control a" placeholder="Enter First Name">
<label>Enter Age :</label>
<input type="age" name="age" id="age" class="form-control a" placeholder="Enter Age">
<label>Enter Contact :</label>
<input type="text" name="contact" id="contact" class="form-control a" placeholder="Enter Contact">
<label>Enter Email :</label>
<input type="email" name="email" id="email" class="form-control a" placeholder="Enter Email">
</div>
<div class="col-md-6" id="subbody">
<label>Enter Last Name :</label>
<input type="text" name="lname" id="lname" class="form-control a" placeholder="Enter Last Name">
<label>Enter Date Of Birth :</label>
<input type="date" name="date" id="date" class="form-control a">
<label>Enter City :</label>
<input type="text" name="city" id="city" class="form-control a" placeholder="Enter City">
<label>Enter Password :</label>
<input type="password" name="pass" id="pass" class="form-control a" placeholder="Enter Password">
</div>
</div>
<div class="col-md-12">
<label>Upload Image :</label>
<input type="file" name="file" id="file" class="form-control">
<br>
<button id="subbtn" class="btn btn-block btn-info">Register</button>
<br>
<p id="para">Already Registered ? <a href="login.php">Sign in.</a></p></div>
<div class="col-md-4">
</div>
</form>
</div>
</div>
</div>

</body>
</html>