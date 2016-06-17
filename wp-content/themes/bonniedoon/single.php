<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
            <div class="post_meta">
                <h2><a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__('Permalink to %s'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="post_data">
<p>Published on <?php the_time(__('jS F Y')) ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?> 
</p>
                </div>
            </div>
            <div class="post_content">
                <?php the_content(); ?>
            </div>
                    </div>
							<?php endwhile; ?>
				
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>




<?php get_sidebar(); ?>

<?php get_footer(); ?>