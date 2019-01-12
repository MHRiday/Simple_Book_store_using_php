<!DOCTYPE">
<html >
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="template_container">
	<div id="template_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="search.php">Search</a></li>       
            <li><a href="newRelease.php">New Releases</a></li>
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
    </div>
    
    <div id="template_content">
    	
        <div id="template_contain_left">
        	<div class="template_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="#">New Book</a></li>
                    <li><a href="$">Stitical</a></li>
                    <li><a href="#">Operating System</a></li>
                    <li><a href="#">Data mining</a></li>
                    
            	</ul>
            </div>
			<div class="template_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                    <li><a href="#">Android Studio</a></li>
                    <li><a href="#">Doing Good</a></li>
                    <li><a href="#">Learn C#</a></li>
                    <li><a href="#">CPP advance</a></li>
                    <li><a href="#">Maece nas metus</a></li>
                    <li><a href="#">In sed risus ac feli</a></li>
             
            	</ul>
            </div>
            
            <div class="template_content_left_section">                
			</div>
        </div>
        
        <div id="template_content_right">
            <?php 
                $con = mysqli_connect('localhost','root','','store');
                $query = "select * from book order by isbn DESC";  
                $result = mysqli_query($con, $query);  
                while($row = mysqli_fetch_array($result))
                {
        	        echo '<div class="template_product_box">';
   	      		        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';

                        echo '<div class="product_info">';
                	    echo '<p>';
                        echo $row['description'].'</p>';
                        echo '<h3>';
                        echo 'Price: '.$row['price'].'$'.'</h3>';
                    
                        echo '</div>';
                        echo '<div class="cleaner">&nbsp;</div>';
                    echo '</div>';
                    echo '<div class="cleaner_with_width">&nbsp;</div>';
                }
                    ?>
            
    </div> 
    
    <div id="template_footer">
    
	       <a href="indextest2.php">Home</a>
	       <a href="adminlogin.php">Admin </a>	</div> 
    
</div> 
</body>
</html>