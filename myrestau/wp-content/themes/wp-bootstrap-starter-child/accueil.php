    <?php
    /* Template name: acceuil
    */
    get_header(); ?>


    	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
    		<main id="main" class="site-main" role="main">

<div class="m-3">

    				<p class="text-center"> LE RESTAURANT </p>
    				<br>
            <p> Juste après le pont, perché sur son rocher, l’Epuisette offre une vue imprenable sur la anse de Marseille. Tout autour, la mer Méditerranée d’un bleu profond, propose un spectacle sans cesse renouvelé.
             </p>
</div>

             <div>
           			<?php
                       while (have_posts()) : the_post(); ?>
               <div class="p-5">
           			<p>Plat du jour :</p >
           			<h1 class="text-center" style="color:#973A30;"><?php the_field('nom_du_plat_du_jour') ?></h1>
           			<p><?php the_field('description_du_plat_du_jour') ?></p>
           			<img src="<?php the_field('photo_du_plat_du_jour') ?>" alt="">
           			<pclass="m-3"><?php the_field('prix_du_plat_du_jour') ?></p><br>
              </div>
           			<?php
                       endwhile; // End of the loop.
                       ?>
           	</div>

          </main><!-- #main -->
        </section><!-- #primary -->

           <?php
    get_footer();
