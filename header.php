<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <title><?php wp_title(' | ', true, 'right'); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

        <meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content=""/>
<?php if (is_single()) { ?>
        <meta name="revised" content="<?php the_date(); ?>"/>
        <meta name="url" content="<?php the_permalink(); ?> "/>

<?php } ?>

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>