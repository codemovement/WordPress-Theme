<?php
/**
 * @package materialwp
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- content -->
	<div class="card">
		<div class="entry-img">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
				</a>
			<?php endif; ?>
		</div>

		<div class="entry-container">
			<header class="entry-header">
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php materialwp_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					if ( is_singular() ) {
						the_content( sprintf(
							__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'materialwp' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					}else{
						the_excerpt();
					}
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'materialwp' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php materialwp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php echo modify_read_more_link(); ?>
		</div> <!-- .entry-container -->
	</div> <!-- .card -->
</article><!-- #post-## -->