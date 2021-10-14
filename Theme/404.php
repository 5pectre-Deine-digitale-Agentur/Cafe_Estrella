<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); ?>

	<main role="main" class="main" id="main">
		<div class="text-wrapper" id="post-404">
	    <div class="title" data-content="404">
	       404
	    </div>

	    <div class="subtitle" data-content="Oops, the page you're looking for doesn't exist">
	        Oops, the page you're looking for doesn't exist.
	    </div>

	    <div class="button">
	        <a class="button" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'Spectreblank' ); ?></a>
	    </div>
		</div>
	</div>

<?php get_footer(); ?>
