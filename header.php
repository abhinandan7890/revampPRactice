<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package revampedpractice
 */

?>
<!doctype html>
<html <?php //language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!----------------------------------------------------------
============================================================
                TOP MENU
============================================================
----------------------------------------------------------->	
<div class="container-fluid topNavFirst">
    <div class="row pl-2 pr-4">
         
    <?php if ( has_nav_menu( 'menu-top' ) ) : ?>
                <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-top',
                    'container' => false,
					'menu_class'     => 'nav ml-auto d-md-flex d-none',
					'walker' => new PRactice_top_nav_walker()
				 ) );
			?>
           <?php endif; ?>
    </div>
</div>
	
<!----------------------------------------------------------
============================================================
                NAVIGATTION
============================================================
----------------------------------------------------------->
<!--
<header>
    <div class="grid-x">
    <div class="cell">
        <div class="top-bar">
            <div class="top-bar-right">
            <?php
               /* wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );*/
                ?>
            </div>
        </div>
    </div>
    <div class="cell">
        <div data-sticky-container>
            <div data-sticky data-options="marginTop:0;">

                <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle="example-menu"></button>
                <div class="title-bar-title">Menu</div>
                </div>

                <div class="top-bar" id="example-menu">
                    <ul class="vertical medium-horizontal dropdown menu" data-responsive-menu="accordion medium-dropdown">
                    <li class="menu-text">Site Title</li>
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                    </ul>
                </div>

            </div>
        </div>


    </div>
</div>
</header>
-->

<div class="container-fluid topNavSec">
   <div class="w-100 pl-2 pr-2">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri();?>/images/new-logo.png" class="img-fluid" />
        </a>       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <div class="d-flex align-items-center justify-content-center w-100">
                   <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
                <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
                    'container' => false,
					'menu_class'     => 'pt-3 pb-3 navbar-nav ml-auto w-75 d-flex justify-content-between',
					'walker' => new PRactice_nav_walker()
				 ) );
			?>
           <?php endif; ?>
            <?php if ( has_nav_menu( 'menu-top' ) ) : ?>
                <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-top',
                    'container' => false,
					'menu_class'     => 'nav ml-auto navbar-text rightnav d-md-none d-block',
					'walker' => new PRactice_top_nav_walker()
				 ) );
			?>
           <?php endif; ?>
               </div>
                

        </div>
    </nav>
    </div>
</div>

