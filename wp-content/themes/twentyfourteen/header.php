<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE HTML>
<html>
<head>
<title>Free Skokov Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		<?php wp_head(); ?>
</head>
<body>
  <div class="header">	
      <div class="wrap"> 
	         <div class="logo">
				<a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt=""/></a>
			 </div>
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li> 
					<li><a href="blog.html">Blog</a></li> 
					<li><a href="about.html">About Us</a></li> 
					<li><a href="contact.html">Contact</a></li>
				</ul>
		     </div>
		    <div class="clear"></div>
	   </div>
   </div>
   <div class="index-banner">
       	 <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<h3>We Believe</h3>
							<h4>In Quality Design</h4>
							<p class="top">Any Creative Project is Unique</p>
								<p class="middle">and should be provided with</p>
								<p class="bottom">the appropriate quality</p>
							<button class="btn btn-8 btn-8b"><a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a></button>
						   <!-- start magnific-->
								<div id="small-dialog" class="mfp-hide">
					                           	    <div class="plans_table">
  			 	
								  			 	<table width="100%" cellspacing="0" class="compare_plan">
												<thead>
								   					<tr>
								        				<th class="plans-list"><h3>Plan Features</h3></th>
								        				<th class="plans-list"><h3>Basic</h3><h4>$5<small>/month</small></h4></th>
								        				<th class="plans-list"><h3>Economy</h3><h4>$9<small>/month</small></h4></th>
								    				</tr>
												</thead>
													<tfoot>
									    			<tr>
												        <td> </td>
								        				<td class="order_now"><a href="#account" class="scroll"><button>Order Now</button></a></td>
								        				<td class="order_now"><a href="#account" class="scroll"><button>Order Now</button></a></td>
													</tr>
													</tfoot>				
								   				<tbody>
								   					<tr>
									        			<td class="plan_list_title">Web Space</td>
												        <td class="price_body">Unlimited</td>
												        <td class="price_body">Unlimited</td>
									    			</tr>
								    				<tr>
								        				<td class="plan_list_title">Bandwidth</td>
														<td class="price_body">Unlimited</td>
										        		<td class="price_body">Unlimited</td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">25 GB Storage</td>
											    	    <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-remove.png" alt="img"></td>
											        	<td class="price_body">Unlimited</td>
													</tr>
								    				<tr>
											    	    <td class="plan_list_title">iPhone App</td>
											        	<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-remove.png" alt="img"></td>
												        <td class="price_body">Unlimited</td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Enhanced Security</td>
									        			<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
								    				</tr>
									    			<tr>
								    	    			<td class="plan_list_title">E-mail</td>
								        				<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
									    			</tr>
								    				<tr>
								        				<td class="plan_list_title">Wordpress Support</td>
												        <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-remove.png" alt="img"></td>
											    	    <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">24/7 Support</td>
								        				<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
											        	<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Backups</td>
												    	<td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
												        <td class="price_body"><img src="<?php echo get_template_directory_uri() ?>/assets/images/tickmark-icon.png" alt="img"></td>
								    				</tr>
								    				<tr>
								        				<td class="plan_list_title">Dedicated IP</td>
												        <td class="price_body">$2/mo</td>
												        <td class="price_body">$2/mo</td>
								    				</tr>
												</tbody></table>  			 	
  											 </div>
												</div>
									<!-- end magnific-->
						 </div>
						 <div class="slider-right">
						    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-left.png" /> 
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   	 	 <div class="slider-right">
						    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-left.png" /> 
						 </div>
					   	<div class="slider-left">
							<h3>We Believe</h3>
							<h4>In Quality Design</h4>
							<p class="top">Any Creative Project is Unique</p>
								<p class="middle">and should be provided with</p>
								<p class="bottom">the appropriate quality</p>
							<button class="btn btn-8 btn-8b"><a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a></button>
						 </div>
						<div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<h3>We Believe</h3>
							<h4>In Quality Design</h4>
							<p class="top">Any Creative Project is Unique</p>
								<p class="middle">and should be provided with</p>
								<p class="bottom">the appropriate quality</p>
							<button class="btn btn-8 btn-8b"><a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a></button>
						 </div>
						<div class="slider-right">
						    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-left.png" /> 
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   		<div class="slider-right">
						    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-left.png" /> 
						 </div>
					   	<div class="slider-left">
							<h3>We Believe</h3>
							<h4>In Quality Design</h4>
							<p class="top">Any Creative Project is Unique</p>
								<p class="middle">and should be provided with</p>
								<p class="bottom">the appropriate quality</p>
							<button class="btn btn-8 btn-8b"><a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a></button>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
					   	<div class="slider-left">
							<h3>We Believe</h3>
							<h4>In Quality Design</h4>
							<p class="top">Any Creative Project is Unique</p>
								<p class="middle">and should be provided with</p>
								<p class="bottom">the appropriate quality</p>
							<button class="btn btn-8 btn-8b"><a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a></button>
						 </div>
						 <div class="slider-right">
						    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-left.png" /> 
						 </div>
						 <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
        </div>
            	 <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
   </div>
   <div class="main">