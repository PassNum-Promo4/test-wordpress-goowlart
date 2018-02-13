<?php
/*
Template Name: projects
*/
?>

<?php get_header(); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Photo grid -->
<div class="w3-row">

    <?php 
$args = array ( 'post_type' => 'project' ); #ici je passe les arguments de mon projet dans la boucle
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {  #Je boucle le div entier pour générer d'autres contenus pareil et je passe l'argumont du mon booble 
while ( $loop->have_posts() ) {
    $loop->the_post();
    ?>
    <div class="w3-third">
        <div>
            <?php the_post_thumbnail();?>
        </div>
        <p class="text-center c3-legend m-3 alxresolvaisso w3-text-grey " style="font-size: 12px;">
            <b><?php the_title(); ?></b>
            <?php the_content(); ?>

        </p>
    </div>
    <?php 
}
}
?>
</div>

<!-- Pagination -->
<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
</div>


