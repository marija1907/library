<html>
<head>
<title>Library</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="wrap">
	<div id="search">
		<img = src="image/library.png"><br><br>
		<a href="insert.php"><img src="image/addbook.png" heigh="50px" title="Add new book"></a>
		<a href="remove.php"><img src="image/remove_book.png" heigh="50px" title="Remove book"></a>
		
		
		<form action="#" method="GET">
			<input type="text" name="criteria" placeholder="Book name...">
			<input type="submit" value="Search"><br>
		</form>
		
	</div>
	<?php
		include 'inc/getResults.php';
	?>
</div>

</body>
</html>



