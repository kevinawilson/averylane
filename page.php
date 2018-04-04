<?php get_header(); ?>
    <div id="content" class="page">
        
    <?php
    $parent = wp_get_post_parent_id( $post_ID );
        
    switch ($parent) {
        case get_option( 'al_subpages_about_id' ):
            $al_banner_url = get_option( 'al_subpages_about_banner' );
            $al_banner_alt = get_option( 'al_subpages_about_alt' );
            break;
        case get_option( 'al_subpages_primary_id' ):
            $al_banner_url = get_option( 'al_subpages_primary_banner' );
            $al_banner_alt = get_option( 'al_subpages_primary_alt' );
            break;
        case get_option( 'al_subpages_therapies_id' ):
            $al_banner_url = get_option( 'al_subpages_therapies_banner' );
            $al_banner_alt = get_option( 'al_subpages_therapies_alt' );
            break;
        case get_option( 'al_subpages_admissions_id' ):
            $al_banner_url = get_option( 'al_subpages_admissions_banner' );
            $al_banner_alt = get_option( 'al_subpages_admissions_alt' );
            break;            
    }
        
    if ( $al_banner_url == '' ) {
        $al_banner_url = get_option( 'al_subpages_fallback_banner' );
        $al_banner_alt = get_option( 'al_subpages_fallback_alt' );
    } ?>
        
        <div id="three-women" class="row column hide-for-small-only"> <img class="full-image" src="<?php echo $al_banner_url; ?>" alt="<?php echo $al_banner_alt; ?>" /> </div>
        <div id="inner-content" class="row column small-10">
            <main id="main" class="small-12 medium-8 medium-push-4 columns" role="main">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'parts/loop', 'page' ); ?>
                        <?php endwhile; endif; ?>
            </main>
            <!-- end #main -->
            <?php get_sidebar(); ?>
        </div>
        <!-- end #inner-content -->
    </div>
    <!-- end #content -->
    <?php get_footer(); ?>