<?php
/**
 * The template for displaying all single plat
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


<div id="container">
	<div id="content" role="main">

	<!-- BOUCLE CLASSIQUE -->

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title" style="color:#973A30;"><?php the_field('nom_du_plat') ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->


			<div class="entry-utility">
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

	<!-- BOUCLE CLASSIQUE -->

	<!-- CONTENU ACF -->
		<?php
			// Contrôler si ACF est actif
			if ( !function_exists('get_field') ) return;
		?>
			<p><?php the_field('description_du_plat') ?></p>
			<img src="<?php the_field('photo_de_plat') ?>" alt="">
			<p><?php the_field('liste_des_ingredients') ?></p> <br>
			<p><?php the_field('prix_du_plat') ?></p>
		<?php
					the_post_navigation();
		?>


	<!-- CONTENU ACF -->

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>
