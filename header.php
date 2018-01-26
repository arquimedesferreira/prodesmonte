<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <base href="."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Trabalho realizado para VoliCharter empreendimentos">
    <meta name="author" content="Arquitec">

	<title> 
                <?php carregaTitulo() ?>
    </title>
     <?php $home = get_template_directory_uri();?>
	<link href="http://www.volicharter.org" rel="canonical">
	<meta property="og:title" content="Volicharter Viagens">
	<meta property="og:url" content="http://www.volicharter.org">
	<meta property="og:description" content="Volicharter Viagens">
	<meta property="og:type" content="website">
	<meta property="twitter:title" content="Volicharter Viagens">
	<meta property="twitter:url" content="http://www.volicharter.org">
	<meta property="twitter:description" content="Volicharter Viagens">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:title" content="Veduta della Città di Fortaleza">
	<meta property="og:url" content="http://www.volicharter.org">
	<meta property="og:description" content="Bem Vindo a Volicharter">
	<meta property="og:image" content="<?= $home ?>/img/2016/07/recife_01.jpg">
	<meta property="twitter:title" content="Veduta della Città di Fortaleza">
	<meta property="twitter:url" content="http://www.volicharter.org">
	<meta property="twitter:description" content="Bem Vindo a Volicharter">
	<meta property="twitter:image" content="<?= $home ?>/img/recife_01.jpg">
	<meta property="twitter:card" content="summary">
    <link rel="shortcut icon" href="<?= $home ?>/img/desenhando.png" type="image/png">
    
         <!-- Add Boostrat Coffe-->
         <link href="<?= $home ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link href="<?= $home ?>/css/reset.css" rel="stylesheet">
         
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" 
         rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Design+System:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
         rel="stylesheet" type="text/css">
         
        <!-- 

            <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
         rel="stylesheet" type="text/css">
        -->
        <!-- Custom styles for this template -->
        <link href="<?= $home ?>/css/business-casual.css" rel="stylesheet">
        <link href="<?= $home ?>/css/style_menu.css" rel="stylesheet">
        

    <?php wp_head();?>

    </head>
    <!--Inicio do body -->
    <body >
        
        <div class="tagline-lower text-center text-expanded text-shadow-white text-uppercase  mb-5 d-none d-lg-block p-4">
            <img class="img-responsive" src="<?= $home ?>/img/desenhando.svg" alt="">
        </div>            
        <div class="tagline-lower text-center text-expanded text-shadow-white text-uppercase  mb-5 d-none d-lg-block">
          <strong class=".navbar-brand">  Rua Osvaldo Cruz 1, Sala 1007  | Edificio Beira Mar Trade Center | Fortaleza -CE, Meireles </strong>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
            <div class="container">
                        <a class="navbar-brand text-uppercase text-expanded text-primary font-weight-bold d-lg-none" 
                        href="#"><img src="<?= $home ?>/img/desenhando_48_48.png" > </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                                data-target="#navbarResponsive" 
                                aria-controls="navbarResponsive" 
                                aria-expanded="false" 
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>   
                <?php
                $args = array(
                    'depth'       => 0,
                    'sort_column' => 'menu_order, post_title',
                    'container_class' => 'collapse navbar-collapse text-uppercase text-expanded',
                    'container_id' => 'navbarResponsive',
                    'menu_class'  => 'navbar-nav mx-auto',
                    'include'     => 'navbar',
                    'exclude'     => 'navbar',
                    'echo'        => true,
                    'show_home'   => true,
                    'link_before' => '',
                    'link_after'  => '',
                    'page_item'  => 'navbarResponsive'                                  
                    );          
                //echo('<strong>');                                              
                wp_nav_menu($args);
                //echo('</strong>');
                ?>
                
            </div>
        </nav>

        <!-- Container -->        