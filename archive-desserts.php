<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salade_Bar
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Desserts</h1>
			</header><!-- .page-header -->
			<section class="desserts-container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="dessert-card">
					<?php the_post_thumbnail() ?>
					<h2><?php the_title() ?></h2>
					<a href="<?php the_permalink() ?>">En savoir + sur le dessert</a>
				</div>
				
			<?php endwhile; ?>
			</section>

			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
