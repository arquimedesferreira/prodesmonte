<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

function mostrar_post_proDesmonte(){
    
        $labes=array(
        'name'=>'A ProDesmonte',
        'name_singular'=>'A ProDesmonte',
        'add_new_item'=> 'Registrar ProDesmonte',
        'add_item'=>' Editar ProDesmonte',
        'edit_item'=>'Editar ProDesmonte',
        'new_item'=> 'Nova ProDesmonte'
       
        );
        // Define o que vai ter no tela do novo tipo de post 
        $suports= array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        );
    
        $args= array(
            'labels'=>$labes,
            'public'=>true,
            'description'=>'Informações sobre a ProDesmonte ',
            'menu_icon'=>'dashicons-image-filter',
            'supports'=>$suports,
             
        );
    
        register_post_type('proDesmonte',$args);
    }

function mostrar_post_item(){

    $labes=array(
    'name'=>'Parceiros',
    'name_singular'=>'Parceiro',
    'add_new_item'=> 'Registrar Parceiro',
    'add_item'=>' Editar Parceiro',
    'edit_item'=>'Editar Parceiro',
    'new_item'=> 'Novo Parceiro'
   
    );
    // Define o que vai ter no tela do novo tipo de post 
    $suports= array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
    );

    $args= array(
        'labels'=>$labes,
        'public'=>true,
        'description'=>'Apenas vários itens ',
        'menu_icon'=>'dashicons-image-filter',
        'supports'=>$suports,
         
    );

    register_post_type('parceiros',$args);
}



function criar_post_carrocel(){
    $labes=array(
    'name'=>'Carrocel',
    'name_singular'=>'Carrocel',
    'add_new_item'=> ' Add Carrocel',
    'add_item'=>' Editar',
   
    );
    // Define o que vai ter no tela do novo tipo de post 
    $suports= array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
    );

    $args= array(
        'labels'=>$labes,
        'public'=>true,
        'description'=>'Apenas vários itens',
        'menu_icon'=>'dashicons-image-filter',
        'supports'=>$suports,
         
    );

    register_post_type('Carrocel',$args);
}






function carregaTitulo(){
    bloginfo('name');
    if(!is_home()){
         echo' | ';
         the_title();
    }
    
}


//function registrar_menu_header(){
//   register_nav_menu( 'header-menu','main-menu' );
//}
//
//add_action('init','registrar_menu_header');

function registra_tax_categoria(){
    $labels=array(
        'name'=>'Categorias',
        'singular_name'=>'Categoria',
        'add_new_item'=>'Nova Categoria'
    );
    
    $args=array(
        'labels'=>$labels,
        'public'=>true,
        'hierarchical'=>true
    );
    
    register_taxonomy('categoria','parceiros',$args);

}
add_action('init','registra_tax_categoria');


//Define os Init
add_action('init', 'mostrar_post_proDesmonte');
add_action('init', 'mostrar_post_item');
add_action('init', 'criar_post_carrocel');