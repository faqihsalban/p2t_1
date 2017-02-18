<?php
/**
 * Template Name: Perusahaan
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
     <h1 class="text-white">Blog single with sidebar</h1>
    </div>
   </div>
  </div>
  <!-- inner page banner END -->
  <!-- Breadcrumb row -->
  <div class="breadcrumb-row">
   <div class="container">
    <ul class="list-inline">
     <li><a href="#">Home</a></li>
     <li>Blog single with sidebar</li>
    </ul>
   </div>
  </div>
  <!-- Breadcrumb row END -->
  <div class="content-area">
   <div class="container">
    <div class="row">
     <!-- Left part start -->
     <div class="col-md-9">
      <!-- blog start -->
         <?php
         if ( have_posts() ) : while ( have_posts() ) : the_post();
             ?>
          <div class="blog-post blog-single">
           <div class="dez-post-title ">
            <h3 class="post-title"><a href="#"><?php the_title(); ?></a></h3>
           </div>
           <div class="dez-post-meta m-b20">
            <ul>
             <li class="post-date"> <i class="fa fa-calendar"></i><?php the_date(); ?></li>
             <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?php the_author(); ?></a> </li>
            </ul>
           </div>

           <div class="dez-post-text">
               <?php the_content(); ?>
           </div>
           <div class="dez-post-tags clear">
            <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
           </div>
          </div>
             <?php
         endwhile;
         else:
             ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
         <?php endif;
         ?>
      <!-- blog END -->
     </div>
     <!-- Left part END -->
     <!-- Side bar start -->
     <div class="col-md-3">
      <aside class="side-bar">
       <div class="widget recent-posts-entry">
        <h4 class="widget-title">Recent Posts</h4>
           <?php $latest = new WP_Query('showposts=4&cat=4'); ?>
           <?php if (have_posts()) : while ( $latest->have_posts() ) : $latest->the_post(); ?>
            <div class="widget-post-bx">
             <div class="widget-post clearfix">
              <div class="dez-post-media"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt="" /> </div>
              <div class="dez-post-info">
               <div class="dez-post-header">
                <h6 class="post-title"><?php the_title(); ?></h6>
               </div>
               <div class="dez-post-meta">
                <ul>
                 <li class="post-author">By <?php the_author(); ?></li>
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

       <div class="widget widget_gallery">
        <h5 class="widget-title">Our services</h5>
        <ul>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic1.jpg" alt="" /></a> </li>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic2.jpg" alt="" /></a> </li>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic3.jpg" alt="" /></a> </li>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic4.jpg" alt="" /></a> </li>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic5.jpg" alt="" /></a> </li>
         <li class="img-effect2"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/pic6.jpg" alt="" /></a> </li>
        </ul>
       </div>

      </aside>
     </div>
     <!-- Side bar END -->
    </div>
   </div>
  </div>
 </div>
<?php 
get_footer();