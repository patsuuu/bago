<?php

require 'db_conn.php';

if(isset($_POST["submit"])){
  $age = $_POST["age"];
 

  
  }

  $query = "INSERT INTO product_table VALUES('', '$age')";
  mysqli_query($conn,$query);
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style>
      form {
  border-style: solid;
  border-width: medium;
  position: relative;
  height: 210px;
  width: 33%;
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
.s {
  position: fixed;
}
      </style>
       <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1028865757444055092/1115168796873863179/green_-_4864_Original.mp4">
</video>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
  <div class="s">
    <a href="indexx.php">&#8592;</a>
</div>
    <form class="" action="" method="post" autocomplete="off">
      
      <center><label for="">Insert Age:</label>
      <input type="number" name="age" required value="">
</center>

      <br>
      <center><button type="submit" name="submit">Submit</button></center>
      <a href="indexxx.php">View</a>
      
      </div>    
    
    </form>
  </body>
</html>