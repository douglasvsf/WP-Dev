<?php 

function wpdevs_load_scripts(){
    wp_enqueue_style( 
        'wpdevs-style', 
        get_stylesheet_uri(), 
        array(), 
        filemtime(get_template_directory() . '/style.css'), 
        'all'); // get_template_directory retorna caminho absoluto da nossa pasta do tema
            // quando terminar o templade voltar para ver 1.0
        
    wp_enqueue_style( 
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', 
        array(), 
        null);   
    
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts',  'wpdevs_load_scripts'); 
// ela adiciona uma acao dentro da execucao do wp

//slug wp refere ao nome curto, um indentificador
register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
);
