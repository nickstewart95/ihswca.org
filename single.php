<?php
get_header();

if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
			<div class="section section-alt homepage-intro">
				<h2><?php the_title(); ?></h2>
				<?php echo get_field('intro_text', get_the_ID()); ?>
			</div>
			<div class="section page-content"><?php echo the_content(); ?></div>
<?php
	}
}
get_footer();
