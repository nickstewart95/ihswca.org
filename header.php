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
		<div class="wrapper">
			<div class="notification"><?php echo get_field(
   	'header_notification',
   	'option',
   ); ?></div>
			<header>
				<h1>
					<img
						src="<?php echo get_template_directory_uri(); ?>/res/img/logo.png"
						alt="IHSWCA Logo"
					/>
					<span>IHSWCA</span>
				</h1>
				<navigation>
                    <?php echo wp_nav_menu([
                    	'theme_location' => 'header-navigation',
                    ]); ?>
				</navigation>
				<a href="/membership" class="membership">Membership</a>
			</header>
<?php if (is_page()) {
	$args = [
		'post_parent' => get_the_ID(),
		'post_type' => 'page',
		'numberposts' => -1,
		'post_status' => 'published',
	];
	$children = get_children($args);

	global $post;
	$direct_parent = $post->post_parent;

	if (!empty($children) || !empty($direct_parent)) { ?>
            <ul class="subnav">
				<?php
    if (!empty($children)) { ?>
				<li><?php echo $post->post_title; ?> Additional Content:</li>
<?php foreach ($children as $child) { ?>
                <li><a href="<?php echo get_post_field(
                	'post_name',
                	$child->ID,
                ); ?>"><?php echo $child->post_title; ?></a></li>
<?php }}
    if (!empty($direct_parent)) { ?>
                        <li class="direct-parent"><a href="<?php echo get_permalink(
                        	$direct_parent,
                        ); ?>"><i class="fas fa-arrow-left"></i> Back to <?php echo get_the_title(
	$direct_parent,
); ?></a></li>
<?php }
    ?>
		</ul>
<?php }
}
?>
