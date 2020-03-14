<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <title> <?php the_title();?> </title>
    <!-- <link rel="stylesheet" type="text/css" href="mystyles.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<?php wp_head();?>
</head>

<body class="mainpages">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand navbar-logo" href="#"><img src="<?php echo H_IMG_DIR;?>/logo-86-x-86.svg" class="Logo-86x86"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

<?php 


// wp_nav_menu( array(
//     'menu_class'=>'navbar navbar-expand-lg navbar-light',
//     'theme_location'=>'top',
//     'container_class' => 'collapse navbar-collapse navbar-menu',
//     'container'=> 'div',
//     'container_id'    => 'navbarNav',
//     'menu_class'      => 'navbar-nav navbar-menu-items nav-item active navbar-menu-item nav-link Home',
//     'echo'            => true,  

// ) );
wp_nav_menu( [
    'theme_location' => 'top',
] );

?>
            <!-- <div class="collapse navbar-collapse navbar-menu" id="navbarNav">
                <ul class="navbar-nav navbar-menu-items">
                    <li class="nav-item active navbar-menu-item">
                        <a href="#" class="nav-link Home">Home</a>
                    </li>
                    <li class="nav-item navbar-menu-item">
                        <a href="#" class="nav-link About-us">About us</a>
                    </li>
                    <li class="nav-item navbar-menu-item">
                        <a href="#" class="nav-link Career">Career</a>
                    </li>
                    <li class="nav-item navbar-menu-item">
                        <a href="#" class="nav-link Contact-us">Contact us</a>
                    </li>
                </ul>
            </div> -->
        </nav>
    </header>

    <section class="page-content">
    	<div class="page-description">
    		<div class="row">
	            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
	            	<div class="page-description-content">
                        <?php //foreach(getsec() as $post):?>
	            		<h1 class="page-description-title">
	            			<!-- Ankro -->
                            <?php echo $post->post_title;?>
	            		</h1>
	            		<!-- <h2 class="page-description-subtitle">
	            			Big Data solutions for your business
	            		</h2> -->
	            		<p class="page-description-text">
	            			<!-- Ankro provides a product set that lays the foundation blocks for 
							the data-driven apps of any size. Our solutions are cloud-native 
							and field-tested to handle billions of data records. We abstract 
							the low-level data processes and storage from software 
							developers so they focus on the business logic and needs. -->
                            <?php echo $post->post_content;?>
	            		</p>
	            	</div>
	            </div>
            <?php //endforeach;?>
	            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<img src="<?php echo H_IMG_DIR;?>/illustration-2-1.svg" class="page-description-img">
	            </div>
        	</div>
    	</div>
    </section>

    <section class="page-content">
    	<div class="our-product">
    		<div class="row">
    			<div class="col-12 col-sm-12 d-block d-sm-block d-md-none">
	            	<div class="our-product-content">
	            		<h1 class="our-product-content-title">
	            			Our products
	            		</h1>
	            		<p class="our-product-content-text">
	            			Ankro works with various technology stacks that make the most sense for the customer, depending on their infrastructure systems and in-house skills for supporting the solution.
	            		</p>
	            		<p class="our-product-content-text">
	            			Analyze billions of data, choose the access level, share insights, and connect to live sources with a single click. We increase your security, transform your data into a single database, and help you manage it in the best possible way. Ankro’s high-quality security and encryption tools will genuinely protect your data. 
	            		</p>
	            	</div>
	            	<div class="our-product-content">
	            		<div class="row">
	            			<div class="our-product-cards col-12 col-sm-6 col-md-6 col-lg-6">
	            				<div class="our-product-card">
	            					<img src="<?php echo H_IMG_DIR;?>/pillar-db-product.png" class="our-product-card-icon">
		            				<h4>
		            					Pillar DB
		            				</h4>
		            				<p>
		            					A scalable, high-compression DBMS supporting modern high-load systems  
		            				</p>
		            				<button type="button" class="btn btn-primary btn-sm our-product-card-btn">More</button>
	            				</div>
	            			</div>
	            			<div class="our-product-cards col-12 col-sm-6 col-md-6 col-lg-6">
	            				<div class="our-product-card">
	            					<img src="<?php echo H_IMG_DIR;?>/dosiero-product.png" class="our-product-card-icon">
		            				<h4>
		            					Dosiero
		            				</h4>
		            				<p>
		            					End to end, cloud-natiove, distributed application framework and data warehousing platform 
		            				</p>
		            				<button type="button" class="btn btn-primary btn-sm our-product-card-btn">More</button>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<img src="<?php echo H_IMG_DIR;?>/illustration-4.svg" class="our-product-img">
	            </div>
	            <div class="d-none d-sm-none d-md-block col-md-6 col-lg-6">
	            	<div class="our-product-content">
	            		<h1 class="our-product-content-title">
	            			Our products
	            		</h1>
	            		<p class="our-product-content-text">
	            			Ankro works with various technology stacks that make the most sense for the customer, depending on their infrastructure systems and in-house skills for supporting the solution.
	            		</p>
	            		<p class="our-product-content-text">
	            			Analyze billions of data, choose the access level, share insights, and connect to live sources with a single click. We increase your security, transform your data into a single database, and help you manage it in the best possible way. Ankro’s high-quality security and encryption tools will genuinely protect your data. 
	            		</p>
	            	</div>
	            	<div class="our-product-content">
	            		<div class="row">
	            			<div class="our-product-cards col-sm-6 col-md-6 col-lg-6">
	            				<div class="our-product-card">
	            					<img src="<?php echo H_IMG_DIR;?>/pillar-db-product.png" class="our-product-card-icon">
		            				<h4>
		            					Pillar DB
		            				</h4>
		            				<p>
		            					A scalable, high-compression DBMS supporting modern high-load systems  
		            				</p>
		            				<button type="button" class="btn btn-primary btn-sm our-product-card-btn">More</button>
	            				</div>
	            			</div>
	            			<div class="our-product-cards col-sm-6 col-md-6 col-lg-6">
	            				<div class="our-product-card">
	            					<img src="<?php echo H_IMG_DIR;?>/dosiero-product.png" class="our-product-card-icon">
		            				<h4>
		            					Dosiero
		            				</h4>
		            				<p>
		            					End to end, cloud-natiove, distributed application framework and data warehousing platform 
		            				</p>
		            				<button type="button" class="btn btn-primary btn-sm our-product-card-btn">More</button>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
        	</div>
    	</div>
    </section>

    <section class="page-content">
    	<div class="who-can-we-help">
    		<h1 class="who-can-we-help-title">Who we can help</h1>
    		<div class="row">
    			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
    				<div class="who-can-we-help-block">
    					<p>
    						Organizations that build their own software solutions
    					</p>
    				</div>
    				<div class="who-can-we-help-block">
    					<p>
    						Software developers  who want to shortcut their development cycle and avoid midway obstacles 
    					</p>
    				</div>
    			</div>
    			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
    				<div class="who-can-we-help-block">
    					<p>
    						Decision-makers who deal with the mass amount of data
    					</p>
    				</div>
    				<div class="who-can-we-help-block">
    					<p>
    						Big Data Solution builders who are professionals in the field and deal with strict and sensitive information
    					</p>
    				</div>
    			</div>
    			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
    				<div class="who-can-we-help-block">
    					<p>
    						People who strive fast performance, secure, and straightforward management approach on 
							a vast amount of data, which is a necessity for various types of reports, grids, or charts.
    					</p>
    				</div>
    				<div class="who-can-we-help-block">
    					<p>
    						Companies interested in modernization of their existing infrastructure
    					</p>
    				</div>
    			</div>
        	</div>
        	<div class="who-can-we-help-icons">
        		<img src="<?php echo H_IMG_DIR;?>/1-illustration.svg" class="-illustration">
        		<img src="<?php echo H_IMG_DIR;?>/2-illustration.svg" class="-illustration">
        		<img src="<?php echo H_IMG_DIR;?>/3-illustration.svg" class="-illustration">
        	</div>
    	</div>
    </section>

    <section class="page-content">
    	<div class="why-choose-us">
    		<div class="row">
    			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					<img src="<?php echo H_IMG_DIR;?>/who-we-are-illustration.svg" class="why-choose-us-img">
	            </div>
	            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
	            	<div class="why-choose-us-content">
	            		<h1 class="why-choose-us-title">
	            			Why choose us
	            		</h1>
	            		<p class="why-choose-us-text">
	            			Ankro Armenia will lead you to choose how to best power your dashboards with live data models. Our professional team will help you keep, increase and manage your high-performance database. You’ll get access to all your present and future data and will be able to transform your desired information quickly.
	            		</p>
	            		<p class="why-choose-us-text">
	            			While you may think that moving all your data to a cloud data warehouse can be an excellent idea, it can’t happen in a flash. We will make sure you’re not going to have some data outside your data warehouse. 
	            		</p>
	            		<p class="why-choose-us-text">
	            			Using Ankro cloud-native data warehousing and DBMS solutions will make you not to worry about a single server going down and crashing their entire operation.
	            		</p>
	            	</div>
	            </div>
        	</div>
    	</div>
    </section>

	<section class="page-content page-content-last">
    	<div class="optimization">
        	<h1 class="optimization-title">Optimize Your Cloud Investments</h1>
        	<button type="button" class="btn btn-sm optimization-btn">Get in touch</button>
    	</div>
    </section>


<footer class="page-footer">

  <div class="footer-content">
  		<div class="footer-item">
  			<h4 class="footer-item-title">Company</h4>
  			<ul>
  				<li><a href="#">About Us</a></li>
  				<li><a href="#">Contact Us</a></li>
  				<li><a href="#">Career</a></li>
  			</ul>
  		</div>
  		<div class="footer-item">
  			<h4 class="footer-item-title">Our Products</h4>
  			<ul>
  				<li><a href="#">Dosiero</a></li>
  				<li><a href="#">Pillar DB</a></li>
  			</ul>
  		</div>
  </div>

  <div class="footer-copyright text-center py-3">©2020 Copyright:
  </div>

</footer>
<?php wp_footer();?>
</body>

</html>