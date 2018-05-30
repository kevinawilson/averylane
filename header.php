<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <!-- If Site Icon isn't set in customizer -->
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
        <!-- Icons & Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--[if IE]>
		  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
        <![endif]-->
        <?php } ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700|Raleway:700" rel="stylesheet">
            <script type="application/ld+json"> { "@context": "http://schema.org/", "@type": "MedicalBusiness", "name": "Avery Lane", "url": "http://www.averylanewomensrehab.com", "telephone": "800-270-2406", "description": "Avery Lane is an innovative San Francisco Bay Area substance abuse and dual-diagnosis treatment program designed specifically for women by women. Our primary goal is to create an environment where the staff and clients work together and grow together, forming a treatment community. We strive to end the cycle of addiction by accepting female clients who have been through multiple treatment programs and/or experienced multiple relapses, getting to the root of the substance abuse, and helping create a new life surrounded by recovery and healing.", "logo": "http://www.averylanewomensrehab.com/wp-content/themes/Avery-Lane/assets/images/logo.png", "openingHours": "Mo-Su", "founder": { "@type": "Person", "name": "Camille Hildebrand", "email": "camille@averylaneforwomen.com", "jobTitle": "Founder & Chief Executive Officer" }, "location": { "@type": "PostalAddress", "addressCountry": "US", "addressRegion": "CA", "addressLocality": "Novato", "postalCode": "94945", "streetAddress": "505A San Marin Drive" }, "makesOffer": { "@type": "Offer", "itemOffered": { "@type": "Service", "serviceType": [ "Residential Program", "Addiction Treatment" ], "additionalType": "http://www.productontology.org/id/Drug_rehabilitation", "audience": { "@type": "MedicalAudience", "requiredGender": "female" } } }, "isicV4": "8610", "naics": "621420" } </script>
            <?php wp_head(); ?>
                <!-- Drop Google Analytics here -->
                <script>
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-92105519-1', 'auto');
                    ga('send', 'pageview');
                </script>
                <!-- end analytics -->
</head>
<!-- Uncomment this line if using the Off-Canvas Menu -->

<body <?php body_class(); ?>>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <?php get_template_part( 'parts/content', 'offcanvas' ); ?>
                <div class="off-canvas-content" data-off-canvas-content>
                    <header class="header" role="banner">
                        <!-- This navs will be applied to the topbar, above all content
							  To see additional nav styles, visit the /parts directory -->
                        <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

                            <nav id="main-nav" class="large-10 hide-for-small show-for-large large-centered">
                              <div class="row">
                              <div class="column large-4">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>
                              </div>
                              <div class="column large-8">
                                <div class="row hide-for-small-only header-menu">
                                    <!--<?php wp_nav_menu( ['menu' => 'Top' ] ); ?>-->
                                        <div class="header-phone">
                                          <div class="phone">
                                            800-262-4271
                                          </div>
                                          <div class="help">
                                            We can help today
                                          </div>
                                        </div>
                                </div>
                                <?php joints_top_nav(); ?>
                              </div>
                            </div>
                            </nav>
                    </header>
                    <!-- end .header -->
