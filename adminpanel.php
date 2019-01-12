<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: admin.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: admin.php");
    }

?>


<!DOCTYPE">
<html >
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="template_container">
	<div id="template_menu">
    	<ul>
            <li><a href="addBook.php" class="current">Add Book</a></li>
            <li><a href="deleteBook.php">Delete Book</a></li>       
            <li><a href="updateBook.php">Update Book</a></li>  
            <li><a href="adminRegister.php">Add Admin</a></li>
            <li><a href="adminBook.php">Books</a></li>
    	</ul>
    </div> 
    
    <div id="template_header">
    	<div id="template_special_offer">
        	
        </div>
        
        
        <div id="template_new_books">
        </div>
    </div> 
    
    
    
    <div id="template_footer">
    
	       <a href="index.php">Home</a>
	       <a href="logout.php">log out </a>	</div> 
</div>
</body>
</html>