
<!-- Footer -->
<footer id="footer" class="bg-dark text-white">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="copyright small">
					<?php do_action( 'returnonclick_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://www.returnonclick.com.au/', 'returnonclick' ) ); ?>" title="<?php esc_attr_e( 'Return On Click', 'returnonclick' ); ?>"><?php printf( __( 'Proudly powered by %s', 'returnonclick' ), 'Returnonclick' ); ?></a>
				</div>
			</div>
			<div class="col-md-4">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div id="footer-1" class="sidebar-container" role="complementary">
						<div class="widget-area">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div><!-- .widget-area -->
					</div><!-- #primary -->
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div id="footer-2" class="sidebar-container" role="complementary">
						<div class="widget-area">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div><!-- .widget-area -->
					</div><!-- #secondary -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>


</div> <!-- /.body-content -->

<!-- /////////////////////////////////
////////// End body content //////////
////////////////////////////////// -->


<!-- Scroll to top button -->
<a href="#" class="scrolltotop hidden-xs"><i class="fa fa-arrow-up"></i></a>


<!-- Libs and Plugins JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-1.11.1.min.js"></script> <!-- jquery JS (more info: https://jquery.com) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (more info: http://getbootstrap.com) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery.easing.min.js"></script> <!-- jquery easing JS (more info: http://gsgd.co.uk/sandbox/jquery/easing) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery.stellar.min.js"></script> <!-- parallax JS (more info: http://markdalgleish.com/projects/stellar.js) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/smoothscroll.js"></script> <!-- smoothscroll JS (more info: https://gist.github.com/theroyalstudent/4e6ec834be19bf077298/) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery.counterup.min.js"></script> <!-- counter up JS (requires jQuery "waypoints.js" plugin. more info: https://github.com/bfintal/Counter-Up) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/waypoints.min.js"></script> <!-- counter up JS (more info: https://github.com/bfintal/Counter-Up) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script> <!-- Magnific Popup JS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/masonry.pkgd.min.js"></script> <!-- masonry JS (more info: http://masonry.desandro.com/) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: http://masonry.desandro.com/appendix.html#imagesloaded) -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/js/owl.carousel.js"></script> <!-- owl carousel JS (more info: http://www.owlcarousel.owlgraphic.com) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/js/owl.carousel.plugins.js"></script>

<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>

<!-- Theme custom JS (all your JS customizations) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>



<!--==============================
///// Begin Google Analytics /////
============================== -->

<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-10446414-1");
		pageTracker._trackPageview();
	} catch(err) {}
</script>

<!--==============================
///// End Google Analytics /////
============================== -->

<!--==============================
///// Area for other plugins /////
============================== -->

<?php wp_footer(); ?>

<!--==================================
///// End area for other plugins /////
================================== -->

</body>

</html>