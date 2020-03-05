<?php
 $con = mysqli_connect("localhost", "root", "", "img");
  
  if (isset($_POST['upload'])) {
  	
  	$image = $_FILES['image']['name'];
  	$text = mysqli_real_escape_string($con, $_POST['text']);	
  	$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')"; 	
  	mysqli_query($con, $sql);

  	$target = "img/".basename($image);
  	move_uploaded_file($_FILES['image']['tmp_name'], $target);

  	}

$result = mysqli_query($con, "SELECT * FROM images");

?>

<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="upload">
		<h1>Image upload</h1>
		<form method="POST" action="index.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<input type="file" name="image">
			<br>
			<br>
			<textarea id="text" cols="40" rows="4" name="text" placeholder="write about the image">
				
			</textarea><br>
			<button type="submit" name="upload">Upload</button>
		</form>	
	</div>

	<div class="container">
		<h1>view images</h1>
		<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='imgcontainer'>";
      	echo "<img src='img/".$row['image']."' >";
      	echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>	
	</div>
</body>
</html>