<?php
//Hier indexieren wir unsere Javascript-Dateien. Nützliche Elemente sind auskommentiert und können wieder zugeschaltet werden. Achte auf die korrekte Anwendung!

  // Enque Header Scripts (header.php)
  function my_header_enqueue()
  {
      wp_register_script( 'scripts.js', get_template_directory_uri() . '/js/script.js', array(), '1.0' );
      wp_enqueue_script( 'scripts.js' );

      // Bei Bedarf freischalten und Informationen einfügen
      wp_register_script( 'splide.js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), '1.0' );
      wp_enqueue_script( 'splide.js' );
  }
  add_action('init', 'my_header_enqueue');

  // Enque Footer Scripts (footer.php)
  function my_footer_enqueue()
  {
      wp_register_script( 'Spectreblankanimationscripts', get_template_directory_uri() . '/js/animation.js', array(), '1.0', true );
      wp_enqueue_script( 'Spectreblankanimationscripts' );

      // BOOTSTRAP
      wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array(), '1.0', true );
      wp_enqueue_script( 'bootstrap' );

      // FONTAWESOME
      wp_register_script( 'fontawesome', 'https://kit.fontawesome.com/8928e65948.js', array(), '1.0', true );
      wp_enqueue_script( 'fontawesome' );

      // jQuery
      wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js', array(), '1.0', true );
      wp_enqueue_script( 'jquery' );

      // Bei Bedarf freischalten und Informationen einfügen
      // wp_register_script( '// ** scriptname **//', '// ** scriptsource ** //', array(), '1.0', true );
      // wp_enqueue_script( '// ** scriptname **//' );
  }
  add_action( 'wp_enqueue_scripts', 'my_footer_enqueue' );

  // // Load Spectre Blank conditional scripts
  // function Spectreblank_conditional_scripts()
  // {
  //     if (is_page('// ** pagename bzw. page-ID **//')) {
  //         wp_register_script('// ** scriptname **//', '// ** scriptsource ** //', array('jquery'), '1.0.0')
  //         wp_enqueue_script('// ** scriptname **//'); // Enqueue it!
  //     }
  // }
  // add_action('wp_print_scripts', 'Spectreblank_conditional_scripts');

  // Load Admin Scripts
  function custom_admin_js() {
      $url = get_bloginfo('template_directory') . '/js/wp-admin.js';
      echo '"<script type="text/javascript" src="'. $url . '"></script>"';
  }
  add_action('admin_footer', 'custom_admin_js');

?>
