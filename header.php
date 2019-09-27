<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo get_template_directory_uri(); ?>/ress.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>"
    rel="stylesheet" type="text/css">
  <title>
    <?php wp_title( ' | ', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container flexbox">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
            src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ヤバイタピオカ屋さん"></a></h1>
      <a id="openMenu" href="#" class="menu-btn sp-only"></a>
      <nav class="sub-nav pc-only">
        <ul class="flexbox">
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png" alt="Facebook"
                width="32" height="32"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="Twitter"
                width="32" height="32"></a></li>
        </ul>
      </nav>
    </div>
  </header>
  <nav class="global-nav pc-only">
    <div class="container">
      <ul class="flexbox">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">MENU</a></li>
        <li><a href="#">STORE</a></li>
        <li><a href="#">RECRUIT</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
  </nav>
  <nav id="menu" class="sp-only sp-menu">
    <ul>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">MENU</a></li>
      <li><a href="#">STORE</a></li>
      <li><a href="#">RECRUIT</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
    <div class="sp-menu-social">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png" alt="Facebook" width="32"
          height="32"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="Twitter" width="32"
          height="32"></a>
    </div>
  </nav>