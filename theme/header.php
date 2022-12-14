<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <?php if(get_post_meta(get_the_ID(), 'baluchon-title', true)) $title = get_post_meta(get_the_ID(), 'baluchon-title', true); else $title = get_the_title();?>
    <title><?php echo $title.' | '; echo bloginfo('name');?> </title>
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), 'baluchon-description', true); ?>">
  <meta name="keywords" content="Carreleur, entreprise, Toulouse">
    <!--<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <link rel="preload" href="<?php echo get_template_directory_uri()."/fonts.css";?>" as="font">">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/global.css";?>" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style.css";?>" media="print" onload="this.media='all'">
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/global.css";?>">-->

    
    <link rel="preload" href="<?php echo get_template_directory_uri()."/style.css";?>" as="style">
    
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style.css";?>">-->
    <link type="text/css" href="https://getbootstrap.com/1.0.0/assets/css/bootstrap-1.0.0.min.css">

    

    <script  src="<?= get_template_directory_uri();?>/utils/js/jquery-1.8.3.min.js"> </script>
    <script  src="<?= get_template_directory_uri();?>/utils/js/jquery-ui-1.9.2.custom.min.js"> </script>
    <script async src="https://kit.fontawesome.com/04cfa92c38.js" crossorigin="anonymous" ></script>
    <script async src="<?= get_template_directory_uri();?>/jquery.js"> </script>

    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/utils/css/base/jquery-ui-1.9.2.custom.min.css">
</head>

<header>
    <a class="heading-logo" href="/" aria-label="go-back-to-homepage">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
         ?>
         <img  src="<?php echo $image[0]; ?>" width="100px" height="100px" alt="Yellow logo of the test site">
    </a>

    <nav>
    <?php 
        wp_nav_menu( array(
            'theme_location' => 'header'
        ) );
    ?>
    </nav>

    <a class="contact-button" href="/" aria-label="bouton-to-see-the-contact-page">
         <span> Contactez nous</span>
    </a>

</header>

<div id="dialog">
Nous utilisons des cookies afin de vous offrir la meilleure exp??rience possible.
</div>
