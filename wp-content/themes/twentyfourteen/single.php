<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Blog single on sidebar</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Blog single on sidebar</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                        </ul>
                    </div>
                    <!--<div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/default/thum1.jpg" alt="" /></a> </div>-->
                    <div class="dez-post-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy 
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum 
                            is simply dummy text of the printing and typesetting  printer a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
                            make a type specimen  It has urvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen  
                            It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since 
                            the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen  
                            It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                        <h5>Completely Responsive</h5>
                        <img class="alignleft" width="300" src="<?php echo get_template_directory_uri() ?>/assets/images/blog/grid/pic4.jpg" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the releasefive centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release</p>
                        <div class="dez-divider bg-gray-dark"></div>
                        <img class="alignright" width="300" src="<?php echo get_template_directory_uri() ?>/assets/images/blog/grid/pic1.jpg" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release</p>
                    </div>
                    <div class="dez-post-tags clear">
                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                    </div>
                </div>
                
                <!-- blog END -->
            </div>
        </div>
    </div>

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
