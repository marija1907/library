<?php
require 'connect.php';
if(isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn, $criteria);
		$query    = "SELECT * FROM books WHERE namebook LIKE '%{$criteria}%' OR writer LIKE '%{$criteria}%'";
		$result   = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				<div id="result">
					<img src="image/book.png">
				<p style="color: white;"><b>Name: </b><?php echo $row['namebook']; ?></p>
				<p style="color: white;"><b>Writer: </b><?php echo $row['writer']; ?></p>
				<p style="color: white;"><b>Genre: </b><?php echo $row['genre']; ?></p>
				</div>
					
				<?php
			}
			echo "Number of results: " . mysqli_num_rows($result);
		
		}else{
			echo 'No results.';
		}
	}else{
		echo 'Criteria is empty';
	}
}	
	
?>