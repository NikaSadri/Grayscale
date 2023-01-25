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

