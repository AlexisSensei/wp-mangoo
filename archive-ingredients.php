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
				<h1>Nos ingrédients</h1>
				<p>Préparés avec amour tous les matins</p>
			</header><!-- .page-header -->
			<section class="ingredients-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); 
			?>
			
			<article class="ingredients-card">
				<?php the_post_thumbnail(); ?>
				<div class="ingredients-card__content">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">En savoir +</a>
				</div>
			</article>
				
			<?php 
			endwhile; ?>
			</section>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
