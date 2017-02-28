<?php
/**
 * Template Name: Short Course
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
  <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg4.jpg);">
   <div class="container">
    <div class="dez-bnr-inr-entry">
     <h1 class="text-white">Short Course</h1>
    </div>
   </div>
  </div>
  <!-- inner page banner END -->
  <!-- Breadcrumb row -->
  <div class="breadcrumb-row">
   <div class="container">
    <ul class="list-inline">
     <li><a href="http://p2t.azurewebsites.net/">Home</a></li>
     <li>Short Course</li>
    </ul>
   </div>
  </div>
  <!-- Breadcrumb row END -->
  <div class="content-area">
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
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_args = array(
    'post_type' => 'post',
    'category_name' => 'short-course',
    'posts_per_page' => 8,
    'paged' => $paged
);
// create a new instance of WP_Query
$the_query = new WP_Query($query_args);
?>

<?php if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
                               <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="<?php echo the_field('cover');?>" alt="" /> </a>
                                   <div class="overlay-bx">
                                       <div class="overlay-icon">  <a href="<?php echo the_field('cover');?>" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                   </div>
                               </div>

    <?php endwhile; ?>
                       <div class="navigation">
                           <div class="next-posts"></div>
                           <div class="prev-posts"></div>
                       </div>
                   </div>
                   <!-- blog grid END -->
                   <!-- Pagination -->
                   <!--                    --><?php
                   //                    $type = 'book';
                   //                    $args = array(
                   //                        'post_type' => $type,
                   //                        'post_status' => 'publish',
                   //                        'paged' => $paged,
                   //                        'posts_per_page' => 8,
                   //                        'caller_get_posts' => 1
                   //                    );
                   //                    $temp = $wp_query;  // assign orginal query to temp variable for later use
                   //                    $wp_query = null;
                   //                    $wp_query = new WP_Query($args);
                   //                    ?>
                   <!---->
                   <!--                    --><?php
                   //
                   //                    get_template_part('loop', 'index'); ?>
                   <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                       <div class="pagination-bx col-lg-12 clearfix ">
                           <ul class="pagination">
                               <li clas="previous"><?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?></li>
                               <li class="next"><?php echo get_previous_posts_link('Newer Entries'); // display newer posts link ?></li>
                           </ul>
                       </div>
                   <?php } ?>
                   <?php else : ?>

                       <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                           <h1>Not Found</h1>
                       </div>

                   <?php endif; ?>
                   <?php wp_reset_query(); ?>
                   <!-- Pagination END -->
                   </div>
               </li>
           </ul>
       </div>
       <!-- Gallery END -->
       <!-- Pagination start -->

       <!-- Pagination END -->
   </div>
  </div>
 </div>
<?php 
get_footer();