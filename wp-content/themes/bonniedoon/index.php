<?php get_header(); ?>

<!-- ///////////////////////////////////
    ////////// Begin body content //////////
    //////////////////////////////////// -->

<div id="body-content" xmlns="http://www.w3.org/1999/html">



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


    <!-- Begin intro section (Parallax) -->
    <section id="section-intro" class="intro-parallax full-height">

        <!-- Element background image (parallax) -->
        <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url(<?php echo $image[0] ?>)"></div>

        <!-- Element cover -->
        <div class="cover"></div>

        <!-- Intro caption -->
        <div class="intro-caption text-white" data-stellar-ratio="0.6">
            <h1><span><?php echo $page->post_content ?></span></h1>
        </div>

        <!-- Scroll down arrow -->
        <a class="scroll-down-arrow page-scroll text-center" href="#section-1"><span class="text-white"><i class="fa fa-arrow-down"></i></span></a>

    </section>
    <!-- End intro section (Parallax) -->

<?php

    $page = get_page_by_path( 'welcome' );

    if ($page) {
        $pageId = $page->ID;
    } else {
        return null;
    }

?>

    <!-- Section 1 -->
    <section id="section-1" class="welcome bg-dark text-white">
        <div class="container">
            <div class="row">

                <div class="col-left col-md-6">
                    <div class="col-inner">

                        <!-- Begin Heading -->
                        <div class="heading heading-xlg">
                            <h1><span><?php echo $page->post_title ?></span></h1>
                        </div>
                        <!-- End Heading -->

                    </div> <!-- /.col-inner -->
                </div> <!-- /.col -->

                <div class="col-right col-md-6">
                    <div class="col-inner">

                        <p class="lead">
                            <?php echo $page->post_content ?>
                        </p>

                    </div>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


<?php

    $page = get_page_by_path( 'bonnie-doon' );

    if ($page) {
        $pageId = $page->ID;
    } else {
        return null;
    }

    if ( has_post_thumbnail ( $pageId ) ){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageId ), 'single-post-thumbnail' );
    }

?>

    <!-- Section 2 -->
    <section id="section-2" class="team split-box no-padding">
        <div class="container-fluid">
            <div class="row">

                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">

                    <div class="col-left col-lg-6 col-lg-height no-padding">
                        <!-- http://54.152.228.144/wp-content/uploads/2016/06/who-we-are.png -->
                        <img src="<?php echo $image[0] ?>" alt="image" data-stellar-ratio="0.2">
                    </div> <!-- /.col -->

                    <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span class="text-dark"><?php echo $page->post_title ?></span></h1>
                            </div>
                            <!-- End Heading -->

                            <p class="lead"><?php echo $page->post_content ?></p>
                            <br>
                            <a href="<?php echo $page->guid ?>" class="btn btn-danger btn-rounded btn-lg">Read More</a>
                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->
                </div>
                <!-- End responsive columns of same height -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


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

    if ( has_post_thumbnail($post->ID) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    }

    $url = $post->guid;

    // Get 4 services
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
                            <a href="<?php echo $url ?>" class="btn btn-transparent-white btn-rounded btn-lg">Read More</a>

                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->

                    <div class="col-right col-lg-6 col-lg-height">
                        <div class="col-inner">

                            <!-- Begin info box -->
                            <div class="info-box-wrapper text-white">
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


<?php

$page = get_page_by_path( 'functions' );

if ($page) {
    $pageId = $page->ID;
} else {
    return null;
}

if ( has_post_thumbnail ( $pageId ) ){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageId ), 'single-post-thumbnail' );
}

?>

    <!-- Section 5 -->
    <section id="section-5" class="intro-parallax full-height heading-right">

        <!-- Element background image (parallax) --> <!-- 'http://54.152.228.144/wp-content/uploads/2016/06/home-3.jpg' -->
        <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url(<?php echo $image[0] ?>);"></div>

        <!-- Element cover -->
        <div class="cover"></div>

        <!-- Intro caption -->
        <div class="intro-caption text-white" data-stellar-ratio="0.6">
            <h1><?php echo $page->post_content ?></h1>
        </div>

    </section>
    <!-- End intro section (Parallax) -->

<?php

// Get first SERVICE to show bg picture (latest roc_featured_post)
$args = array(
    'posts_per_page' => 1,
    'post_type'      => 'tournaments',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_key'       => '_roc_featured_post',
    'meta_value'     => 'checked'
);
$posts = get_posts( $args );
$post = $posts[0];

if ( has_post_thumbnail($post->ID) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
}

$url = $post->guid;

// Get 4 services
$args = array(
    'posts_per_page' => 3,
    'post_type'      => 'tournaments',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_key'       => '_roc_featured_post',
    'meta_value'     => false ,
);
$services = get_posts( $args );

?>

    <!-- Section 6 -->
    <section id="section-6" class="tournaments split-box no-padding">
        <div class="container-fluid">
            <div class="row">

                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">

                    <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span class="text-dark"><?php echo $post->post_title; ?></span></h1>
                            </div>
                            <!-- End Heading -->

                            <p class="lead"><?php echo $post->post_excerpt; ?></p>
                            <br>
                            <a href="<?php echo $url ?>" class="btn btn-danger btn-rounded btn-lg">Read More</a>
                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->


                    <div class="col-left col-lg-6 col-lg-height no-padding">


                        <div class="col-inner">

                            <!-- Begin info box -->
                            <div class="info-box-wrapper">
                                <div class="row">
                                    <?php
                                        foreach ( $services as $service ){
                                        $service_meta = get_post_meta( $service->ID , '' , true);
                                    ?>
                                    <!-- info box 1 -->
                                    <div class="col col-sm-12 col-lg-12">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="fa fa-trophy"></i></span>
                                            <div class="info-box-heading">
                                                <h3><?php echo $service->post_title; ?></h3>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="info-box-info">
                                                <p><?php echo $service->post_excerpt; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                   <?php
                                        }
                                    ?>

                                </div>
                            </div>


                        </div> <!-- /.col -->


                    </div>
                    <!-- End responsive columns of same height -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
    </section>

<?php

$page = get_page_by_path( 'contact-us' );

if ($page) {
    $pageId = $page->ID;
} else {
    return null;
}

if ( has_post_thumbnail ( $pageId ) ){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageId ), 'single-post-thumbnail' );
}

?>

    <!-- Section 7 -->
    <section id="section-7" class="page contact-section bg-dark text-white bg-image" style="background-image: url(<?php echo $image[0] ?>);">

        <!-- Element cover -->
        <div class="cover"></div>

        <div class="container-fluid">
            <div class="row">
                <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                <div class="row-same-height">


                    <div class="col-left col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading -->
                            <div class="heading heading-xlg">
                                <h1><span><?php echo $page->post_title ?></span></h1>
                            </div>
                            <!-- End Heading -->

                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->



                    <div class="col-right col-md-6">
                        <div class="col-inner">

                            <?php echo $page->post_content ?>

                            <!-- Socials icons (replace "http://link.com" widh your own link) -->
                            <div class="social-icons">
                                <a href="https://www.facebook.com/bonniedoongolfclub/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/bonniedoongc?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://plus.google.com/110878698359176171947" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                            
                        </div> <!-- /.col-inner -->
                    </div> <!-- /.col -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

<?php get_footer(); ?>