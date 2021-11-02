<section id="pagebuild">
  <?php global $wp_query;
  $page = $wp_query->post->ID;

  if( have_rows('content', $page) ):
      while ( have_rows('content', $page) ) : the_row();

      if( get_row_layout() == 'slider' ) {
        include __DIR__ . '/../02_content/slider.php';
      } elseif( get_row_layout() == 'selection' ) {
        include __DIR__ . '/../02_content/gallery.php';
      } elseif( get_row_layout() == 'accordeon' ) {
        include __DIR__ . '/../02_content/accordeon.php';
      } elseif( get_row_layout() == 'code' ) {
        include __DIR__ . '/../02_content/code.php';
      } elseif( get_row_layout() == 'text_content' ) {
        include __DIR__ . '/../02_content/text_content.php';
      } elseif( get_row_layout() == 'testimonials' ) {
        include __DIR__ . '/../02_content/testimonials.php';
      }

    endwhile; ?>
  <?php endif;?>

</section>
