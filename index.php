<?php get_header(); ?>
<h1 class="position-off">Avery Lane</h1>
<?php query_posts('post_type=home&posts_per_page=1');?>
<?php if (have_posts()) :  while  (have_posts()) : the_post(); ?>
    <div id="content">
        <div id="inner-content" class="row">
            <main id="main" class="medium-12 columns" role="main">
                <div id="three-women" class="row column"> <img class="full-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/three-women.jpg" /> </div>
                <div id="tag-line-area" class="row red-block">
                    <div class="column small-10 medium-8 large-6 small-centered">
                        <p class="tag-line"><?php echo get_option( 'al_tagline_first' ); ?></p>
                        <p class="second-tag-line"><?php echo get_option( 'al_tagline_second' ); ?></p>
                    </div>
                </div>
                <div class="row white-block">
                    <div class="column small-10 medium-8 small-centered">
                        <h2><?php echo rwmb_meta('al_intro_header');?></h2>
                        <?php echo rwmb_meta('al_intro_text');?>
                    </div>
                </div>
                <div id="flower-decoration-1" class="row column show-for-medium"> </div>
                <div id="four-fold-passage" class="row">
                    <div class="column small-10 small-centered medium-6 large-4 medium-offset-1">
                        <h2><?php echo rwmb_meta('al_first_box_header');?></h2>
                        <?php echo rwmb_meta('al_first_box_text');?>
                        <p class="text-center read-more"><a href="<?php echo rwmb_meta('al_first_box_link');?>">Read More</a></p>
                    </div>
                </div>
                <div class="row white-block">
                    <div class="columns hide-for-small-only medium-4 medium-offset-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hands.jpg"/>
                    </div>
                    <div class="columns small-10 small-offset-1 medium-5 end">
                        <h2><?php echo rwmb_meta('al_second_box_header');?></h2>
                        <?php echo rwmb_meta('al_second_box_text');?>
                        <p class="text-center read-more"><a href="<?php echo rwmb_meta('al_second_box_link');?>">Read More</a></p>
                    </div>
                </div>
                <div id="flower-decoration-2" class="row column show-for-medium"> </div>
                <div class="row home-video">
                    <div class="columns"></div>
                </div>
                <div class="row insurance red-block">
                    <div class="columns small-10 small-offset-1 text-center">
                        <p><?php echo get_option( 'al_insurance'); ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insurance-logos.png">
                    </div>
                </div>
            </main>
            <!-- end #main -->
        </div>
        <!-- end #inner-content -->
    </div>
    <!-- end #content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
