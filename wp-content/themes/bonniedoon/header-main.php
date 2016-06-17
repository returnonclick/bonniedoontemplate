<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php bloginfo('text_direction'); ?>" xml:lang="<?php bloginfo('language'); ?>">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php
                global $page, $paged;
                wp_title('|', true, 'right');
                bloginfo('name');
                $site_description = get_bloginfo('description', 'display');
                if ( $site_description && ( is_home() || is_front_page()))
                    echo " | $site_description";
                if ($paged >= 2 || $page >= 2)
                    echo ' | ' . sprintf( __('Page %s'), max($paged, $page));
            ?>
        </title>
        <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.ico" type="image/x-icon" />

        <!-- Libs and Plugins CSS -->
        <link rel="stylesheet" href="/roc_theme/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (more info: http://getbootstrap.com) -->
        <link rel="stylesheet" href="/roc_theme/font-awesome/css/font-awesome.min.css"> <!-- Font Icons (more info: http://fortawesome.github.io/Font-Awesome) -->





        <!-- Theme navigation menu CSS (more info: http://codyhouse.co/gem/secondary-expandable-navigation) -->
        <link rel="stylesheet" href="/roc_theme/css/menu.css">

        <!-- Theme helper classes CSS -->
        <link rel="stylesheet" href="/roc_theme/css/helper.css">

        <!-- Theme master CSS -->
        <link rel="stylesheet" href="/roc_theme/css/theme.css">

        <!-- Theme custom CSS (all your CSS customizations) -->
        <link rel="stylesheet" href="/roc_theme/css/custom.css">

        <!--
        <link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo('stylesheet_url'); ?>" />

        <!--

        <link rel="stylesheet" type="text/css" media="all" href="/style/p7pmh0.css" />
        <link rel="stylesheet" href="/style/custom.css" type="text/css">
        <link rel="stylesheet" href="/style/portal.css" type="text/css">
        <script src="/scripts/p7popmenu.js" type="text/javascript"></script>
		<script src="/scripts/newslightFade.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo('template_url'); ?>/pagenavi-css.css" />
        -->

        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/ie.css" /><![endif]-->

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

        <?php
        /*
			wp_enqueue_script('jquery');
			wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/jquery.lazyload.mini.js', 'jquery', false);
            wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
        */
		?>

        <?php wp_head(); ?>
	</head>
	<body>

    <!-- Page preloader (display loading animation while page loads) -->
    <div id="preloader"><div class="pulse"></div></div>

    <!-- Begin page borders -->
    <div class="border-top"></div>
    <div class="border-bottom"></div>
    <div class="border-left"></div>
    <div class="border-right"></div>
    <!-- End page borders -->




    <!-- /////////////////////////////
        ////////// Begin header //////////
        ////////////////////////////// -->

    <header class="is-fixed">

        <a id="cd-logo" href="index.html">
            <img src="/images/roc_theme/bngc-logo.png" alt="image">
        </a>

        <nav id="cd-top-nav">
            <!-- <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#0">Register</a></li>
                <li><a href="#0">Login</a></li>
            </ul> -->
        </nav>

        <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a>


    </header>

    <div id="member-phone-row" class="row">

                <div class="pull-right col-inner">


                    <?php if ( is_user_logged_in() ) { ?>

                        <a href="/members/" class="members-login"><i class="fa fa-user-times"></i>Member Logout</a>

                    <?php } else { ?>

                        <a href="/members/" class="members-login"><i class="fa fa-user"></i>Member Login</a>

                    <?php } ?>

                    <a href="#0" class="phone"><i class="fa fa-phone"></i>02 9349 0121</a>
                </div>
            </div>
        </div>





        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////
        ////////// Begin menu  (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) //////////
        /////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <nav id="cd-lateral-nav">

            <div class="nav-inner">

                <!-- menu header -->
                <div class="menu-header">Menu</div>

                <?php  //include ('menu.php'); ?>

                <!-- Begin single links wrapper -->
                <ul class="cd-navigation cd-single-item-wrapper">
                    <li><a href="#section-intro" class="page-scroll">Home</a></li>
                    <li><a href="#section-1" class="page-scroll">The Concept</a></li>
                    <li><a href="#section-2" class="page-scroll">About Us</a></li>
                    <li><a href="#section-3" class="page-scroll">Jono Harvey</a></li>
                    <li><a href="#section-4" class="page-scroll">Luxe Singapore</a></li>

                    <li><a href="#section-5" class="page-scroll">Woollahra</a></li>
                    <li><a href="#section-6" class="page-scroll">Bondi Junction</a></li>
                    <li><a href="#section-7" class="page-scroll">Miranda</a></li>
                    <li><a href="#section-8" class="page-scroll">Barangaroo</a></li>
                    <li><a href="#section-9" class="page-scroll">Bakery</a></li>

                    <li><a href="#section-10" class="page-scroll">Licensed Stores</a></li>
                    <li><a href="#section-11" class="page-scroll">Opportunities</a></li>
                    <li><a href="#section-12" class="page-scroll">ACME Concept</a></li>
                    <li><a href="#section-13" class="page-scroll">Victoria Designer</a></li>
                    <li><a href="#section-14" class="page-scroll">Hotel Concept</a></li>

                    <li><a href="#section-last" class="page-scroll">Contact</a></li>



                    <li class="menu-separator"></li>

                    <li><a href="index.html">Parallax Intro</a></li>
                    <li><a href="slideshow-intro.html">Slideshow Intro</a></li>
                    <li><a href="video-intro.html">Youtube Video Intro</a></li>
                    <li><a href="404.html">404 Error Page</a></li>


                </ul>
                <!-- End single links wrapper -->

                <div class="menu-separator"></div>

                <!-- Begin links with sub menu -->
                <ul class="cd-navigation">

                    <!-- item has children -->
                    <li class="item-has-children">
                        <a href="#0">Sub Menu</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Link 1</a></li>
                            <li><a href="#">Sub Link 2</a></li>
                            <li><a href="#">Sub Link 3</a></li>
                        </ul>
                    </li>

                    <!-- item has children -->
                    <li class="item-has-children">
                        <a href="#0">Another Sub Menu</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Link 1</a></li>
                            <li><a href="#">Sub Link 2</a></li>
                        </ul>
                    </li>

                    <!-- item has children -->
                    <li class="item-has-children">
                        <a href="#0">Third Sub Menu</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sub Link 1</a></li>
                            <li><a href="#">Sub Link 2</a></li>
                            <li><a href="#">Sub Link 3</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- End links with sub menu -->

                <!-- Socials icons (replace "http://link.com" widh your own link) -->
                <div class="social-icons">
                    <a href="https://www.facebook.com/themetorium" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://twitter.com/Themetorium" target="_blank"><i class="fa fa-twitter-square"></i></a>
                    <a href="https://plus.google.com/u/0/113335961768782000316/posts" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                    <a href="https://www.linkedin.com/in/themetorium" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                </div>

            </div>

        </nav>

        <!-- /////////////////////////
        ////////// End menu //////////
        ////////////////////////// -->


    <!-- ///////////////////////////////////
        ////////// Begin body content //////////
        //////////////////////////////////// -->

    <div id="body-content">

        <!-- Begin intro section (Parallax) -->
        <section id="section-intro" class="intro-parallax full-height">

            <!-- Element background image (parallax) -->
            <div class="full-cover bg-image" data-stellar-ratio="0.2" style="background-image: url('/roc_theme/imgs/main-image.jpg')"></div>

            <!-- Element cover -->
            <div class="cover"></div>

            <!-- Intro caption -->
            <div class="intro-caption text-white" data-stellar-ratio="0.6">

            </div>

            <!-- Scroll down arrow -->
            <a class="scroll-down-arrow page-scroll text-center" href="#section-3"><span class="text-white"><i class="fa fa-arrow-down"></i></span></a>

        </section>
        <!-- End intro section (Parallax) -->


        <!-- Section 3 -->
        <section id="section-3" class="work split-box bg-image" style="background-image: url('/roc_theme/imgs/our-work.jpg')">

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
                                    <h1><span class="text-white">What We Do</span></h1>
                                </div>
                                <!-- End Heading -->

                                <p class="lead">Cras elementum, lacus nec egestas ultrices, felis purus lacinia ante,
                                    sollicitudin viverra ex eros ac elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Ut sagittis elit odio, a ultrices dolor dignissim eu.</p>

                                <br>
                                <a href="#" class="btn btn-white btn-rounded btn-lg">Read More</a>

                            </div> <!-- /.col-inner -->
                        </div> <!-- /.col -->

                        <div class="col-right col-lg-6 col-lg-height">
                            <div class="col-inner">

                                <!-- Begin info box -->
                                <div class="info-box-wrapper">
                                    <div class="row">

                                        <!-- info box 1 -->
                                        <div class="col col-sm-6 col-lg-6">
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
                                        </div>

                                        <!-- info box 2 -->
                                        <div class="col col-sm-6 col-lg-6">
                                            <div class="info-box">
                                                <span class="info-box-icon"><i class="fa fa-heart-o"></i></span>
                                                <div class="info-box-heading">
                                                    <h3>Weddings</h3>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="info-box-info">
                                                    <p>Weddings venues in Sydney and the Eastern Suburbs come in all shapes and sizes, but we know that when you have your wedding at Bonnie Doon Golf Club it will be the perfect fit. </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- info box 3 -->
                                        <div class="col col-sm-6 col-lg-6">
                                            <div class="info-box">
                                                <span class="info-box-icon"><i class="fa fa-flag-o"></i></span>
                                                <div class="info-box-heading">
                                                    <h3>Corporate Golf</h3>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="info-box-info">
                                                    <p>Corporate Memberships are available at Bonnie Doon Golf Club and includes the following benefits.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- info box 4 -->
                                        <div class="col col-sm-6 col-lg-6">
                                            <div class="info-box">
                                                <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>
                                                <div class="info-box-heading">
                                                    <h3>Courses</h3>
                                                    <div class="divider"></div>
                                                </div>
                                                <div class="info-box-info">
                                                    <p>Our design at Bonnie Doon looks to mimic the work of nature, with a mixture of irregular undulations, wispy roughs and rugged bunker lips that appear to have been formed from years of wind and rain.</p>
                                                </div>
                                            </div>
                                        </div>

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


        <!-- Section 1 -->
        <!--
        <section id="section-1" class="welcome bg-dark text-white">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-left col-lg-6 col-lg-height col-middle no-padding">
                        <div class="col-inner">

                            <!-- Begin Heading
                            <div class="heading heading-xlg">
                                <h1><span class="text-white">Boonie Doon</span></h1>
                            </div>
                            <!-- End Heading

                        </div> <!-- /.col-inner
                    </div> <!-- /.col

                    <div class="col-right col-md-6 col-lg-6 col-lg-height col-middle">
                        <div class="col-inner">

                            <p class="lead">
                                Founded in 1897, Bonnie Doon is considered one of Sydney's best golf courses.  It is the city's third-oldest golf club and one of the oldest in Australia. Located only 15 minutes from the city and five minutes from Sydney's international airport, the golf course at Bonnie Doon enjoys championship and Group One status. Slick greens, many with pronounced undulations, have long been recognised as among the best putting surfaces in NSW. Elevated tees and greens with sweeping views of the city are key features of the course design, as are the sand hills which bring unique challenges to many of the holes.
                            </p>

                        </div>
                    </div> <!-- /.col

                </div> <!-- /.row
            </div> <!-- /.container
        </section>

        <!-- Section 2 -->
        <section id="section-2" class="team split-box no-padding">
            <div class="container-fluid">
                <div class="row">

                    <!-- Begin responsive columns of same height (more info: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height) -->
                    <div class="row-same-height">

                        <div class="col-left col-lg-6 col-lg-height no-padding">
                            <img src="/roc_theme/imgs/who-we-are.png" alt="image" data-stellar-ratio="0.2">
                        </div> <!-- /.col -->

                        <div class="col-right col-lg-6 col-lg-height col-middle no-padding">
                            <div class="col-inner">

                                <!-- Begin Heading -->
                                <div class="heading heading-xlg">
                                    <h1><span class="text-dark">Founded in 1897</span></h1>
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


<div id="containerF">
    
<div id="mainAreaFull">


