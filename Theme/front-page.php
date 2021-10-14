<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

<main role="main">

  <?php if( have_rows('sections') ): ?>
    <?php while ( have_rows('sections') ) : the_row();

      $layout = get_sub_field('layout');

      if( $layout == 'col-full' ) {

        include 'sections/col-full.php';

      } elseif( $layout == 'col-12' ) {

        include 'sections/col-12.php';

      } elseif( $layout == 'half' ) {

        include 'sections/col-4.php';

      } elseif( get_row_layout() == 'col-3' ) {

        include 'sections/col-3.php';

      } elseif( get_row_layout() == 'full_width' ) {

        include 'sections/col-full.php';

      } ?>

    <?php endwhile; ?>
  <?php else : ?>

    <?php include 'sections/content/comming_soon.php' ?>

  <?php endif; ?>
</main>

<?php get_footer(); ?>
