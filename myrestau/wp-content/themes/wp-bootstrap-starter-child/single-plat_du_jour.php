<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<p> <b>Plat du jour : </b> </p>
			<h1 style="color:#973A30;"><?php the_field('nom_du_plat_du_jour') ?></h1>
			<p><?php the_field('description_du_plat_du_jour') ?></p>
			<img src="<?php the_field('photo_du_plat_du_jour') ?>" alt="">
			<pclass="m-3"><?php the_field('prix_du_plat_du_jour') ?></p><br>
			<?php
						the_post_navigation();

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
