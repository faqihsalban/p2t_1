<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- footer bottom part -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-left"> <span>© Copyright 2017</span> </div>
					<div class="col-md-4 text-center"> <span> Design With <i class="fa fa-heart text-red heart"></i> By DexignZone </span> </div>
					<div class="col-md-4 text-right "> <a href="./assets/about-2.html"> About</a> <a href="./assets/help.html"> Help Desk</a> <a href="./assets/privacy-policy.html"> Privacy Policy</a> </div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript" src="./assets/js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript" src="./assets/js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript" src="./assets/js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript" src="./assets/js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript" src="./assets/js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="./assets/js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="./assets/js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="./assets/js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="./assets/js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript" src="./assets/js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript" src="./assets/js/sortcode.min.js"></script>
<!-- sortcode fuctions  -->
<script type="text/javascript" src="./assets/js/switcher.min.js"></script>
<!-- switcher fuctions  -->
<!-- revolution JS FILES -->
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="./assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript">
		var tpj=jQuery;
			var revapi486;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_486_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_486_1");
				}else{
					revapi486 = tpj("#rev_slider_486_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
                                keyboardNavigation: "on",
                                keyboard_direction: "vertical",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "vertical",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "erinyen",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: false,
                                    tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 10,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 10,
                                        v_offset: 0
                                    }
                                },
                                
                            },
						
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[700,700,700	,600],
						lazyType:"none",
						parallax: {
							type:"scroll",
							origo:"enterpoint",
							speed:400,
							levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
							type:"scroll",
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
</script>

<?php wp_footer(); ?>
<!-- Style Switcher End -->
</body>
</html>