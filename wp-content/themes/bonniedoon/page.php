<?php get_header(); ?>
<?php
$page = get_page_by_path( 'home' );

if ($page) {
    $pageId = $page->ID;
} else {
    return null;
}

if ( has_post_thumbnail ( $pageId ) ){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageId ), 'single-post-thumbnail' );
}
?>


    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

       <!-- Begin intro section (Parallax) -->
        <section id="section-intro" class="intro-parallax half-height">

            <!-- Element background image (parallax) -->
            <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url(<?php echo $image[0] ?>)"></div>

            <!-- Element cover -->
            <div class="cover"></div>

            <!-- Intro caption -->
            <div class="intro-caption text-white" data-stellar-ratio="0.6">
                <h1><span></span></h1>
            </div>

        </section>
        <!-- End intro section (Parallax) -->

        <!-- Section 2 -->
        <section id="section-page" class="team split-box no-padding">
            <div class="container-fluid">
                <div class="row">

                    <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                    <div class="row-same-height">

                        <div class="col-left col-lg-6 col-lg-height no-padding">
                            <!-- http://54.152.228.144/wp-content/uploads/2016/06/who-we-are.png -->
                            <div class="col-inner">

                                <!-- Begin Heading -->
                                <div class="heading heading-xlg">
                                    <h1><span class="text-dark"><?php the_title() ?></span></h1>
                                </div>
                                <!-- End Heading -->
                           </div>
                        </div> <!-- /.col -->

                        <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                            <div class="col-inner">
                                <p class="lead"><?php the_content(); ?></p>
                                <p>Published on <?php the_time(__('jS F Y')) ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>
                                </p>
                            </div> <!-- /.col-inner -->
                        </div> <!-- /.col -->
                    </div>
                    <!-- End responsive columns of same height -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>

    <?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_sidebar(); ?>

</div></div>
<?php get_footer(); ?>