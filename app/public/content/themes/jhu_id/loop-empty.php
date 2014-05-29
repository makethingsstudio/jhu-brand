<?php
/**
 * jhu_id template for displaying an empty Loop
 *
 * @package WordPress
 * @subpackage jhu_id
 * @since jhu_id 1.0
 */
?>

<article id="post-none" class="post empty">

	<h1 class="post-title"><?php _e( 'Nothing Found', 'jhu_id' ); ?></h1>

	<div class="post-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jhu_id' ), admin_url( 'post-new.php' ) ); ?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>
				<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jhu_id' ); ?>
			</p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p>
				<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jhu_id' ); ?>
			</p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div>

</article>