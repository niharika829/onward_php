<?php
if(isset($_POST['newuser'])){
  header('Location:signin.php');
}

?>
<html>
<head>
  <title>OnWard-Log In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">



<style>

body{

   background: url('images/pict1.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-position: center center;
   background-size: cover;
   margin: 0 !important;
   background-size: 100% cover!important;

}
form {
width:40%;
margin-top:10%;}

input[type=email] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}
 input[type=password]{
   width: 75%;
   padding: 12px 20px;

   display: inline-block;

 }
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius: 40px;
}

input[type=submit]:hover {
  opacity: 0.8;
}


@media screen and (max-width: 300px) {

  input[type=submit] {
     width: 100%;
  }
}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container" style="background-color:black;">
          <a class="navbar-brand" href="home.php"style="color:white;"><img src="images/logo.jpg" width=50% height=250% ></a>

          <div class="collapse navbar-collapse" id="ftco-nav" >
            <ul class="nav navbar-nav" style="position:relative;left:30%;color:white;">
     <li class="active"><a href="home.php"><p  style="color:white;">HOME</p></a></li>
     <li><a href="about.php"><p  style="color:white;">ABOUT</p></a></li>
     <li><a href="contact.php"><p  style="color:white;">CONTACT</p></a></li>

   </ul>

          </div>
        </div>
      </nav>
<section>
<center>


  <form action="dbloginform.php" method="post" style="background-color:maroon;">
    <p style="color:white;">Log IN</p>
    <p> <p style="color:white;">mail-id:</p>
      <input name="email" type="email" value="<?php  if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>">
        </p>
        <p><p style="color:white;">password:</p>
          <input name="password" type="password" value="<?php  if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
              </p>
    <input type="submit" name="submit" value="login">

  </form>

<form  method="post">
    <input type="submit" name="newuser" value="not a member? sign up">
</form>

</center>




</body>
</html>
