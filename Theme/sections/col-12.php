<?php if( have_rows('full') ): ?>
  <?php while ( have_rows('full') ) : the_row();?>

  <section id="col-12" class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

          <?php if( have_rows('content') ):
            while ( have_rows('content') ) : the_row();

              if( get_row_layout() == 'slider' ) {

                include 'content/slider.php';

              } elseif( get_row_layout() == 'gallery' ) {

                include 'content/gallery.php';

              } elseif( get_row_layout() == 'accordeon' ) {

                include 'content/accordeon.php';

              } elseif( get_row_layout() == 'hero' ) {

                include 'content/hero.php';

              } elseif( get_row_layout() == 'text_content' ) {

                echo get_sub_field('content');

              } elseif( get_row_layout() == 'subtitle' ) {

                echo '<p>' . get_sub_field('subtitle') . '</p>';

              } elseif( get_row_layout() == 'title' ) {

                echo '<h1>' . get_sub_field('title') . '</h1>';

              }
            endwhile;
          endif;?>

        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
