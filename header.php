<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studiogarnier
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	

	<header id="masthead" class="site-header" role="banner">
    
            <!-- Ancienne nav 
            <div class="site-branding">
      <?php
      if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                
      <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
      <?php
      endif;
                        ?>
                                <img src="http://devgarnier.dareween.fr/wp-content/uploads/2016/08/logo.png" alt="logo">

    </div>  
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'studiogarnier' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>-->
                
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
                              <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
                <div class="site-branding">
                                                
                                         
                                              <?php if (is_front_page() && is_home() || is_front_page() ): ?>
                                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                              <?php else : ?>
                                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                              <?php
                                              endif;
                                                                                       
                                                                                        if ( function_exists( 'the_custom_logo' ) ) {
                                                                                        the_custom_logo();
                                                                                        } ?>
                                                                                       
                                                                                                 
                                                                    
      
                                            </div><!-- .site-branding -->
                                    </div><!--end navbar-header-->
                                    <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1">
                                            <?php
                                            wp_nav_menu( array(
                                                'menu'              => '',
                                                'theme_location'    => 'primary',
                                                'depth'             => 2,
                                                'container'         => '',
                                                'container_class'   => 'collapse navbar-collapse',
                                                'container_id'      => 'bs-example-navbar-collapse-1',
                                                'menu_class'        => 'nav navbar-nav',
                                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                                'walker'            => new wp_bootstrap_navwalker())
                                            );
                                            ?>
                                        
                                              <!-- <div class="hidden-xs hidden-sm hidden-md social-links-menu">
                                            <!--<ul class="nav navbar-nav navbar-right ">
                                                  
                                                 <!--<li><a href="https://www.facebook.com/garnierstudios/?fref=ts"></a></li>
                                                 <!--<li><a href="http://www.pictaram.com/user/garnier_event/3147383809"></a></li>-->
                                                 <!--<li><a href="https://twitter.com/Garnier_Studios"></a></li>-->
                                                 

                                     

                                            <!--</ul>
                                            </div>-->
                                            <div class="hidden-xs hidden-sm hidden-md social-links-fontawesome">
                                              <a class="fa fa-facebook" href="https://www.facebook.com/garnierstudios/?fref=ts" title="Facebook" target="_blank"></a>
                                              <a class="fa fa-twitter" href="https://twitter.com/Garnier_Studios" title="Twitter" target="_blank"></a>
                                            </div>
                                   
                                        
                                           <!--<?php if ( ! is_active_sidebar( 'social-nav' ) ) {
                                             return;
                                                }
                                             ?>
                                    
                                            <?php dynamic_sidebar( 'social-nav' ); ?>
                            -->
                                        
                  <!--Module search
                  <div class="col-sm-3 col-md-3 pull-right search-navbar">
                      <form class="navbar-form" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
                          <div class="input-group">
                              <input type="text" id="searchbox" class="form-control" placeholder="Search" name="s" id="s">
                              <div class="input-group-btn">
                                  <button class="btn btn-default"  id="searchsubmit"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
                              </div>
                          </div>
                      </form>
                  </div>-->
              </div><!--end navbar-colapse-->
              
          </div><!--end container-->
      </nav>
  </header><!-- #masthead -->



	<div id="content" class="site-content">
             
