<?php
/**
 * The Header.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Nahuel Sotelo's portfolio
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->

<!-- *****REVISAR***** -->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!-- *****END***** -->

<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">

<!-- *****REVISAR***** -->
  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
         More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- *****END***** -->
    <link href='http://fonts.googleapis.com/css?family=Lobster|Anton' rel='stylesheet' type='text/css'>

    <title>
      <?php
        /*
        * Print the <title> tag based on what is being viewed.
        */
        global $page, $paged;
        
        wp_title( '|', true, 'right' );
        
        // Add the blog name.
        bloginfo( 'name' );
        
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
        
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'portfolio03' ), max( $paged, $page ) );
      ?>
    </title>
    
    <meta name="description" content="Personal portfolio of Nahuel Sotelo, HTML/CSS geek, UX/UI nerd & friendly person">
    <meta name="author" content="Nahuel Sotelo">
    	
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    
    <link rel="author" href="humans.txt" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
<!-- *****REVISAR***** -->
    <!-- More ideas for your <head> here: h5bp.com/docs/#head-Tips -->
    
    <!-- All JavaScript at the bottom, except for Modernizr and Respond.
           Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
           For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
           
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>
<!-- *****END***** -->
    
</head>

<?php if(is_page()) { ?>
  <body <?php body_class($post->post_name); ?>>
<?php } else { ?>
  <body <?php body_class(); ?>>
<?php } ?>
    
    <div class="disclaimer">
        <small>This site is a work in progress, among other things, its visuals are only optimized for smartphones so it appears narrow in tablets and desktop. I'm working on it. I appreciate your patience.</small>
    </div>
    <header class="l-main l-frame cf">
        <hgroup class="grid-wrap" role="banner">
            <h1 class="f-gamma"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><strong>HTML/CSS</strong> geek, <strong>UX/UI</strong> nerd &amp; <strong>friendly</strong> person</h2>
        </hgroup>
    
    <?php if (!is_home()) { ?>
      <nav class="grid-wrap h-nav" role="navigation">
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'main',
                'container'       => false,
                'menu_class'      => 'cf'
              )
            );
          ?>
      </nav>
    <?php  } ?>
    
  </header>  
    
  <div id="main" role="main">