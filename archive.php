<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materializedmasonrypk
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-8 col-lg-8">
			<?php if ( have_posts() ) : ?>
				<header>
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				<main id="main" class="site-main grid" role="main">
					<!-- width of .grid-sizer used for columnWidth -->
				  	<div class="grid-sizer"></div>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
					<?php endwhile; ?>
				</main><!-- #main -->
				<?php materializedmasonrypk_paging_nav(); ?>
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
