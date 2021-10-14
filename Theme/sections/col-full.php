<?php if( have_rows('full_width') ): ?>
  <?php while ( have_rows('full_width') ) : the_row();?>

    <section id="full-width" class="container-fluid">
      <div class="row">
        <div class="col col-12 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

          <?php if( have_rows('content') ):
            while ( have_rows('content') ) : the_row();

              if( get_row_layout() == 'slider' ) {

                include 'content/slider.php';

              } elseif( get_row_layout() == 'gallery' ) {

                include 'content/gallery.php';

              } elseif( get_row_layout() == 'hero' ) {

                include 'sections/columns/hero.php';

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
    </section>

  <?php endwhile; ?>
<?php endif; ?>
