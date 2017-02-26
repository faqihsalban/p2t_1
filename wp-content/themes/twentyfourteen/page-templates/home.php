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
    <div class="page-content" style="padding-bottom: 0px;">
		<!--Slider Start--> 
        <div id="jssor_1" style="position:relative;margin-top: 0px;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() ?>/assets/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            
            <div>
                <img data-u="image" src="<?php echo get_template_directory_uri() ?>/assets/images/purple.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo get_template_directory_uri() ?>/assets/images/blue.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
		<!-- Slider END -->
        <!-- About Company -->
        <div class="section-full  bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-content">
                    <div class="row">
						<div class="col-md-5 m-b30">
                            <div class="dez-thu "><img src="<?php echo get_template_directory_uri() ?>/assets/images/student1.png" alt="" /></div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="h2"> Tentang <span class="text-primary">P2T </span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><strong>Pusat Psikologi Terapat (P2T) Universitas Pendidikan Indonesia </strong></p>
                            <p class="m-b30">adalah .... </p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="bg-primary icon-bx-xs m-b20 "> 
											<span class="icon-cell">
												<i class="fa fa-globe"></i>
											</span> 
										</div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte ">All Courses Available</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>
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
                                            <h5 class="dez-tilte ">Experience Teacher</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>
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
                                            <h5 class="dez-tilte ">Other Activities</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>
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
                                            <h5 class="dez-tilte ">Books & Libraary</h5>
                                            <p>Lorem ipsum dolor sit adipiscing sed diam nonummy end [...]</p>
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
        <div class="section-full bg-img-fix overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg1.jpg);">
            <div class="container">
				<div class="row text-white p-tb60">	
					<div class="col-md-6">
						<h2 class="m-a0">Sekilas Info</h2>
						<p class="m-b0">Dinamis bisa di edit dari dashboard</p>
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
                            <h2 class="h2"><span class="text-primary">Berita</span></h2>
							<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                            <div class="clear"></div>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>-->
                        </div>    
					</div>		
					<div class="row">
						<div class="col-md-4 col-sm-4 m-b30">
							<div class="dez-box dez-img-effect rotate">
								<div class="dez-media"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic1.jpg" alt="" /></a> </div>
								<div class="dez-info p-a20 border-1 text-center">
									<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">Infants</a></h2>
									<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 m-b30">
							<div class="dez-box dez-img-effect rotate">
								<div class="dez-media"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic4.jpg" alt="" /></a> </div>
								<div class="dez-info p-a20 border-1 text-center">
									<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">Toddlers</a></h2>
									<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 m-b30">
							<div class="dez-box dez-img-effect rotate">
								<div class="dez-media "> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic2.jpg" alt="" /></a> </div>
								<div class="dez-info p-a20 border-1 text-center">
									<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">Pre Classes</a></h2>
									<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
		<!-- Our Philosophy -->
		<div class="section-full text-white bg-img-fix p-t70 p-b40 choose-us overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg1.jpg);">
            <div class="container">
				<div class="section-head  text-center text-white">
                    <h2 class="h2">Our Philosophy</h2>
                    <div class="dez-separator-outer "><div class="dez-separator bg-white style-liner"></div></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 m-b30 ">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-primary"><i class="fa fa-bus"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Safety First</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-red"><i class="fa fa-child"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Small Class Size</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-yello"><i class="fa fa-apple"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Certified Tutors</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-green"><i class="fa fa-smile-o"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Infant Care</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
				</div>
				<div class="row">		
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-green"><i class="fa fa-bus"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Safety First</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-primary"><i class="fa fa-child"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Small Class Size</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-red"><i class="fa fa-apple"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Certified Tutors</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-yello"><i class="fa fa-smile-o"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="dez-tilte">Infant Care</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam[...]</p>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Our Philosophy End -->
		<!-- Our Gallery -->
        <div class="section-full p-t70 p-b10" style="display:none">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2"><span class="text-primary">Our University Gallery</span></h2>
					<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
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
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic1.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic1.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic2.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic2.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic3.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic3.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic4.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic4.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic5.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic5.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic6.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic7.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="dez-box dez-gallery-box m-b0">
									<div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery/college/pic8.jpg" alt="" /> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="./assets/images/gallery/college/pic6.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
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
        <div class="section-full overlay-black-middle bg-img-fix p-t70 p-b60" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/college/bg4.jpg);display:none">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="h2">What Students Says</h2>
					<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
                </div>
                <div class="section-content">
                    <div class="testimonial-two">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic1.jpg" width="100" height="100" alt="" /></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic2.jpg" width="100" height="100" alt="" /></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonials/pic3.jpg" width="100" height="100" alt="" /></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
		<!-- Latest News -->
		<div class="section-full p-t70 p-b10 box-shadow" style="display:none">
			<div class="container"> 
				<div class="row">
					<div class="section-head text-center">
						<h2 class="h2"><span class="text-primary">Meet Our Best Tutors</span></h2>
						<div class="dez-separator-outer"><div class="dez-separator bg-primary style-liner"></div></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 m-b30">
						<div class="dez-box dez-img-effect rotate">
							<div class="dez-media"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic3.jpg" alt="" /></a> </div>
							<div class="dez-info p-a20 border-1 text-center">
								<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">New Classroom</a></h2>
								<div class="text-center news-info m-tb15">
									<ul class="icon-list">
										<li class="event-time"><i class="fa fa-clock-o text-primary m-r10"></i>Aug 24, 2015 at 9:00 PM</li>
										<li class="event-date"><i class="fa fa-user text-primary m-r10"></i>By Mary Jane </li>
										<li class="event-address"><i class="fa fa-map-marker text-primary m-r10"></i>south africa</li>
									</ul>
								</div>
								<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 m-b30">
						<div class="dez-box dez-img-effect rotate">
							<div class="dez-media"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic2.jpg" alt="" /></a> </div>
							<div class="dez-info p-a20 border-1 text-center">
								<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">Our New Teacher</a></h2>
								<div class="text-center news-info m-tb15">
									<ul class="icon-list">
										<li class="event-time"><i class="fa fa-clock-o text-primary m-r10"></i>Aug 24, 2015 at 9:00 PM</li>
										<li class="event-date"><i class="fa fa-user text-primary m-r10"></i>By Mary Jane </li>
										<li class="event-address"><i class="fa fa-map-marker text-primary m-r10"></i>south africa</li>
									</ul>
								</div>
								<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 m-b30">
						<div class="dez-box dez-img-effect rotate">
							<div class="dez-media"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/our-services/college/pic4.jpg" alt="" /></a> </div>
							<div class="dez-info p-a20 border-1 text-center">
								<h2 class="dez-title m-t0 m-b10 font-weight-900"><a href="#">Toddler Care</a></h2>
								<div class="text-center news-info m-tb15">
									<ul class="icon-list">
										<li class="event-time"><i class="fa fa-clock-o text-primary m-r10"></i>Aug 24, 2015 at 9:00 PM</li>
										<li class="event-date"><i class="fa fa-user text-primary m-r10"></i>By Mary Jane </li>
										<li class="event-address"><i class="fa fa-map-marker text-primary m-r10"></i>south africa</li>
									</ul>
								</div>
								<p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest News END -->
    </div>
<?php 
get_footer();