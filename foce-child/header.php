<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
    <nav id="site-navigation" class="main-navigation">
        <!-- Conteneur principal du menu -->
        <div>
            <!-- Conteneur pour le titre -->
            <div id="title-container">
                <div id="primary-menu" class="site-title nav-links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
            </div>
            <!-- Bouton Menu Burger -->
            <button class="menu-toggle" id="burger-btn" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        </div>

        <!-- Menu Burger en plein écran -->
        <div id="burger-menu" class="burger-menu">
            <div class="logomenuburger">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            </div>
            <ul class="menuburger">
                <li class="menu-item"><a href="#story"><span class="text">Histoire</span></a></li>
                <li class="menu-item"><a href="#characters"><span class="text">Personnages</span></a></li>
                <li class="menu-item"><a href="#place"><span class="text">Lieu</span></a></li>
                <li class="menu-item"><a href="#studio"><span class="text">Studio Koukaki</span></a></li>
                <ul class="studio"><a href="#">STUDIO KOUKAKI</a></ul>
            </ul>
            <div>
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png' ?>" alt="Hibiscus" class="fleur-hibiscus">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png' ?>" alt="Fleur mauve" class="fleur-rose">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png' ?>" alt="Fleur violette" class="fleur-violette">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png' ?>" alt="Tournesol" class="fleur-tournesol">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png' ?>" alt="Fleur orange" class="fleur-orange">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat orange.png'; ?>" alt="Chat orange" class="cat-orange floating-image">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat noir.png'; ?>" alt="Chat noir" class="cat-noir floating-image">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat violet.png'; ?>" alt="Chat bleu" class="cat-bleu floating-image">
                </div>
            </div>
        </div>
    </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
    <div id="content" class="site-content">
