<?php
$images = get_sub_field('slider');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

  <div class="splide" id="slider">
  	<div class="splide__track">
  		<div class="splide__list">
        <?php foreach( $images as $image ): ?>
    			<div class="splide__slide slide-<?php echo $slide_count; $slide_count++; ?>">
            <div class="background__image">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
          </div>
        <?php endforeach; ?>
  		</div>
  	</div>
  </div>
<?php endif; ?>

<script type="text/javascript">
  // Splide Dokumentation unter https://splidejs.com/category/users-guide/
  document.addEventListener( 'DOMContentLoaded', function () {
    var elms = document.getElementsByClassName( 'splide' );
    for ( var i = 0, len = elms.length; i < len; i++ ) {
    	new Splide( elms[ i ], {
        'type': 'loop',
        'arrows': false,
        'pagination': false,
        'autoplay': true,
        'interval': 3000,
        'start': 0,
        'lazload': true,
        'drag': true,
        'perPage': 4,
        'perMove': 1,
        'breakpoints': {
          992: {
            'perPage': 3,
          },
          768: {
            'perPage': 2,
          },
          576: {
            'perPage': 1,
          }
        },
      } ).mount();
    }
  });

  // Die Optionen für Splide findest du hier https://splidejs.com/options/
</script>
