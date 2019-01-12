<?php
    session_start();
    $title = "List book";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    $result = getAll($conn);
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
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="template_product_box">
                <h1>Cooking  <span>(by New Author)</span></h1>
            <img src="images/templatemo_image_02.jpg" alt="image" />
                <div class="product_info">
                    <p>Aliquam a dui, ac magna quis est eleifend dictum.</p>
                    <h3>$35</h3>
                    <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="template_product_box">
                <h1>Gardening <span>(by Famous Author)</span></h1>
          <img src="images/templatemo_image_03.jpg" alt="image" />
                <div class="product_info">
                    <p>Ut fringilla enim sed turpis. Sed justo dolor, convallis at.</p>
                    <h3>$65</h3>
                    <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="template_product_box">
                <h1>Sushi Book  <span>(by Japanese Name)</span></h1>
                <img src="images/templatemo_image_04.jpg" alt="image" />
                <div class="product_info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <h3>$45</h3>
                    <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                    <div class="detail_button"><a href="subpage.html">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
      
        </div> 
    
        <div class="cleaner_with_height">&nbsp;</div>
    </div> 
    
    <div id="template_footer">
    
           <a href="index.php">Home</a>
           <a href="adminlogin.php">Admin </a>  </div> 
    
</div> 
</body>
</html>