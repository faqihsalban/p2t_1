<?php
/**
 * Template Name: Berita
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
?>
<!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(./images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Berita</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="http://p2t.azurewebsites.net/">Home</a></li>
                    <li>Berita</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dez-blog-grid-3">
                        <?php $latest = new WP_Query('showposts=8&cat=4'); ?>
        <?php if (have_posts()) : while ( $latest->have_posts() ) : $latest->the_post(); ?>
                        <div class="post card-container col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="<?php the_permalink();?>"><img src="<?php the_field('cover');?>" alt="" /></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><?php the_date('d M','<strong>','</strong>'); ?></li><strong>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?php the_author();?></a> </li>
                                          
                                        </ul> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
						<?php endwhile; ?> 
          <div class="navigation">
           <div class="next-posts"><?php next_posts_link(); ?></div>
           <div class="prev-posts"><?php previous_posts_link(); ?></div>
          </div>

         <?php else : ?>

          <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
           <h1>Not Found</h1>
          </div>

         <?php endif; ?>
         <?php wp_reset_query(); ?>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
					<?php 
$type = 'book';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => 8,
  'caller_get_posts'=> 1
);
$temp = $wp_query;  // assign orginal query to temp variable for later use   
$wp_query = null;
$wp_query = new WP_Query($args); 
?>

<?php 

 get_template_part( 'loop', 'index' );?>
                    <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
<?php 
get_footer();