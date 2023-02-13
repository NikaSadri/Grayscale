<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
      <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                    <?php
                    wp_nav_menu( array(
                        'menu'           => 'Main Menu',
                        'theme_location' => 'gs-main-menu',
                        'menu_class' => 'navbar-nav ms-auto',
                        'container' =>'div',
                        'container_class'=>'collapse navbar-collapse',
                        'container_id' => 'navbarResponsive',
                        'add_li_class' => 'nav-item',
                        'link_class'   => 'nav-link'
                    ) );
                    ?>
            </div>
    </nav>

