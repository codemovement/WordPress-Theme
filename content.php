<?php
/**
 * @package Masonry_PK
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
					<?php masonry_pk_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					if ( is_singular() ) {
						the_content( sprintf(
							__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'masonry-pk' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					}else{
						the_excerpt();
					}
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'masonry-pk' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php masonry_pk_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php echo masonry_pk_modify_read_more_link(); ?>
		</div> <!-- .entry-container -->
	</div> <!-- .card -->
</article><!-- #post-## -->