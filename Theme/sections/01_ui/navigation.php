<?php
$term = get_term_by('name', 'main', 'nav_menu');
$menu_id = $term->term_id;
$menu = wp_get_nav_menu_object( $menu_id );
?>

<section id="navigation" class="desktop">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-lg-4 col-md-0 col-sm-0 col-xs-0 menu-item-col d-flex">
          <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-3 col-xs-6 nav-img-col">
          <?php if ( !empty(get_field('logo', $menu))):
            $logo = get_field('logo', $menu);
            if( !empty( $logo ) ): ?>

              <a href="<?php echo get_home_url();?>">
                <img class="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
              </a>

            <?php endif; ?>
          <?php else: ?>
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="">
          <?php endif; ?>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6  nav-icon-col d-flex flex-row">
          <?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>
        </div>
      </div>
    </div>
</section>

<section id="navigation" class="mobile">
    <div class="container">
      <div class="row">
        <div class="col-12 nav-img-col">
          <?php if ( !empty(get_field('logo', $menu))):
            $logo = get_field('logo', $menu);
            if( !empty( $logo ) ): ?>

              <a href="<?php echo get_home_url();?>">
                <img class="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
              </a>

            <?php endif; ?>
          <?php else: ?>
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="">
          <?php endif; ?>
          <p class="menu-link ham">
            <svg class="ham hamRotate" viewBox="0 0 100 100" width="80">
              <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
              <path class="line middle" d="m 30,50 h 40" />
              <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
            </svg>
          </p>
        </div>
      </div>
    </div>
</section>

<section id="nav-window">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <button class="accordion">Öffnungszeiten</button>
        <div class="panel">
          <div class="hours">
            <ul class="days">
              <?php if ( have_rows( 'company_info', 'options' ) ):
                while ( have_rows('company_info', 'options' ) ) : the_row(); ?>

                <?php if( have_rows('hours') ): ?>
                  <?php while( have_rows('hours') ): the_row(); ?>

                    <li class="day">
                      <h4 class="h4 day"><?php echo the_sub_field('day'); ?></h4>
                      <div class="spacer"></div>
                      <h4 class="h4 time"><?php echo the_sub_field('Time'); ?></h4>
                    </li>

                  <?php endwhile; ?>
                <?php endif; ?>

              <?php endwhile; ?>
            <?php endif; ?>

            </ul>
          </div>
        </div>

        <button class="accordion">Anfahrt</button>
        <div class="panel">
          <?php if ( have_rows( 'company_info', 'options' ) ):
            while ( have_rows('company_info', 'options' ) ) : the_row(); ?>

              <?php $adress = get_sub_field('adress');
              if ( !empty ( $adress ) ) {
                echo $adress;
              }; ?>

              <iframe src="
              <?php $map = get_sub_field('map');
              if ( !empty ( $map ) ) {
                echo $map;
              }; ?>
              " width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


              <?php if ( have_rows( 'additional_links' ) ):
                while ( have_rows('additional_links' ) ) : the_row();
                $footer_link = get_sub_field('link');
                $footer_link_target = $link['target'] ? $link['target'] : '_self';?>

                <a href="<?php echo esc_url($footer_link['url']); ?>" target="<?php echo esc_attr( $footer_link_target ); ?>"><?php echo esc_html( $footer_link['title'] ); ?></a>

                <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <a href="#"><button class="accordion">Speisekarte</button></a>
      </div>
    </div>
  </div>
</section>

<section id="hours">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hours">

          <ul class="days">
            <?php if ( have_rows( 'company_info', 'options' ) ):
              while ( have_rows('company_info', 'options' ) ) : the_row(); ?>

              <?php if( have_rows('hours') ): ?>
                <?php while( have_rows('hours') ): the_row(); ?>

                  <li class="day">
                    <h4 class="h4 day"><?php echo the_sub_field('day'); ?></h4>
                    <div class="spacer"></div>
                    <h4 class="h4 time"><?php echo the_sub_field('Time'); ?></h4>
                  </li>

                <?php endwhile; ?>
              <?php endif; ?>

            <?php endwhile; ?>
          <?php endif; ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="anfahrt">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <?php if ( have_rows( 'company_info', 'options' ) ):
          while ( have_rows('company_info', 'options' ) ) : the_row(); ?>
          <iframe src="
            <?php $map = get_sub_field('map');
            if ( !empty ( $map ) ) {
              echo $map;
            }; ?>
            " width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-6 drive">
        <?php if ( have_rows( 'company_info', 'options' ) ):
          while ( have_rows('company_info', 'options' ) ) : the_row(); ?>

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
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<script>
// ACCORDEON
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// HAMBURGER
let ham = document.querySelector('.ham');
let nav = document.getElementById('nav-window')

ham.addEventListener("click", function() {
  document.querySelector('.hamRotate').classList.toggle('active');
  if (document.querySelector('.hamRotate').classList.contains('active') == true) {
    nav.classList.add('active');
  } else {
    nav.classList.remove('active');
  }
});

// TOGGLE
let hours = document.querySelector('.hours-toggle');
let drive = document.querySelector('.anfahrt-toggle');

hours.addEventListener("click", function(){
  if (document.querySelector('#anfahrt').classList.contains('active') == true) {
    document.querySelector('#anfahrt').classList.remove('active');
  }
  if (document.querySelector('#hours').classList.contains('active') == true) {
    document.querySelector('#hours').classList.remove('active');
  } else {
    document.querySelector('#hours').classList.add('active');
  }
});

drive.addEventListener("click", function(){
  if (document.querySelector('#hours').classList.contains('active') == true) {
    document.querySelector('#hours').classList.remove('active');
  }
  if (document.querySelector('#anfahrt').classList.contains('active') == true) {
    document.querySelector('#anfahrt').classList.remove('active');
  } else {
    document.querySelector('#anfahrt').classList.add('active');
  }
});

</script>
