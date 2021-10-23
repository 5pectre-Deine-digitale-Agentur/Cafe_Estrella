<section id="pagebuild">


        <?php if( have_rows('content') ):
            while ( have_rows('content') ) : the_row();

              if( get_row_layout() == 'slider' ) {
                include __DIR__ . '/../02_content/slider.php';
              } elseif( get_row_layout() == 'gallery' ) {
                include __DIR__ . '/../02_content/gallery.php';
              } elseif( get_row_layout() == 'accordeon' ) {
                include __DIR__ . '/../02_content/accordeon.php';
              } elseif( get_row_layout() == 'code' ) {
                include __DIR__ . '/../02_content/code.php';
              } elseif( get_row_layout() == 'text_content' ) {
                include __DIR__ . '/../02_content/text_content.php';
              } elseif( get_row_layout() == 'testimonial' ) {
                include __DIR__ . '/../02_content/testimonial.php';
              }
            endwhile;
          endif;?>

</section>
