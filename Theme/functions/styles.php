<?php
//Hier indexieren wir unsere CSS-Dateien. Nützliche Elemente sind auskommentiert und können wieder zugeschaltet werden. Achte auf die korrekte Anwendung!

  // Load Spectre Blank styles
  function my_stylesheets()
  {
      wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
      wp_enqueue_style('style');

      wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), '1.0', 'all');
      wp_enqueue_style('bootstrap');

      wp_register_style('splide.css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), '1.0', 'all');
      wp_enqueue_style('splide.css');
  }
  add_action('wp_enqueue_scripts', 'my_stylesheets');

  // Load Spectre Blank Admin Stylesheet
  function my_admin_style() {
    wp_enqueue_style( 'admin-style', get_stylesheet_directory_uri() . '/admin-style.css' );
  }
  add_action( 'admin_enqueue_scripts', 'my_admin_style');

  // Remove 'text/css' from our enqueued stylesheet
  function Spectre_style_remove($tag)
  {
      return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
  }

?>
