<?php defined( 'ABSPATH' ) || exit;?>

<?php
/**
 * READ BEFORE EDITING!
 *
 * Do not edit templates in the plugin folder, since all your changes will be
 * lost after the plugin update. Read the following article to learn how to
 * change this template or create a custom one:
 *
 * https://getshortcodes.com/docs/posts/#built-in-templates
 */
?>

<div class="su-posts su-posts-default-loop">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

			<div id="su-post-<?php the_ID(); ?>" class="su-post row no-gutters border rounded overflow-hidden flex-md-row mb-5 shadow-sm h-md-250 position-relative">
			    <div class="col-auto d-none d-lg-block">
			        
                    
                    <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
    					<a class="su-post-thumbnail float-left" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    				<?php endif; ?>
    				
                </div>
                <div class="col p-4 d-flex flex-column position-static">
    
    				<div class="su-post-meta mb-1 text-muted">
    					<?php the_time( get_option( 'date_format' ) ); ?>
    				</div>
    				
    				<h2 class="su-post-title mb-3"><?php the_title(); ?></h2>
    
    				<div class="su-post-excerpt card-text mb-auto">
    					<?php the_excerpt(); ?>
    				</div>
    
    				<?php /*if ( have_comments() || comments_open() ) : ?>
    					<a href="<?php comments_link(); ?>" class="su-post-comments-link"><?php comments_number( __( '0 comments', 'shortcodes-ultimate' ), __( '1 comment', 'shortcodes-ultimate' ), '% comments' ); ?></a>
    				<?php endif; */?>
    				
    				<h5><a style="text-decoration: underline;" href="<?php the_permalink(); ?>">Czytaj dalej</a></h5>
				</div>

			</div>

		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
