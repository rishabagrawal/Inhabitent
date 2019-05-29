<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-blocks container"> 
				<div class="footer-block-item">
					<div class="contact">
						<h3>Contact Info</h3>
						<p><i class="fas fa-envelope"></i>
						<a href="#">info@inhabitent.com</a></p>
						<p><i class="fas fa-phone"></i>
						<a href="#">778-456-7891</a></p>
						<p><span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span></p>
					</div>
                </div>	

				<div class="footer-block-item">
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="day of week">Saturday:</span> 10am to 2pm </p>
						<p><span class="day of week">Sunday:</span> Closed </p> 
					</div>
				</div>

				<div class="footer-block-item logo">
				<div class="text-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo"></a>
               </div>
				</div>
				



			</div>
				<div class="site-info">
					<div class="container">
						<p>Copyright &copy 2019 Inhabitent</p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
