<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">

      <?php if( have_rows('content') ): ?>
        <?php while ( have_rows('content') ) : the_row();

          if( get_row_layout() == 'slider' ) {

            include 'sections/content/slider.php';

          } elseif( get_row_layout() == 'gallery' ) {

            include 'sections/content/gallery.php';

          } elseif( get_row_layout() == 'hero' ) {

            include 'sections/columns/hero.php';

          } elseif( get_row_layout() == 'content' ) {

            include 'sections/columns/hero.php';

          } elseif( get_row_layout() == 'subtitle' ) {

            echo '<p>' . get_sub_field('content') . '</p>'

          } elseif( get_row_layout() == 'title' ) {

            echo '<h1>' . get_sub_field('title') . '</h1>'

          } ?>

        <?php endwhile; ?>
      <?php else : ?>

    </div>
  </div>
</div>
