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

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.ico" type="image/x-icon" />

    <!-- Google fonts - (more info: https://www.google.com/fonts) -->
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Libs and Plugins CSS -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (more info: http://getbootstrap.com) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css"> <!-- Font Icons (more info: http://fortawesome.github.io/Font-Awesome) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/magnific-popup/css/magnific-popup.css"> <!-- Magnific Popup CSS (more info: http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/css/owl.carousel.css"> <!-- owl carousel CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/css/owl.carousel.plugins.css"> <!-- owl carousel plugins CSS (more info: http://www.owlcarousel.owlgraphic.com) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl-carousel/css/owl.theme.default.css"> <!-- owl carousel theme CSS (more info: http://www.owlcarousel.owlgraphic.com) -->

    <!-- Theme navigation menu CSS (more info: http://codyhouse.co/gem/secondary-expandable-navigation) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css">

    <!-- Theme helper classes CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/helper.css">

    <!-- Theme master CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">

    <!-- Theme custom CSS (all your CSS customizations) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <?php
    
    // Display the Custom Logo
    bonniedoon_the_custom_logo();

    // No Custom Logo, just display the site's name
    if (!has_custom_logo()) {
        ?>
        <h1><?php bloginfo('name'); ?></h1>
        <?php
    }


    ?>

    <?php include ('menu.php'); ?>

    <nav id="cd-top-nav">
        <ul>
            <li><i class="fa fa-user"></i><?php wp_loginout(); ?></li>
            <li><a href="tel:0293490121"><i class="fa fa-phone"></i>02 9349 0121</a></li>
        </ul>
    </nav>


</header>

<!-- /////////////////////////////
////////// End header //////////
////////////////////////////// -->