<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'pelican' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'pelican' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php if ( is_search() ) : ?>


    <a href="<?php echo get_permalink(); ?>">
    	<h1><?php the_title(); ?></h1>
    	<p><?php echo truncate(get_the_content(), 120); ?></p>
    </a>

<?php else : ?>

<article>
    <a href="<?php echo get_permalink(); ?>">
        <?php 
            if ( has_post_thumbnail() ) { 
                the_post_thumbnail('thumbnail');
        ?>
        <h2><?php the_title(); ?></h2>
        <p><?php echo truncate(get_the_content(), 120); ?> <span>Read more &rsaquo;</span></p>
         <?php 
         }
         else
         {
         ?>
         <h2><?php the_title(); ?></h2>
         <p><?php echo truncate(get_the_content(), 170); ?> <span>Read more &rsaquo;</span></p>
         <?php } ?>
    </a>
</article>

<?php endif; ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>			
		<ul class="navigation">
			<li class="prev"><?php next_posts_link( '&lsaquo; Older posts' ); ?></li>
            <li class="next"><?php previous_posts_link( 'Newer posts &rsaquo;' ); ?></li>
        </ul>
<?php endif; ?>
