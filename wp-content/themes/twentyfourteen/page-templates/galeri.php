<?php
/**
 * Template Name: Galeri
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
?>
<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(./images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Gallery Grid 4</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Gallery Grid 4</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Gallery -->
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio" />
                            <a href="#" class="site-button-secondry active"><span>Show All</span></a> 
						</li>
                        <li data-filter="home" class="btn">
                            <input type="radio" />
                            <a href="#" class="site-button-secondry "><span>Swimming</span></a> 
						</li>
                        <li data-filter="office" class="btn">
                            <input type="radio" />
                            <a href="#" class="site-button-secondry "><span>Spanish</span></a> 
						</li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio" />
                            <a href="#" class="site-button-secondry "><span>Lunch</span></a> 
						</li>
                        <li data-filter="window" class="btn">
                            <input type="radio" />
                            <a href="#" class="site-button-secondry "><span>Playground</span></a> 
						</li>
                    </ul>
                </div>
                <div class="row">
                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 mfp-gallery">
                        <li data-filter="home" class="card-container col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="./images/gallery/pic1.jpg" alt="" /> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./images/gallery/pic1.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Gallery END -->
                <!-- Pagination start -->
                
                <!-- Pagination END -->
            </div>
            <!-- Left & right section  END -->
        </div>
    </div>
<?php 
get_footer();