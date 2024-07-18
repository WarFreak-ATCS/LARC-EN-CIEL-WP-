<?php
function larc_assets(){
    // wp_enqueue_style -> load your css assets 
    wp_enqueue_style('fashion', get_template_directory_uri() . "/css/main.min.css", microtime());
    wp_enqueue_style('fashion', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);

    wp_enqueue_script('fashion', get_template_directory_uri() . "/script/app.js", microtime(), [], true );

}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'larc_assets');
add_theme_support('post-thumbnails');