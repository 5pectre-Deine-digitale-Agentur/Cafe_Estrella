<?php
$footer = get_term_by('name', 'Quicklinks', 'nav_menu');
$footer_id = $footer->term_id;
$footer_menu = wp_get_nav_menu_object( $footer_id );
?>

<footer id="footer" style="background: url(<?php echo the_field('background', $footer_menu); ?>);background-size: cover; background-position: center">
		<div class="container">
			<div class="row">
				<?php if ( have_rows( 'company_info', 'options' ) ):
					while ( have_rows('company_info', 'options' ) ) : the_row(); ?>

						<div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="hours">
								<div class="background" style="background: url(<?php echo the_sub_field('background'); ?>); background-position: center; background-size: cover;">
								</div>
								<h3 class="h3">Öffnungszeiten</h3>
								<ul class="days">

								<?php if( have_rows('hours') ): ?>
									<?php while( have_rows('hours') ): the_row(); ?>

										<li class="day">
											<h4 class="h4 day"><?php echo the_sub_field('day'); ?></h4>
											<div class="spacer"></div>
											<h4 class="h4 time"><?php echo the_sub_field('Time'); ?></h4>
										</li>

									<?php endwhile; ?>
								<?php endif; ?>

								</ul>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">

						<div class="information">
							<h3 class="h3">About</h3>
							<p>
								<?php bloginfo('description'); ?>
							</p>

						</div>

						<div class="information">
							<h3 class="h3">Cafe Estrella</h3>

							<?php $adress = get_sub_field('adress');
							if ( !empty ( $adress ) ) {
								echo $adress;
							}; ?>

							<?php if ( have_rows( 'additional_links' ) ):
								while ( have_rows('additional_links' ) ) : the_row();
								$footer_link = get_sub_field('link');
								$footer_link_target = $link['target'] ? $link['target'] : '_self';?>

								<a href="<?php echo esc_url($footer_link['url']); ?>" target="<?php echo esc_attr( $footer_link_target ); ?>"><?php echo esc_html( $footer_link['title'] ); ?></a>

								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				<?php endwhile;?>
			<?php endif; ?>
				<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="sitemap">
						<h3 class="h3">Quicklinks</h3>
						<?php wp_nav_menu(array( 'theme_location' => 'footer' )); ?>
					</div>
				</div>
			</div>
		</div>

	<div class="copy">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'Spectreblank'); ?> <a href="https://5pectre.com" title="Spectre Blank">5pectre</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

</body>
</html>
