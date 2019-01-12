<?php
	session_start();
	$title = "Add new book";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$isbn = trim($_POST['isbn']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['author']);
		$author = mysqli_real_escape_string($conn, $author);

		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		
		$descr = trim($_POST['descr']);
		$descr = mysqli_real_escape_string($conn, $descr);

		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);
		

		$query = "INSERT INTO `book` (`isbn`, `title`, `author`,`image`, `description`, `price`) VALUES ('$isbn', '$title', '$author','$image', '$descr', '$price')";

		$result = mysqli_query($conn, $query);

		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: addBooktest.php");
		}
	}
?>
	<form method="post" action="addBooktest.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image" id="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
?>