<?php
require 'db_conn.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      form {
  border-style: solid;
  border-width: medium;
  position: relative;
  height: 320px;
  width: 35%;
  bottom: 10px;
  padding:  30px;
  font-size: 20px;
  line-height: 2;
  background-color: grey;
  margin-left: auto; 
  margin-right: auto;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
      </style>
 
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
  <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1038080109070004254/1114808469590134844/My_Video-3-highlight.mp4" type="video/mp4">

</video>
<div class="content">
  <center><h2>"REGISTRATION"</h2></center>
    <form class="" action="" method="post" autocomplete="off">
    <center>
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
     <button type="submit" name="submit">Register</button>
</center>
<a href="login.php">Login</a>
</div>
    </form>
    <br>
  
  
  </body>
</html>