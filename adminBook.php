<?php
	session_start();
	$title = "List book";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a href="addBook.php">Add new book</a></p>
	<a href="adminlogin.php" class="btn btn-primary">Sign out!</a>
	<table class="table" style="margin-top: 20px" border="1">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['isbn']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>'; ?></td>
			<td><?php echo $row['description']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><a href="updateBook.php?bookisbn=<?php echo $row['isbn']; ?>">Edit</a></td>
			<td><a href="deleteBook.php?bookisbn=<?php echo $row['isbn']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
?>