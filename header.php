<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package sjsmwebsiteV2
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="St. Joseph's School of Mactan">
        <meta name="title" content="St. Joseph's School of Mactan">
        <meta name="description" content="St. Joseph’s School of Mactan is an institution of learning, owned & administered by the Franciscan Sisters of the Immaculate Conception of the Holy Mother of God, Philippine South Province (SFIC-PSP) as a non-stock, non-profit corporation. It is an integral part of the SFIC">
        <meta name="keywords" content="http://sjsm.edu.ph, sjsm.edu.ph, sjsm, sjsofmactan, Catholic School, Religious School, Private School, St. Joseph's School of Mactan, St. Joseph, Josephian, SFIC, St. Francis, St. Francis of Assissi, Franciscan School, Franciscan Sisters, St. Joseph's School - Mactan, Mactan, Lapu-Lapu City, Acacia Road Mactan Lapu-Lapu City Cebu 6015, Editha Radam, Agnes V. Labitoria, mactan school, sjcqc">

        <title>St. Joseph's School of Mactan</title>
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"><!-- St. Joseph's School of Mactan Official Logo -->
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico" type="image/x-icon"><!-- Icon Logo -->
        <link rel="image_src" href="<?php echo get_bloginfo('template_directory');?>/img/sjsmLOGO.png" type="image/jpeg"><!-- Thumbnail in Social Media --> 
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/normalize.css"><!-- Normalize.CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/fonts.css"><!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous"><!-- Font Awesome (fontawesome.io) -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"><!-- Latest compiled and minified CSS (Bootstrap Select) -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/style.css"><!-- Web Stylesheet -->  
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/colorbox.css">  
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/sidebarNavigation.css"><!-- SidebarNavigation Menu CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/owl.carousel.min.css"><!--Who are we CSS Carousel-->         
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/jquery.bxslider.css"><!--CSS of JS Carousel-->        
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/jquery.scrollbar.css"><!--CSS of NiceScrollbar-->

        <!-- Responsive & Overriding Default CSS -->
        <?php if (is_front_page()) : ?>
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/responsive.css">
        <?php else: ?>      
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/sidebarNavigation.css">       
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/navbar-pages.css">
            <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/callus.css">
        <?php endif; ?>

        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory');?>/css/override.css">

        <!-- include jQuery -->           
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="<?php echo get_bloginfo('template_directory');?>/js/lib/modernizr.custom.js"></script>
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>        
    </head>

    <?php if (is_front_page()) : ?>
        <body id="page-top" class="home-nav">
    <?php else: ?>
        <body id="page-top">
    <?php endif; ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
       
        <div id="fb-root"></div>
        <script>(function(d, s, id) 
            {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
                fjs.parentNode.insertBefore(js, fjs);
            }
            (document, 'script', 'facebook-jssdk'));
        </script>

        <!-- PAGE PreLOADER -->
        <?php if (is_front_page()) : ?>
            <section id="preloader"></section>  
        <?php endif; ?>

        <!-- SEARCH BAR -->    
        <?php get_search_form(); ?>

        <!--### START your codes here ###-->           
               
            <!-- ## NAVIGATION ## -->
 			<?php get_template_part('nav-menu'); ?>
            
            <?php if (is_front_page()) : ?>
                <!--## HERO BANNER/HEADER ##-->
                <?php get_template_part('bxslider-parallax'); ?>
            <?php else: ?>
                <header id="sub-header"></header>
            <?php endif; ?>
            
            <main>


