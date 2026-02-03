<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">WP Reboot</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
			<!--  <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#explore" class="nav-link">Explore</a>
                    </li>
                    <li class="nav-item me-3 dropdown">
                        <a href="#create" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Create</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                  <li><a class="dropdown-item" href="#">WP Theme</a></li>
                  <li><a class="dropdown-item" href="#">Bootstrap 5 CheatSheet</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Watch Videos</a></li>
                </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#share" class="nav-link">Share</a>
                    </li>
                </ul> </div> -->

			 <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarCollapse',
    'menu_class'      => 'navbar-nav ms-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
			
        </div>
    </nav>