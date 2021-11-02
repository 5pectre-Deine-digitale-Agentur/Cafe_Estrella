<?php
$args = array(
  'post_type' => 'Post', //Define Posttype. Standard is "Post"
  'posts_per_page' => 2,
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) :
	while($post_query->have_posts() ) :
		$post_query->the_post(); ?>

		<div name="post-<?php the_ID(); ?>" class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" id="post">
      <div class="image__wrapper">
        <?php if ( has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
      </div>

			<h3 class="h3">
				<?php the_title(); ?>
			</h3>
      <div class="post__preview">
        <?php the_content(); ?>
      </div>

      <div class="button">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">Ich will weiter lesen</a>
      </div>

			<div class="button">
				<?php edit_post_link(); ?>
		  </div>

		</div>

<?php endwhile; ?>

<?php else: ?>
	<section>
		<h2 class="h2"><?php _e( 'Sorry, nothing to display.' ); ?></h2>
	</section>
<?php endif; ?>
