<?php if( have_rows('loop') ): ?>
  <?php while( have_rows('loop') ): the_row(); ?>

  <section id="posts">
    <div class="container" id="title">
      <div class="row">
        <div class="col-12">
          <h4 class="subtitle"><?php echo the_sub_field('subtitle'); ?></h4>
          <h2 class="h2"><?php echo the_sub_field('title'); ?></h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">

        <?php get_template_part( 'templates/loop' ); ?>

        <?php if( have_rows('hours') ): ?>
          <?php while( have_rows('hours') ): the_row(); ?>

          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hours">
              <div class="background" style="background: url(<?php echo the_sub_field('background'); ?>); background-position: center; background-size: cover;">
              </div>
              <h3 class="h3">Öffnungszeiten</h3>
              <ul class="days">
              <?php if ( have_rows( 'company_info', 'options' ) ):
        				while ( have_rows('company_info', 'options' ) ) : the_row();
                  if( have_rows('hours') ):
                    while( have_rows('hours') ): the_row(); ?>

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

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
