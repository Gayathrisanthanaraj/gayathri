<html>
    <head>
        <title>Success page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--linking bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<style>
body{
margin: 0;
padding: 0;
background: #e3e9f7;
}
nav ul {
margin: 0;
padding: 0;
height: 100%;
width: 250px;
position: fixed;
top: 0;
left: 0;
background-color:#1f485a;
}
nav ul li {
list-style: none;
}
nav ul li a {
display: block;
text-decoration:none;
text-transform:capitalize;
font-size:25px;
color: #fff;
position: relative;
padding: 25px 25px 25px 38px;
}
nav ul li a:hover {
color: #2b2626;
background-color:#5b8ab9;
}
.wrapper {
margin-left: 260px;
}
.section {
display: grid;
place-items: center;
min-height:50vh;
text-align: center;
font-size: 20px;
}
.section h2 {
text-transform: uppercase;
font-size: 50px;
}
.logo {
width: 150px;
height: 150px;
border-radius: 50%;
overflow: hidden;
margin: 25px auto;
}
.logo img {
width: 100%;
height:100%;
}
.fa{
padding:3px 10px 0px 5px;
}  
.card {
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
width: 50%;
height:100%;
padding:16px;
border-radius:30px;
font-size:20px;
background-color:#a9b0bb;
text-align: left;
}
.container{
padding:2px 16px;
}
span{
line-height:7px;
}
.form-control{
    font-size: 15px;
    width:200px;
    margin-bottom: 18px;
}
#mymodal1{
    width: 750px;
    position: fixed;
    padding-top: 100px;
    padding-left: 500px;
}
.modal-content {
    margin: 15px auto;
    padding: 15px;
    border: 2px solid black;
    width: 100%;
}

#btn_update, #btn_insert{
    margin-left: 70px;
}


</style>
</head>

<body>
<nav>
<ul>
<li>
<a href="#"><i class="fa fa-home"></i>Home</a>
</li>
</ul>
</nav>
<div class="wrapper">
<div class="section">
<h2 id="btn" style="color: #2b2626">User Dashboard</h2>
<div class="card">
<div class="container">

<table style="width:100%">
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>User name :</td>
    <td id="uname"></td>  
  </tr>
  <tr>
    <td>Email id :</td>
    <td id="mailid"></td>  
  </tr>
  <tr>
    <td>Phone no :</td>
    <td id="phone"></td>  
  </tr>
  <tr>
    <td>Password :</td>
    <td id="pass"></td>  
  </tr>
  <tr>
    <td>Year : </td>
    <td id="year"></td>  
  </tr>
  <tr>
    <td>Department:  </td>
    <td id="dept"></td>  
  </tr>
</table>

</div>
</div>
</div>
</div>

</body>

<script type="text/javascript">
var details=[];
function read(file, callback) {
var request = new XMLHttpRequest();
request.open("GET",file, true);
request.onreadystatechange = function() {
if (request.readyState === 4 && request.status == "200") {
callback(request.responseText);
}
}
request.send(null);
}
read("form.json", function(details){
var data = JSON.parse(details);
document.getElementById("uname").innerHTML =data.username;
document.getElementById("mailid").innerHTML = data.email;
document.getElementById("phone").innerHTML = data.number;
document.getElementById("pass").innerHTML = data.pass;
document.getElementById("year").innerHTML = data.year;
document.getElementById("dept").innerHTML = data.dept;
});


</script>


</html>   
