<?php 
/* 
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Incoterms
 */
get_header(); ?>

  <div class="contentsection">
        <header class="mb1 t1-t6 d1-d12">
            <div class="wrapper"> 
            
            <h1>Search Results</h1>
                <ul class="headnav">
					<?php
                    if( is_page() ) {
                        if( !$post->post_parent ) {
                            //$pagelist = '<li><a href="'.get_page_link($post->ID) .'">' . $post->post_title . '</a>';
                            $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                            if( $children ) $pagelist .= '<ul>' . $children . '</ul>';
                            $pagelist .= '</li>';
                        }
                        elseif( $post->ancestors ) {
                            // get the top ID of this page. Page ids DESC so top level ID is the last one
                            $ancestor = end($post->ancestors);
                           // $pagelist = wp_list_pages('title_li=&include='.$ancestor.'&echo=0');
                            $pagelist = str_replace('</li>', '', $pagelist);
                            $pagelist .= '<ul>' . wp_list_pages('title_li=&child_of='.$ancestor.'&echo=0') .'</ul></li>';
                        }
                        echo $pagelist;
                    }
                    ?>
				</ul>
            </div>
        </header>
	</div>
    
	
    <div class="wrapper"> 
        <div class="mb1 t1-t6 d1-d12 productsblock">
        <?php if ( have_posts() ) : ?>
        <h1><?php printf( __( 'Search Results for: %s', 'incoterms' ), '' . get_search_query() . '' ); ?></h1>
		<?php
		/* Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called loop-search.php and that will be used instead.
		 */
		 get_template_part( 'loop', 'search' );
		?>
		<?php else : ?>
        
        	<h1><?php _e( 'Nothing Found', 'dean' ); ?></h1>
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'dean' ); ?></p>
		
		<?php endif; ?>
    </div>
        
</div>
  

<?php get_footer(); ?>