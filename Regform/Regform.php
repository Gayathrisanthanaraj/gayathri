<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP FORM</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--linking bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!--External stylesheet-->
        <link rel="stylesheet" href="style_regform.css">
    </head>

    <body>
       <!div class="container">
            <div class="row">
                <div class="col-md-4"></div>

                <div class="col-md-4" id="form">
                    <form action="connect.php" method="post">
                    <h3>REGISTRATION FORM</h3>
                    <div class="form-group">
                        <lable >USER NAME :</lable>
                        <input type="text" class="form-control" id="username" name="userName" >
                        <lable >EMAIL ID :</lable>
                        <input type="mailid" class="form-control" id="email" name="email">
                        <lable >PHONE NO :</lable>
                        <input type="number" class="form-control" id="number" name="number" >
                        <lable >PASSWORD :</lable>
                        <input type="password" class="form-control" id="pass" name="pass" autocomplete="off">
                        <label >YEAR : </label>
                        <input type="year" class="form-control" id="year" name="year" >
                        <label >DEPARTMENT : </label>
                        <input type="text" class="form-control" id="dept" name="dept" >
                        <button class="btn btn-primary" onclick="myFunction()" > REGISTER </button>
                    </div>
                    </form>
                </div>

                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
    <script>
function myFunction(){
username=$("#username").val();
email=$("#email").val();
number=$("#number").val();
pass=$("#pass").val();
year=$("#year").val();
dept=$("#dept").val();
$.post("fix.php",{
mode:"reg",
username:username,
email:email,
number:number,
pass:pass,
year:year,
dept:dept
},function(data){
if(data=="registration successfully")
{
swal("registration Success!", "success").then(function(){
window.location="connect.php";
});
}
else{
swal("registration Success!", "success");
}
})
}
</script>

</html>