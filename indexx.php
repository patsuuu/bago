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
.item {
  float: none;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 25px;
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
      <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1038080109070004254/1114813977919225946/gsgas-highlight.mp4" type="video/mp4">
</video>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
    <title>Home</title>
  </head>
  <body>
  <div class="content">
  <a href="logout.php">&#8592;</a>
  <nav class="item">
  <a href="insert.php" class="item">INSERT</a>
  <a href="about.php" class="item">ABOUT</a>
  <a href="data.php" class="item">DATA</a>
</nav>
    
    <div>
  
  </body>
</html>