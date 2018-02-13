<?php 
#Je n'ai pas utilisé le *** add_theme_support('post-thumbnails'); il est dans mon thème parent
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action('init', 'myProjects');#quand il commence, il appelle ma fonction 
add_action('init', 'myProfil');#quand il commence, il appelle ma fonction 
add_action('init', 'myFormations');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function myProjects() { #J'ajoute mes changements dans une fonction
$labels = array(
    'name' => 'Projects',  #passer le nom à l'interface
    'name_singular' => 'Project',
    'add_new_item' => 'Ajouter un nouveau projet', #ajouter un titre personnalisé à l'éditeur
    'edit_item' => 'Éditer le projet'
);

$supports = array(#Ici je vous dis ce qu'il va supporter 
'title', 
'thumbnail', 
    'editor'
);
    $args = array(
        'labels' => $labels,
        'public' => true, #laissant mon marqueur public afin que je puisse le voir dans WordPress
        'supports' => $supports); #J'ajoute du support
    register_post_type('project', $args); #créer un marqueur
}
function myProfil() {
    $labels = array(
        'name' => 'Profils',  #passer le nom à l'interface
        'name_singular' => 'Profil',
        'add_new_item' => 'Modifier mon Profil', #ajouter un titre personnalisé à l'éditeur
        'edit_item' => 'Éditer le profil'
    );
    
    $supports = array(#Ici je vous dis ce qu'il va supporter 
        'title', 
        'thumbnail',
        'excerpt',
        'editor' #ici je donne un texte plus complexe
    );
        $args = array(
            'labels' => $labels,
            'public' => true, #laissant mon marqueur public afin que je puisse le voir dans WordPress
            'supports' => $supports); #J'ajoute du support
        register_post_type('profil', $args); #créer un marqueur

    }
    function myFormations() { #J'ajoute mes changements dans une fonction
        $labels = array(
            'name' => 'Formations',  #passer le nom à l'interface
            'name_singular' => 'Formation',
            'add_new_item' => 'Ajouter une nouvelle formation', #ajouter un titre personnalisé à l'éditeur
            'edit_item' => 'Éditer le formation'
        );
        $supports = array(#Ici je vous dis ce qu'il va supporter 
        'title', 
        'editor' #ici je donne un texte plus complexe
    );
            $args = array(
                'labels' => $labels,
                'public' => true, #laissant mon marqueur public afin que je puisse le voir dans WordPress
                'supports' => $supports);
            register_post_type('formation', $args); #créer un marqueur
        }

?>