<?php
    session_start();
    $title = "List book";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    $result = getAll($conn);
?>


<html >
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="template_container">
	<div id="template_menu">
    	<ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="subpage.html">Search</a></li>       
            <li><a href="newRelease.html">New Releases</a></li>
            <div class="dropdown">
    			<button class="dropbtn">Dropdown 
      			<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">
      				<a href="#">Link 1</a>
      				<a href="#">Link 2</a>
      				<a href="#">Link 3</a>
    			</div>
  			</div> 
            <li><a href="#">Contact</a></li>

    	</ul>
    </div> 
    
    <div id="template_header">
    	<div id="template_special_offer">
        	<p>
                
        	</p>
			<a href="index.php" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="template_new_books">
        	<ul>
                <li>Machine Learning</li>
                <li>Deep Learning</li>
                <li>Pattern Recognition</li>
            </ul>
        </div>
    </div> <!-- end of header -->
    
    <div id="template_content">
            
            <div class="template_content_left_section">                
			</div>
        </div>
        
        <div id="template_content_right">
        	<div class="template_product_box">
   	      		<img src="images/templatemo_image_01.jpg" alt="image" />
                <div class="product_info">
                	<p>Etiam luctus. Quisque facilisis suscipit elit. Curabitur...</p>
                  <h3>$55</h3>
                    <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            
      
        </div> 

        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div id="template_content_right">
                <div class="template_product_box">
                    <img src='/images<?php echo $row['image']; ?>' />
                    <div class="product_info">
                        <p><?php echo $row['description']; ?></p>
                        
                    </div>
                    
                </div>
                
            </div>


    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> 
    
    <div id="template_footer">
    
	       <a href="index.php">Home</a>
	       <a href="adminlogin.php">Admin </a>	</div> 
    
</div> 
</body>
</html>