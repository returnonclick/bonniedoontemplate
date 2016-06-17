<div class="sidebar">

    <?php if ( !dynamic_sidebar('Sidebar') ) : ?>
    
                <div class="widget">
            <h3>Recent Guest News</h3>
            <div class="widget_body">
                <ul>
                <?php
                    query_posts(array('category_name' => 'guest-news' , 'posts_per_page' => 10));
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date"><?php the_time(__('d-m-Y')) ?></span></li>

                    <?php endwhile; endif; wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
        
        <!--div class="widget">
            <h3>Categories</h3>
            <div class="widget_body">
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
        </div-->

        <!--div class="widget">
            <h3>Guest Archives</h3>
            <div class="widget_body">
                <ul><?php wp_get_archives('type=monthly&limit=12&cat=1'); ?></ul>
            </div>
        </div-->

    <?php endif; ?>
</div>
