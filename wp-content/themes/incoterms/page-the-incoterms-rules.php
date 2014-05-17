<?php 
/*
	Template Name: Subpage Split Sections
*/
get_header(); ?>
<div class="background">
    <div class="wrapper">        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_sidebar(); ?>
        <section class="mb1 t3-t6 d5-d12">
            <?php 
					the_content();
				endwhile; endif;
			?>
        </section>
    </div>
</div>
<?php get_footer(); ?>
