<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
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
                    <li><a href="http://p2t.azurewebsites.net/">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-12">
                        <div class="col-md-5 m-b30">
                            <div class="dez-thu "><img
                                        src="<?php the_field('cover'); ?>"
                                        alt=""/></div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="h2"><span class="text-primary"><?php the_field('name'); ?></span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_content(); ?></p>
                            
                        </div>
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Latar Belakang Pendidikan</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('latar_belakang_pendidikan'); ?></p>
                            
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Prestasi</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('prestasi'); ?></p>
                            
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Pengalaman Organisasi</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('pengalaman_organisasi'); ?></p>
                            
                    </div>
                </div>
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
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
