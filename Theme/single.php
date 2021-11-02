<?php
/* 		POST-TEMPLATE

	*		TODO: Post-Seitentemplate nach Design erstellen
	*		TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/

get_header(); ?>

<main role="main">
	<section id="pagetitle">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="title__container">
						<a href="<?php echo get_home_url(); ?>" class="h4">zurück zur Startseite</a>
						<h1 class="h2"><?php echo the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	include 'sections/02_content/wp_content.php';
	include 'sections/01_ui/pagebuild.php';
	?>
</main>

<?php get_footer(); ?>
