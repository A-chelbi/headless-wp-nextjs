<!Doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?= get_template_directory_uri(); ?>/img/favicon_Montag.png" rel="favicon Montag icon">

        
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
        <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.helper.ie8.js"></script><![endif]-->
            
        <?php wp_head(); ?>
	</head>

    <body>
    <?php
    $menu = wp_get_nav_menu_object('primary-menu');
    $logo = get_field('logo', $menu);
    ?>
        <header>
            <div id="IE-warning"><?php _e('Warning! This wesite is not supported by Internet explorer, please change browser to have a better experience.', 'Warning'); ?></div>
            <nav id="nav" class="navbar">
                <div clas="logo"> 
                    <a href="<?= home_url(); ?>"><img src="<?= $logo['url']?>" alt="logo montag" class="logo"></a>
                </div>

 
                <input id="burger" type="checkbox" />

                <label for="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php wp_nav_menu([
                            'menu'  => 'primary-menu',
                            'container'         => false,
                            'menu_class'        => 'navbar-nav'
                    ]); ?>

                    <div class="footerlinks">
                        <a href="tel:1-833-965-4167" >    <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone"></a>
                        <a class="map" href="https://www.google.com/maps/place/1250+Ren%C3%A9-L%C3%A9vesque,+2200,+Montr%C3%A9al,+QC+H3B+4K4,+Canada/@45.4973267,-73.5725697,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a42bd93b0bb:0x1995a11b25943094!8m2!3d45.497323!4d-73.570381" target="_blank"> 
                           <img src="<?php echo get_template_directory_uri(); ?>/img/Map_icone_montag.svg" alt="phone">
                        </a>
                        <?php wp_nav_menu([
                                'menu'              => 'footer-menu',
                                'container'         => false,
                                'menu_class'        => 'footer-links'

                        ]); ?> 

                        <div class="copyrights">
                            <h5><?php _e('ALL RIGHTS RESERVED © 2020', 'footer'); ?></h5>
                        </div>
                    </div>
                </div>
            </nav>
        </header>