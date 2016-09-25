<?php get_header(); ?>

<!-- ///////////////////////////////////
    ////////// Begin body content //////////
    //////////////////////////////////// -->

<div id="body-content">



<?php

    $page = get_page_by_path( 'home' );

    $pageId = get_page_link ( $page->ID );

    if ( has_post_thumbnail ( $page->ID ) ) :

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );

?>


    <!-- Begin intro section (Parallax) -->
    <section id="section-intro" class="intro-parallax full-height">

        <!-- Element background image (parallax) -->
        <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url(<?php echo $image[0] ?>)"></div>

        <!-- Element cover -->
        <div class="cover"></div>

        <!-- Intro caption -->
        <div class="intro-caption text-white" data-stellar-ratio="0.6">
            <?php echo the_content(); ?>
        </div>

        <!-- Scroll down arrow -->
        <a class="scroll-down-arrow page-scroll text-center" href="#section-3"><span class="text-white"><i class="fa fa-arrow-down"></i></span></a>

    </section>
    <!-- End intro section (Parallax) -->

<?php
    endif;
?>



    <?php

    // Get first SERVICE to show bg picture (latest roc_featured_post)
    $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'services',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_key'       => '_roc_featured_post',
        'meta_value'     => 'checked' 
    );
    $posts = get_posts( $args );
    $post = $posts[0];

<<<<<<< Updated upstream
    if ( has_post_thumbnail($post->ID) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    }

    $url = $post->guid;



    // Get other 4 SERVICEs 
    $args = array(
        'posts_per_page' => 4,
        'post_type'      => 'services',
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_key'       => '_roc_featured_post',
        'meta_value'     => false ,
    );
    $services = get_posts( $args );
=======
    $post = get_posts( $args );

    $checked = get_post_meta( $post[0]->ID, '_roc_featured_post', true );

    if ( has_post_thumbnail($post[0]->ID) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post[0]->ID ), 'single-post-thumbnail' );
    }
>>>>>>> Stashed changes


    ?>




    <!-- Section 3 -->
    <section id="section-3" class="work split-box bg-image" style="background-image: url('<?php echo $image[0] ?>')">

        <!-- element cover -->
        <div class="cover"></div>

        <div class="container-fluid text-white">
            <div class="row">

                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">

                    <div class="col-left col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span class="text-white"><?php echo $post->post_title; ?></span></h1>
                            </div>
                            <!-- End Heading -->

                            <p class="lead"><?php echo $post->post_excerpt; ?></p>

                            <br>
                            <a href="<?php echo $url ?>" class="btn btn-transparent-white btn-lg">Read More</a>

                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->

                    <div class="col-right col-lg-6 col-lg-height">
                        <div class="col-inner">

                            <!-- Begin info box -->
                            <div class="info-box-wrapper">
                                <div class="row">
                                <?php
                                    foreach ( $services as $service ){
                                        $service_meta = get_post_meta( $service->ID , '' , true);

                                        ?>
                                        <div class="col col-sm-6 col-lg-6">
                                            <a href="<?php echo $service->guid ?>" >
                                                <div class="info-box">
                                                    <span class="info-box-icon"><i class="fa <?php echo $service_meta['_roc_icon'][0] ?>"></i></span>
                                                    <div class="info-box-heading">
                                                        <h3><?php echo $service->post_title; ?></h3>
                                                        <div class="divider"></div>
                                                    </div>
                                                    <div class="info-box-info">
                                                        <p><?php echo $service->post_excerpt; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <?php

                                    }


                                ?>
                                    <!-- info box 1 -->
                                    <!-- <div class="col col-sm-6 col-lg-6">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Membership</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Bonnie Doon currently has reduced joining fees and annual subscriptions for prospective members under the age of 40.</p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- info box 2 -->
                                    <!-- <div class="col col-sm-6 col-lg-6">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Weddings</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>We know that when you have your wedding at Bonnie Doon Golf Club it will be the perfect fit for you. </p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- info box 3 -->
                                    <!-- <div class="col col-sm-6 col-lg-6">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-flag-o"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Corporate</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Corporate Memberships are available at Bonnie Doon Golf Club and includes the following benefits.</p>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- info box 4 -->
                                    <!-- <div class="col col-sm-6 col-lg-6">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Course</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Bonnie Doon mimics the work of nature, with a mixture of irregular undulations, wispy roughs and rugged bunker.</p>
                                            </div>
                                        </div>
                                    </div> -->

                                </div> <!-- /.row -->
                            </div>
                            <!-- End info box -->

                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->
                </div>
                <!-- End responsive columns of same height -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>




    <!-- Section 2 -->
    <section id="section-2" class="team split-box no-padding">
        <div class="container-fluid">
            <div class="row">

                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">

                    <div class="col-left col-lg-6 col-lg-height no-padding">
                        <!-- http://54.152.228.144/wp-content/uploads/2016/06/who-we-are.png -->
                        <img src="" alt="image" data-stellar-ratio="0.2">
                    </div> <!-- /.col -->

                    <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span class="text-dark">Bonnie Doon</span></h1>
                            </div>
                            <!-- End Heading -->

                            <p class="lead">Founded in 1897, Bonnie Doon is considered one of Sydney’s best golf courses.
                                It is the city’s third-oldest golf club and one of the oldest in Australia.
                                Located only 15 minutes from the city and five minutes from Sydney’s international airport,
                                the golf course at Bonnie Doon enjoys championship and Group One status.</p>
                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->
                </div>
                <!-- End responsive columns of same height -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>





