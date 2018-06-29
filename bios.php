<?php
/*
Template Name: Staff Bios
*/
?>

<?php get_header(); ?>
    <div id="content" class="page">
        <div id="inner-content" class="row column small-10 small-centered">
            <div class="row">
                <main id="main" class="small-12 medium-8 medium-push-4 columns" role="main">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'parts/loop', 'page' ); ?>
                    <?php endwhile; endif; ?>
                </main> <!-- end #main -->
                <div id='sidebar' class="small-12 medium-4 medium-pull-8 columns">
                </div>
            </div>
        </div> <!-- end #inner-content -->
    </div> <!-- end #content -->
<?php get_footer(); ?>
