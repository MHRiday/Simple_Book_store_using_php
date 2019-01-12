<?php
	session_start();
	$title = "Edit book";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['bookisbn'])){
		$book_isbn = $_GET['bookisbn'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($book_isbn)){
		echo "Empty isbn! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM books WHERE isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="updateBook.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn" value="<?php echo $row['isbn'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" value="<?php echo $row['title'];?>" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" value="<?php echo $row['author'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $row['description'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['price'];?>" required></td>
			</tr>
		</table>

		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<a href="adminBook.php" class="btn btn-success">Confirm</a>

	<?php if(isset(save_change)){
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

		$Query = "UPDATE `book` SET `isbn` = '$isbn ', `title` = '$title', `author` = '$author',`image` = '$image', `description` = '$descr', `price` = '$price' WHERE `book`.`isbn` = '$isbn'";
		mysqli_query($conn,$Query);

	}
<?php
	if(isset($conn)) {mysqli_close($conn);}
?>