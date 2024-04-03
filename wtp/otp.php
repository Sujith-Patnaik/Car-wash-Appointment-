<?php 
session_start();
$email = $_SESSION['email'];
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){

  $entred_otp = $_POST['otp'];
  $otp = $_SESSION['otp'];
  if ($entred_otp == $otp){
    if($email == "sujithpatnaik2003@gmail.com"){
      echo "<script>window.location.assign('adhome.php')</script>";
    }else{
    echo "<script>window.location.assign('reg.php')</script>";
    }
  }else{
    echo "No";
  }

}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>otp</title>
    <style>
body{
  background-image:url(https://www.shutterstock.com/image-photo/car-wash-business-banner-washing-600nw-588352043.jpg);
  background-size:120%;
  background-repeat: no-repeat;
}
.container {
  max-width: 350px;
  background: #f8f9fd;
  margin-top:15%;
  margin-left:50%;
  background: linear-gradient(
    0deg,
    rgb(255, 255, 255) 0%,
    rgb(244, 247, 251) 100%
  );
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;

}

.heading {
  text-align: center;
  font-weight: 900;
  font-size: 30px;
  color: rgb(16, 137, 211);
}

.form {
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 15px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid #12b1d1;
}

.form .forgot-password {
  display: block;
  margin-top: 10px;
  margin-left: 10px;
}

.form .forgot-password a {
  font-size: 11px;
  color: #0099ff;
  text-decoration: none;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(
    45deg,
    rgb(16, 137, 211) 0%,
    rgb(18, 177, 209) 100%
  );
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.form .login-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}





.agreement {
  display: block;
  text-align: center;
  margin-top: 15px;
}

.agreement a {
  text-decoration: none;
  color: #0099ff;
  font-size: 9px;
}
.com{
  font-size:100px;
  position:absolute;
  top:200px;
  left:200px;
}


    </style>
</head>
<body>
<h1 class="com">EcoSplash</h1>
    <center>
<div class="container">
  <div class="heading">Log In</div>
  <form class="form" method = "post">
    <input
      placeholder="Enter OTP"
      id="otp"
      name="otp"
      type="otp"
      class="input"
      required=""
    />
    <input value="Log In" type="submit" name = "submit" class="login-button" />
</form>
</div>
</center>

</body>
</html>
