<?php
/**
 * Template Name: Direktur
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<div class="page-content">
    <!-- inner page banner -->
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg4.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
			<li><a href="http://p2t.azurewebsites.net/">Home</a></li>
                <li><?php the_title(); ?></li>
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
        <div class="p-a30 bg-white m-b30">
                        <div class="section-head">
                            <h2 class="text-uppercase"><?php the_title();?></h2>
                        </div>
						<div class="section-content text-center ">
							<div class="row">
							<?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $query_args = array(
                        'post_type' => 'post',
                        'category_name' => 'direktur',
                        'posts_per_page' => 200,
                        'paged' => $paged
                    );
                    // create a new instance of WP_Query
                    $the_query = new WP_Query($query_args);
                    ?>

                    <?php if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); // run the loop ?>
								<div class="col-md-4 col-sm-6">
									<div class="dez-box m-b30">
										<div class="dez-media">
											<a href="<?php the_permalink();?>">
												<img class="img-circle" width="500" height="500" src="<?php the_field('cover');?>" alt="" />
											</a>
											<div class="dez-info-has bg-primary">
												<ul class="dez-social-icon border">
													<?php if(get_field('facebook')!=''){ ?><li><a href="<?php echo the_field('facebook');?>" class="fa fa-facebook"></a></li><?php }?>
													<?php if(get_field('twitter')!=''){ ?><li><a href="<?php echo the_field('twitter');?>" class="fa fa-twitter"></a></li><?php }?>
													<?php if(get_field('linkedin')!=''){ ?><li><a href="<?php echo the_field('linkedin');?>" class="fa fa-linkedin"></a></li><?php }?>
													<?php if(get_field('google_plus')!=''){ ?><li><a href="<?php echo the_field('google_plus');?>" class="fa fa-google-plus"></a></li><?php }?>
												</ul>
										  </div>
										</div> 
										<div class="p-a10">
											<h4 class="dez-title text-uppercase"><a href="<?php the_permalink();?>"><?php the_field('name');?></a></h4>
											
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
                    <h4 class="widget-title">Pages</h4>

                    <div class="widget-post-bx">
                        <h6 class="post-title"><a href="http://p2t.azurewebsites.net/profil/">Profil</a></h6>
						<h6 class="post-title"><a href="http://p2t.azurewebsites.net/profil/direktur/">Direktur</a></h6>
						<h6 class="post-title"><a href="http://p2t.azurewebsites.net/profil/manajer-operasional/">Manajer Operasional</a></h6>
						<h6 class="post-title"><a href="http://p2t.azurewebsites.net/profil/staf">Staf</a></h6>
						<h6 class="post-title"><a href="http://p2t.azurewebsites.net/profil/dosen/">Dosen</a></h6>
					</div>

                </div>
                <div class="widget recent-posts-entry">
                    <h4 class="widget-title">Recent Posts</h4>
<?php $latest = new WP_Query('showposts=4&cat=3,4,5,6'); ?>
<?php if (have_posts()) : while ( $latest->have_posts() ) : $latest->the_post(); ?>
                    <div class="widget-post-bx">
                        <div class="widget-post clearfix">
                            <div class="dez-post-media"> <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt="" /> </a></div>
                            <div class="dez-post-info">
                                <div class="dez-post-header">
                                    <a href="<?php the_permalink();?>"><h6 class="post-title"><?php the_title(); ?></h6></a>
                                </div>
                                <div class="dez-post-meta">
                                    <ul>
                                        <a href="<?php the_permalink();?>"><li class="post-author">By <?php the_author(); ?></li></a>
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
                    <h5 class="widget-title">Our Gallery</h5>
                    <ul>
                        <?php
                /* The loop */
                 
                  $gallery = get_post_gallery( 104, false );
                  
                  /* Loop through all the image and output them one by one */
                  foreach( $gallery['src'] AS $src )
                  {
                   ?>
				   <li class="img-effect2"> <a href="http://p2t.azurewebsites.net/galeri/"><img src="<?php echo $src;?>" alt="" /></a> </li>
                                
							<?php 
                  }
                 
               ?>
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