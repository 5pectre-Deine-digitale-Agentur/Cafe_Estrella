
  <div class="splide testimonials" id="slider" style="background:url('<?php echo the_sub_field('background'); ?>'); background-size: cover; background-position: center;">
  	<div class="splide__track">
  		<div class="splide__list">
        <?php if( have_rows('testimonial') ):
          $slide_count = 0; ?>
        <?php while ( have_rows('testimonial') ) : the_row(); ?>

    			<div class="splide__slide slide-<?php echo $slide_count; $slide_count++; ?>">
            <div class="slide__content">
              <span class="h3"><?php echo the_sub_field('oppinion'); ?></span>
              <h4 class="h4"><?php echo the_sub_field('kunde'); ?></h4>
            </div>
          </div>

        <?php endwhile; ?>
        <?php endif; ?>
  		</div>
  	</div>
  </div>


<script type="text/javascript">
  // Splide Dokumentation unter https://splidejs.com/category/users-guide/
  document.addEventListener( 'DOMContentLoaded', function () {
    var elms = document.getElementsByClassName( 'testimonials' );
    for ( var i = 0, len = elms.length; i < len; i++ ) {
    	new Splide( elms[ i ], {
        'type': 'loop',
        'arrows': true,
        'pagination': true,
        'autoplay': true,
        'interval': 3000,
        'start': 0,
        'lazload': true,
        'drag': true,
        // 'cover': false,
        // 'gap': 50,
        // 'focus': 'center',
        // 'breakpoints': {
        //   1400: {
        //     //options
        //   },
        //   1200: {
        //     //options
        //   },
        //   992: {
        //     //options
        //   },
        //   768: {
        //     //options
        //   },
        //   576: {
        //     //options
        //   },
        //   300: {
        //
        //   }
        // },
      } ).mount();
    }
  });

  // Die Optionen für Splide findest du hier https://splidejs.com/options/
</script>
