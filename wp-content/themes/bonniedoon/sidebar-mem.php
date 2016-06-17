<div class="sidebar">
<?php if (current_user_can( 'delete_others_posts' )) {?>
   <div class="post-button"> <a href="<?php bloginfo("url")?>/wp-admin/post-new.php"><?php _e(' Add New Post', ''); ?></a></div>
    <?php } ?>

    <?php if ( !dynamic_sidebar('Sidebar') ) : ?>
    
                <div class="widget">
            <h3>Recent News</h3>
            <div class="widget_body">
                <ul>
                <?php
                    query_posts(array('posts_per_page' => 5));
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date"><?php the_time(__('d-m-Y')) ?></span></li>

                    <?php endwhile; endif; wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
        

        <div class="widget">
            <h3>Member Archives</h3>
            <div class="widget_body">
                <ul><?php wp_get_archives('type=monthly&limit=12'); ?></ul>
            </div>
        </div>

    <?php endif; ?>
</div>