<?php

$args = array(
    'posts_per_page' => 1,
    'post_type' => 'testimonials',
    'post_status' => 'publish'
);

$post = get_posts( $args );

if ( has_post_thumbnail($post[0]->ID) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post[0]->ID ), 'single-post-thumbnail' );
}

$url = $post[0]->guid;

?>




    <section id="section-3" class="welcome bg-dark text-white">
        <div class="container-fluid">
            <div class="row">

                <div class="col-left col-lg-6 col-lg-height col-middle no-padding">
                    <div class="col-inner">

                        <!-- Begin Heading -->
                        <div class="heading heading-xlg">
                            <h1><span class="text-white">Testimonials</span></h1>
                        </div>
                        <!-- End Heading -->

                    </div> <!-- /.col-inner -->
                </div> <!-- /.col -->

                <div class="col-right col-md-6 col-lg-6 col-lg-height col-middle">
                    <div class="col-inner">

                        <p class="lead">
                            <?php echo $post[0]->post_excerpt; ?>
                        </p>

                    </div>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <!-- Finish Section 1 -->



    <!-- Begin intro section (Parallax) -->
    <section id="section-4" class="intro-parallax full-height">

        <!-- Element background image (parallax) --> <!-- 'http://54.152.228.144/wp-content/uploads/2016/06/home-3.jpg' -->
        <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url();"></div>

        <!-- Element cover -->
        <!-- <div class="cover"></div> -->

        <!-- Intro caption -->
        <div class="intro-caption text-white" data-stellar-ratio="0.6">
            <h1>Weddings and<br>
                Functions<br>
                Bonnie Doon<br>
                Golf Club
            </h1>
        </div>

    </section>
    <!-- End intro section (Parallax) -->


<?php

/*
    $args = array(
        'posts_per_page' => 1,
        'post_type' => 'services',
        'post_status' => 'publish'
    );

    $show_main_service = get_posts( $args );



    if( $show_main_service ) {
        echo 'ID on the first post found ' . $show_main_service[0]->ID;
    }


    if (class_exists('MultiPostThumbnails')) {
        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
    } else {
        echo 'POST type ' . get_post_type($show_main_service[0]->ID);
    }
*/


?>








    <!-- Section 4 -->
    <section id="section-4" class="tournaments split-box no-padding">
        <div class="container-fluid">
            <div class="row">

                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">

                    <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span class="text-dark">Our Tournaments</span></h1>
                            </div>
                            <!-- End Heading -->

                            <p class="lead">Founded in 1897, Bonnie Doon is considered one of Sydney’s best golf courses.
                                It is the city’s third-oldest golf club and one of the oldest in Australia.
                                Located only 15 minutes from the city and five minutes from Sydney’s international airport,
                                the golf course at Bonnie Doon enjoys championship and Group One status.</p>
                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->


                    <div class="col-left col-lg-6 col-lg-height no-padding">


                        <div class="col-inner">

                            <!-- Begin info box -->
                            <div class="info-box-wrapper">
                                <div class="row">

                                    <!-- info box 1 -->
                                    <div class="col col-sm-12 col-lg-12">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Bonnie Doon Open Amateur</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Bonnie Doon currently has reduced joining fees and annual subscriptions for prospective members under the age of 40.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- info box 2 -->
                                    <div class="col col-sm-12 col-lg-12">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Bonnie Doon Senior Amateur</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Bonnie Doon currently has reduced joining fees and annual subscriptions for prospective members under the age of 40.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- info box 3 -->
                                    <div class="col col-sm-12 col-lg-12">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                                            <div class="info-box-heading">
                                                <h3>Bonnie Doon Junior Open</h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p>Bonnie Doon currently has reduced joining fees and annual subscriptions for prospective members under the age of 40.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div> <!-- /.col -->


                    </div>
                    <!-- End responsive columns of same height -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
    </section>


    

<?php //get_header(); ?>

    <?php //get_template_part('loop'); ?>

    <?php //get_template_part('pagination'); ?>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>