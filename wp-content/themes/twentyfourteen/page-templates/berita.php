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
                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                            'posts_per_page' => 20,
                            'offset' => 5,
                            'category_name' => 'Media',
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query( $args );
                        ?>
<!--                        --><?php //$latest = new WP_Query('showposts=8&cat=4'); ?>
<!--                        --><?php //if (have_posts()) : while ($latest->have_posts()) : $latest->the_post(); ?>
<!--                            --><?php
//                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//                        $query_args = array(
//                            'post_type' => 'post',
//                            'category_name' => 'berita',
//                            'posts_per_page' => 4,
//                            'paged' => $paged
//                        );
//                        // create a new instance of WP_Query
//                        $the_query = new WP_Query($query_args);
//                        ?>
                            <!---->
                            <!--                        --><?php //if ($the_query->have_posts()) :
//                        while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
                            <div class="post card-container col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="blog-post blog-grid date-style-2">
                                    <div class="dez-post-media dez-img-effect zoom-slow"><a
                                                href="<?php the_permalink(); ?>"><img src="<?php the_field('cover'); ?>"
                                                                                      alt=""/></a></div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h3 class="post-title"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <div class="dez-post-meta ">
                                            <ul>
                                                <li class="post-date"><i
                                                            class="fa fa-calendar"></i><?php the_date('d M', '<strong>', '</strong>'); ?><?php the_date('Y', '<span>', '</span>'); ?>
                                                </li>
                                                <strong>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a
                                                                href="#"><?php the_author(); ?></a></li>


                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                            <div class="navigation">
                                <div class="next-posts"></div>
                                <div class="prev-posts"></div>
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
                    <!--                    --><?php //if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                    <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class="pagination">
                            <li clas="previous"><?php echo get_next_posts_link('Older Entries', $the_query->max_num_pages); // display older posts link ?></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><?php echo get_previous_posts_link('Newer Entries'); // display newer posts link ?></li>
                        </ul>
                    </div>
                    <!--                    --><?php //} ?>
                    <!-- Pagination END -->
                    <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $the_query->max_num_pages
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();