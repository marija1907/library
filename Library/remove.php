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
		<a href="insert.php"><img src="image/addbook.png" heigh="50px" title="Add new book"></a>
		<?php
		 require 'inc/connect.php';
		 $query = "SELECT * FROM books";
		 $result= mysqli_query($conn, $query);
		 if(mysqli_num_rows($result) > 0){
			 while($row=mysqli_fetch_assoc($result)){
				 ?>
				 <div id="result">
				 <a href="inc/removeBooks.php?id=<?php echo $row['id']; ?>"><img src="image/remove_book.png"/></a>
				<p style="color: white;"><b>Name: </b><?php echo $row['namebook']; ?></p>
				<p style="color: white;"><b>Writer: </b><?php echo $row['writer']; ?></p>
				<p style="color: white;"><b>Genre: </b><?php echo $row['genre']; ?></p>
				 </div>
				 
				 <?php
				 
			 }
			 
		 }else{
			 echo "No books.";
		 }
		?>
		
		
	</div>
	
</div>

</body>
</html>



