<html>
<head><title>log-form</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body{
font-family:cursive;
font-size:20px;
background-image:url('../Saved Pictures/p11.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
.form-control{
margin-top:6px;
}
#para{
font-size:15px;
}
label{
margin-top:6px;
}
.container{
width:80%;
padding:10px;
margin-top:100px;
}
#head{
text-align:center;
color:#0993bc;
}
#login{
background-color:white;
border-radius:20px;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
</div>
<div class="col-md-4" id="login">
<h2 id="head">Login Form</h2>
<label>Enter Email :</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
<label>Enter Password :</label>
<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password">
<br><button id="subbtn" class="btn btn-block btn-info" onclick="fun()">Login</button>
<br>
<p id="para">Not Registered ? <a href="registration.php">Create An Account.</a></p>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>
<script>
function fun(){
var email=$("#email").val();
var pass=$("#pass").val();
$.post("log-back.php",{
email:email,
pass:pass,
mode:"login"
},function(data){
if(data=="success"){
swal("Login Success!", "success" , "success").then(function(){
window.location="web.php";
});
}
else{
swal("oobs!","invalid email & password!", "error").then(function(){
window.location="login.php";
});
}
})
}
</script>
</body>
</html>