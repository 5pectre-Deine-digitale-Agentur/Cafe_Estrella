<?php if( have_rows('selection') ):
  $slide_count = 0; ?>

  <section id="gallery">
    <?php while ( have_rows('selection') ) : the_row();?>
        <div class="image__container">
          <div class=".content__container">
            <img src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('image')['alt']); ?>">
            <h3 class="h3"><?php echo the_sub_field('title'); ?></h3>
            <span class="subtitle"><?php echo the_sub_field('subtitle'); ?></span>
          </div>
        </div>
    <?php endwhile; ?>
  </section>

<?php endif; ?>
