<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<?php 
//PROBLEM CHILD SECTION!
  global $url;
  global $wp;
  global $stringTmp;

  $url = wp_parse_url(home_url( $wp -> request ));
  $stringTmp =  (isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '');
?>

<link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap"/>

<link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"/>

<link rel="shortcut icon" 
  href="<?php echo get_template_directory_uri().'/assets/images/favicon.ico'; ?>" type="image/x-icon" />

<script>
    var parcelRequire;
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<title>BOAT: The Bus for Outdoor Access</title>

<!-- Navigation -->
<nav class="nav">       
  <a href="<?php echo site_url('/home'); ?>">
  <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt="Logo" class="header__logo" /></a>
  <?php wp_nav_menu( array( 'menu_class' => 'nav__list hidden', 'container' => 'ul', )); ?>
</nav>
  <?php wp_head(); ?>
</head>