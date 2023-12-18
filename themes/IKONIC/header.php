<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.4/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
</head>
<body>
      <header class="header">
            <a href="<?php echo get_site_url();?>" class="logo">
                  <img src="https://ikonicsolution.com/assets/img/logo-color.png">
            </a>
            <nav class="navbar">
                  <div class="fas fa-times" id="nav-close"></div>
                  <a href="<?php echo get_site_url();?>">Home</a>
                  <a href="<?php echo get_site_url();?>/quotes-page">Quotes</a>
                  <a href="<?php echo get_site_url();?>/projects-archive">Projects Archive</a>
                  <a href="<?php echo get_site_url();?>/ajax-end-point">Projects Ajax End Point</a>
            </nav>
            <div class="icons">
                  <div class="fas fa-bars" id="menu-btn"></div>
            </div>
      </header>