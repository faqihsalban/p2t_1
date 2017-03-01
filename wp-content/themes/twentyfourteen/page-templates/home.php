<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

    <!-- Content -->
    <div class="page-content padtop" style="padding-bottom: 0px;">


        <!-- Slider -->
        <div class="container" style="width:auto;">
            <?php
            echo do_shortcode("[metaslider id=230]");
            ?></div>


        <!-- About Company -->
        <div class="section-full  bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5 m-b30">
                            <div class="dez-thu "><img
                                        src="<?php the_field('cover_about'); ?>"
                                        alt=""/></div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="h2"> Tentang <span class="text-primary">P2T </span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('short_about'); ?></p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20 ">
											<span class="icon-cell">
												<i class="fa fa-globe"></i>
											</span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte "><?php the_field('element_1'); ?></h5>
                                            <p><?php the_field('value_element_1'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20">
											<span class="icon-cell">
												<i class="fa fa-user"></i>
											</span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte "><?php the_field('element_1'); ?></h5>
                                            <p><?php the_field('value_element_1'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20">
											<span class="icon-cell">
												<i class="fa fa-futbol-o"></i>
											</span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte "><?php the_field('element_1'); ?></h5>
                                            <p><?php the_field('value_element_1'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20 ">
											<span class="icon-cell">
												<i class="fa fa-book"></i>
											</span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte "><?php the_field('element_1'); ?></h5>
                                            <p><?php the_field('value_element_1'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Purchase Add -->
        <div class="section-full bg-img-fix overlay-black-middle"
             style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row text-white p-tb60">
                    <div class="col-md-6">

                    </div>

                </div>
            </div>
        </div>
        <!-- Purchase Add END -->
        <!-- Our Awesome Services -->
        <div class="section-full box-shadow bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <a href="http://p2t.azurewebsites.net/berita"><h2 class="h2"><span class="text-primary">Berita</span>
                                </h2></a>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>-->
                        </div>
                    </div>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $query_args = array(
                        'post_type' => 'post',
                        'category_name' => 'berita',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    // create a new instance of WP_Query
                    $the_query = new WP_Query($query_args);
                    ?>

                    <?php if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="dez-box dez-img-effect rotate">
                                    <div class="dez-media"><a href="<?php the_permalink(); ?>"><img
                                                    src="<?php the_field('cover'); ?>"
                                                    alt=""/></a></div>
                                    <div class="dez-info p-a20 border-1 text-center">
                                        <h2 class="dez-title m-t0 m-b10 font-weight-900"><a
                                                    href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()), 0, 35) . '[...]'; ?></a>
                                        </h2>
                                        <!--<!--                                        <div class="dez-post-meta m-b20">-->

                                        <!--<!--                                        <ul>-->
                                        <!--                                            <p>-->
                                        <?php //the_date(); ?><!--</p>-->
                                        <!--<!--                                        </ul>-->
                                        <!--<!--                                        </div>-->
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
            </div>
        </div>

        <div class="section-full p-t70 p-b40">
            <div class="container">
                <div class="section-head text-center">
                    <a href="http://p2t.azurewebsites.net/short-course"><h2 class="h2"><span class="text-primary">Short Course</span></h2></a>
                    <div class="dez-separator-outer">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>

                </div>
                <div class="section-content ">

                    <div class="row">
                        <ul id="masonry" class="dez-gallery-listing gallery-grid-4 mfp-gallery">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $query_args = array(
                                'post_type' => 'post',
                                'category_name' => 'short-course',
                                'posts_per_page' => 3,
                                'paged' => $paged
                            );
                            // create a new instance of WP_Query
                            $the_query = new WP_Query($query_args);
                            ?>

                            <?php if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
                                <li data-filter="home" class="card-container col-md-3 col-sm-4 m-b30">
                                    <div class="dez-box dez-gallery-box">

                                        <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"><a
                                                    href="javascript:void(0);"> <img src="<?php echo the_field('cover'); ?>"
                                                                                     alt=""/> </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon"><a href="<?php echo the_field('cover'); ?>"
                                                                             class="mfp-link"> <i
                                                                class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                            </div>
                                        </div>


                                        <!-- Pagination END -->
                                    </div>
                                </li>
                            <?php endwhile; ?>
                            <div class="navigation">
                                <div class="next-posts"></div>
                                <div class="prev-posts"></div>
                            </div>
                    </div>
                    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                        <div class="pagination-bx col-lg-12 clearfix ">
                            <ul class="pagination">
                                <li clas="previous"><?php echo get_next_posts_link('Older Entries', $the_query->max_num_pages); // display older posts link ?></li>
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
                    </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="section-full box-shadow bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-content ">
                    <div class="row">
                        <div class="section-head text-center">
                            <h2 class="h2"><span class="text-primary">Our University Gallery</span></h2>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>

                        </div>

                    </div>

                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 gallery mfp-gallery"
                        style="position: relative; height: 543.75px;">
<!--                        --><?php
//                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//                        $query_args = array(
//                            'post_type' => 'post',
//                            'category_name' => 'short-course',
//                            'posts_per_page' => 3,
//                            'paged' => $paged
//                        );
//                        // create a new instance of WP_Query
//                        $the_query = new WP_Query($query_args);
//                        ?>
<!---->
<!--                        --><?php //if ($the_query->have_posts()) :
//                            while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
<!--                                <li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6"-->
<!--                                    style="position: absolute; left: 900px; top: 271px;">-->
<!--                                    <div class="dez-box dez-gallery-box m-b0">-->
<!--                                        <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a-->
<!--                                                    href="javascript:void(0);"> <img-->
<!--                                                        src="./images/gallery/college/pic8.jpg" alt=""> </a>-->
<!--                                            <div class="overlay-bx">-->
<!--                                                <div class="overlay-icon"><a href="javascript:void(0);"> <i-->
<!--                                                                class="fa fa-link icon-bx-xs"></i> </a> <a-->
<!--                                                            href="./images/gallery/college/pic6.jpg" class="mfp-link">-->
<!--                                                        <i class="fa fa-picture-o icon-bx-xs"></i> </a></div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            --><?php //endwhile; ?>
<!--                            <div class="navigation">-->
<!--                                <div class="next-posts">--><?php //next_posts_link(); ?><!--</div>-->
<!--                                <div class="prev-posts">--><?php //previous_posts_link(); ?><!--</div>-->
<!--                            </div>-->
<!---->
<!--                        --><?php //else : ?>
<!---->
<!--                            <div --><?php //post_class(); ?><!-- id="post---><?php //the_ID(); ?><!--">-->
<!--                                <h1>Not Found</h1>-->
<!--                            </div>-->
<!---->
<!--                        --><?php //endif; ?>
<!--                        --><?php //wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Awesome Services END -->
    <!-- Our Philosophy -->
    <div class="section-full text-white bg-img-fix p-t70 p-b40 choose-us overlay-black-middle"
         style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg1.jpg);">
        <div class="container">
            <div class="section-head  text-center text-white">
                <h2 class="h2">Layanan Kami</h2>
                <div class="dez-separator-outer ">
                    <div class="dez-separator bg-white style-liner"></div>
                </div>
                <p><?php the_field('short_layanan_kami'); ?></p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 m-b30 ">
                    <div style="position: static; height: 365px;"
                         class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                        <div s class="icon-bx-md radius bg-white m-b20">
                            <span class="icon-cell text-primary"><i class="fa fa-male"></i></span>
                        </div>
                        <div class="icon-content">
                            <?php
                            $postInd = get_post(211);
                            $titleInd = $postInd->post_title;
                            $contentInd = $postInd->post_content;

                            $excerptInd = strip_shortcodes($contentInd);
                            $excerptInd = apply_filters('the_content', $excerptInd);
                            $excerptInd = str_replace(']]>', ']]&gt;', $excerptInd);
                            $excerpt_length = apply_filters('excerpt_length', 20);
                            //                              $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                            $excerptInd = wp_trim_words($excerptInd, $excerpt_length, $excerpt_more);
                            ?>
                            <h4 class="dez-tilte"><?php echo $titleInd; ?></h4>
                            <p><?php echo $excerptInd; ?></p>

                        </div>
                        <button style="top: 10px;" type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modalInd">Read More <i class="icon-play3 position-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                    <div style="position: static; height: 365px;"
                         class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                        <div class="icon-bx-md radius bg-white m-b20">
                            <span class="icon-cell text-red"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="icon-content">
                            <?php
                            $postKel = get_post(214);
                            $titleKel = $postKel->post_title;
                            $contentKel = $postKel->post_content;

                            $excerptKel = strip_shortcodes($contentKel);
                            $excerptKel = apply_filters('the_content', $excerptKel);
                            $excerptKel = str_replace(']]>', ']]&gt;', $excerptKel);
                            $excerpt_length = apply_filters('excerpt_length', 20);
                            //                              $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                            $excerptKel = wp_trim_words($excerptKel, $excerpt_length, $excerpt_more);
                            ?>
                            <h4 class="dez-tilte"><?php echo $titleKel; ?></h4>
                            <p><?php echo $excerptKel; ?></p>
                        </div>
                        <button type="button" style="top: 10px;" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modalKel">Read More <i class="icon-play3 position-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                    <div style="position: static; height: 365px;"
                         class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                        <div class="icon-bx-md radius bg-white m-b20">
                            <span class="icon-cell text-yello"><i class="fa fa-university"></i></span>
                        </div>
                        <div class="icon-content">
                            <?php
                            $postSek = get_post(216);
                            $titleSek = $postSek->post_title;
                            $contentSek = $postSek->post_content;

                            $excerptSek = strip_shortcodes($contentSek);
                            $excerptSek = apply_filters('the_content', $excerptSek);
                            $excerptSek = str_replace(']]>', ']]&gt;', $excerptSek);
                            $excerpt_length = apply_filters('excerpt_length', 20);
                            //                              $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                            $excerptSek = wp_trim_words($excerptSek, $excerpt_length, $excerpt_more);
                            ?>
                            <h4 class="dez-tilte"><?php echo $titleSek; ?></h4>
                            <p><?php echo $excerptSek; ?></p>

                        </div>
                        <button type="button" style="top: 10px;" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modalSek">Read More <i class="icon-play3 position-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                    <div style="position: static; height: 365px;"
                         class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                        <div class="icon-bx-md radius bg-white m-b20">
                            <span class="icon-cell text-green"><i class="fa fa-building-o"></i></span>
                        </div>
                        <div class="icon-content">
                            <?php
                            $postPer = get_post(218);
                            $titlePer = $postPer->post_title;
                            $contentPer = $postPer->post_content;

                            $excerptPer = strip_shortcodes($contentPer);
                            $excerptPer = apply_filters('the_content', $excerptPer);
                            $excerptPer = str_replace(']]>', ']]&gt;', $excerptPer);
                            $excerpt_length = apply_filters('excerpt_length', 20);
                            //                              $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                            $excerptPer = wp_trim_words($excerptPer, $excerpt_length, $excerpt_more);
                            ?>
                            <h4 class="dez-tilte"><?php echo $titlePer; ?></h4>
                            <p><?php echo $excerptPer; ?></p>

                        </div>
                        <button type="button" style="top: 10px;" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modalPer">Read More <i class="icon-play3 position-right"></i></button>
                    </div>
                </div>
                <!--                <div class="col-md-3 col-sm-6 m-b30">-->
                <!--                    <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">-->
                <!--                        <div class="icon-bx-md radius bg-white m-b20">-->
                <!--                            <span class="icon-cell text-green"><i class="fa fa-smile-o"></i></span>-->
                <!--                        </div>-->
                <!--                            <div class="icon-content">-->
                <!--                                --><?php
                //                                $postShort = get_post(54);
                //                                $titleShort = $postShort->post_title;
                //                                $contentShort = $postShort->post_content;
                //
                //                                $excerptShort = strip_shortcodes( $contentShort );
                //                                $excerptShort = apply_filters( 'the_content', $excerptShort );
                //                                $excerptShort = str_replace(']]>', ']]&gt;', $excerptShort);
                //                                $excerpt_length = apply_filters( 'excerpt_length', 20 );
                ////                              $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                //                                $excerptShort = wp_trim_words( $excerptShort, $excerpt_length, $excerpt_more );
                //
                //                                ?>
                <!--                                <h4 class="dez-tilte">--><?php //echo $titleShort; ?><!--</h4>-->
                <!--                                <p>--><?php //echo $excerptShort; ?><!--</p>-->
                <!--                            </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
        <!-- Modal with h4 -->
        <div id="modalInd" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $titleInd; ?></h4>
                    </div>

                    <div class="modal-body">
                        <p class="txtModals"><?php echo $contentInd; ?></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modalKel" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $titleKel; ?></h4>
                    </div>

                    <div class="modal-body">
                        <p class="txtModals"><?php echo $contentKel; ?></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modalSek" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $titleSek; ?></h4>
                    </div>

                    <div class="modal-body">
                        <p class="txtModals"><?php echo $contentSek; ?></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modalPer" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $titlePer; ?></h4>
                    </div>

                    <div class="modal-body">
                        <p class="txtModals"><?php echo $contentPer; ?></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /modal with h4 -->
    </div>
    <!-- Our Philosophy End -->
    <!-- Our Gallery -->
    <div class="section-full p-t70 p-b10" style="display:none">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="h2"><span class="text-primary">Our University Gallery</span></h2>
                <div class="dez-separator-outer">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's
                    standard dummy text ever since the been when an unknown printer.</p>
            </div>
            <div class="section-content ">
                <div class="gallery-filters clearfix text-center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="">
                            <a href="#" class="site-button-link">All</a>/
                        </li>
                        <li data-filter="events" class="">
                            <a href="#" class="site-button-link">Events</a>/
                        </li>
                        <li data-filter="facilities" class="">
                            <a href="#" class="site-button-link">Our Facilities</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul id="masonry" class="dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
                        <li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic1.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic1.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom radius-sm">
                                    <a href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic2.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic2.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic3.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic3.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic4.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic4.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic5.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic5.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic6.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic7.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"><a
                                            href="javascript:void(0);"> <img
                                                src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic8.jpg"
                                                alt=""/> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"><a href="javascript:void(0);"> <i
                                                        class="fa fa-link icon-bx-xs"></i> </a> <a
                                                    href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i
                                                        class="fa fa-picture-o icon-bx-xs"></i> </a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery END -->
    <!-- Testimonials blog -->
    <div class="section-full overlay-black-middle bg-img-fix p-t70 p-b60"
         style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/college/bg4.jpg);display:none">
        <div class="container">
            <div class="section-head text-white text-center">
                <h2 class="h2">What Students Says</h2>
                <div class="dez-separator-outer">
                    <div class="dez-separator bg-primary style-liner"></div>
                </div>
            </div>
            <div class="section-content">
                <div class="testimonial-two">
                    <div class="item">
                        <div class="testimonial-2 testimonial-bg">
                            <div class="testimonial-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the when an printer
                                    took a galley of type and scrambled it to make [...]</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic quote-left radius shadow"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic1.jpg"
                                            width="100" height="100" alt=""/></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                        class="testimonial-position">Student</span></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-2 testimonial-bg">
                            <div class="testimonial-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the when an printer
                                    took a galley of type and scrambled it to make [...]</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic quote-left radius shadow"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic2.jpg"
                                            width="100" height="100" alt=""/></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                        class="testimonial-position">Student</span></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-2 testimonial-bg">
                            <div class="testimonial-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the when an printer
                                    took a galley of type and scrambled it to make [...]</p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic quote-left radius shadow"><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic3.jpg"
                                            width="100" height="100" alt=""/></div>
                                <strong class="testimonial-name">David Matin</strong> <span
                                        class="testimonial-position">Student</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-a30 bg-white m-b30">
        <a href="http://p2t.azurewebsites.net/klien"><h2 class="h2" style="
    text-align: center;
"><span class="text-primary">Klien Kami</span>
            </h2></a>
        <div class="dez-separator-outer" style="
    text-align: center; 
">
            <div class="dez-separator bg-primary style-liner"></div>
        </div>
        <div class="clear"></div>
        <div class="section-content">
            <div class="img-carousel-content mfp-gallery gallery owl-btn-center-lr">
                <?php $latest = new WP_Query('showposts=10&cat=11'); ?>
                <?php if (have_posts()) : while ($latest->have_posts()) : $latest->the_post(); ?>
                    <div class="item">
                        <div class="ow-carousel-entry">
                            <div class="ow-entry-media dez-img-effect zoom-slow"><img src="<?php the_field('cover'); ?>"
                                                                                      alt=""/></div>

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
        </div>
    </div>
    </div>
<?php
get_footer();