<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materializedmasonrypk
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 col-lg-12">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<main id="main" class="site-main grid clear" role="main">
					<!-- width of .grid-sizer used for columnWidth -->
				  	<div class="grid-sizer"></div>
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
		<?php //get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->
<?php get_footer(); ?>