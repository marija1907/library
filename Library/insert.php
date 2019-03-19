<html>
<head>
<title>Library</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="wrap">
	<div id="search">
		<img = src="image/library.png"><br><br>
		<a href="index.php"><img src="image/search.png" heigh="50px" title="Search"></a>
		<a href="remove.php"><img src="image/remove_book.png" heigh="50px" title="Remove book"></a>
		<form action="#" method="POST">
			<label> Name book: </br>
			<input type="text" name="namebook"><br>
			
			<label> Writer: </br>
			<input type="text" name="writer"><br>
		
			<label> Genre: </br>
			<input type="text" name="genre"><br>
			<input type="submit" name="insert" value="Insert"><br>

		</form>		
	</div>
	
	<div id="message">
	<?php
	if(isset($_POST['insert'])){
		if(isset($_POST['namebook']) && isset($_POST['writer']) && isset($_POST['genre'])){
			if(!empty($_POST['namebook']) && !empty($_POST['writer']) && !empty($_POST['genre'])){
				$namebook = trim($_POST['namebook']);
				$writer   = trim($_POST['writer']);
				$genre    = trim($_POST['genre']);
				require 'inc/connect.php';
				$namebook = mysqli_real_escape_string($conn, $namebook);
				$writer   = mysqli_real_escape_string($conn, $writer);
				$genre    = mysqli_real_escape_string($conn, $genre);
				$query = "INSERT INTO books (namebook,writer,genre) VALUES ('{$namebook}','{$writer}','{$genre}')";
				if(mysqli_query($conn, $query) === TRUE){
					echo "New book successfully added.";
				}else{
					echo "Error!";
				}
			}else{
				echo "All fields must be filled in.";
			}		
		}else{
			echo "All parameters must be sent!";
		}
	}
	?>
	</div>
	
</div>

</body>
</html>