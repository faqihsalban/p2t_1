<?php
/**
 * Template Name: Kontak
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
?>
 <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(./assets/images/background/bg4.jpg);">
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
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-9">
                        <h4>Formulir kontak</h4>
                        <div id="show_contact_msg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
                            <form method="post" id="contact_form" action="contact.php" />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input id="contact_name" name="name" type="text" required="" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input id="contact_email" name="email" type="email" class="form-control" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea id="contact_text" name="message" rows="4" class="form-control" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button skew-secondry"> <span>Submit</span> </button>
                                        <button name="Resat" type="reset" value="Reset" class="site-button skew-secondry m-l30"> <span>Reset</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-3">
                        <h4>Info Kontak</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Alamat</h6>
                                        <p><?php the_field('alamat');?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p><?php the_field('email');?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p><?php the_field('telepon');?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
				<div class="row">
					<div class="col-md-12">
					<!-- Map part start -->
					<h4>Lokasi Kami</h4>
					<div id="gmap_canvas"></div>
					<!-- Map part END -->
					</div>
				</div>
				
            </div>
        </div>
        <!-- contact area  END -->
    </div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
<?php 
get_footer();