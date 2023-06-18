<!DOCTYPE html>

<html>
<head>
    
	<title>Image Upload Using PHP</title>
	<style>




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
  position: fixed;
  width: 100%;
}
.s {
  position: fixed;
  
}




	</style>
     <video autoplay muted loop id="myVideo">
  <source src="https://cdn.discordapp.com/attachments/1028865757444055092/1115168796873863179/green_-_4864_Original.mp4">
</video>
</head>

<body>

<div class="item">
<a href="view.php">View</a>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
                  
    </div>    
    <div class="s">
    <a href="indexx.php">&#8592;</a>
</div>
     </form>
</body>
</html>
