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
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"><?php the_title();?></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Gallery -->
                <!--<div class="site-filters clearfix center  m-b40">
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
                </div>-->
                <div class="row">
                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 mfp-gallery">
                        <li data-filter="home" class="card-container col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="dez-box dez-gallery-box">
							<?php
/* The loop */
while ( have_posts() ) :
the_post();
if ( get_post_gallery() ) :
$gallery = get_post_gallery( get_the_ID(), false );
/* create an array of IDs from */
$gids = explode( ",", $gallery['ids'] );
/* Loop through all the image and output them one by one */
foreach ($gids as $id) {
/* pull all the available attachment data with the new function */
$attachment = wp_get_attachment($id);
/* Uncomment the next line to see all the available data in
$attachment */
?>
                                <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"><?php echo $attachment['src']; ?> <img src="<?php echo $attachment['src']; ?>" alt="" /> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?php echo $attachment['src']; ?>" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
								<?php
}
endif;
endwhile;
?>
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