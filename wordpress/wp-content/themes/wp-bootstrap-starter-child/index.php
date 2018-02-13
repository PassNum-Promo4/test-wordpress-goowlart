<body class="w3-white w3-content" style="max-width:1600px">

	<?php get_header(); ?>

	<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"
	    id="myOverlay"></div>

	

		<!-- début du profil-->
		<?php  
	$args = array ( 'post_type' => 'profil' ); #ici je passe les arguments de mon projet dans la boucle
	$profil = new WP_Query( $args );
	if ( $profil->have_posts() ){ #Je boucle le div entier pour générer d'autres contenus pareil
				$profil->the_post();
				?>
		<div class="w3-container w3-white w3-center  w3-padding-32" id="about">
		
			<div class="w3-grayscale-max  w3-padding-32">
				<?php  the_post_thumbnail(); #placer l'image a part du post ?> </div>
			<div class="w3-content w3-justify" style="max-width:600px">
				<p><b>tel :</b>
					<?php the_field('phone'); ?>
				</p>
				<p><b>email :</b>
					<?php the_field('email'); ?>
				</p>
				<p><b>Adresse :</b>
					<?php the_field('adresse'); ?>
				</p>
				<hr class="w3-opacity">
				<h4 class="w3-padding-16">DÉVELOPPEUR WEB</h4>
				
				<p class="w3-wide">FORMATION</p>

				<?php 
	$args = array ( 'post_type' => 'formation' ); #ici je passe les arguments de mon projet dans la boucle
	$loopformation = new WP_Query( $args );
	if ( $loopformation->have_posts() ) {  #Je boucle le div entier pour générer d'autres contenus pareil et je passe l'argumont du mon booble 
		while ( $loopformation->have_posts() ) {
			$loopformation->the_post();
			?>
				<div class="w3-white">
				</div>
				<b><?php the_title(); ?></b>
				<p class="w3-wide"><?php the_content(); ?></p>

					<?php 
		}
	}
	?>
				<div class="w3-white">
				</div>
				<p class="w3-wide"></p>
				<div class="w3-white">
				</div>
			</div>

			<?php
		
	}
	?>
