<?php
/*
Template Name: Insurance Submission Confirmation
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
                <div id='sidebar' class="small-12 medium-4 medium-pull-8 columns" role="complementary">
                    <h3>Phone</h3>
                    <p>800.270.2406</p>
                    <h3>Address</h3>
                    <p>505A San Marin Drive<br>
                    Suite 300<br>
                    Novato, CA 94945</p>
                </div>
            </div>
        </div> <!-- end #inner-content -->
    </div> <!-- end #content -->
    
    <script type='text/javascript'>
        function onKeyMetricComplete() {
	        km_LogData('102');
        }
    </script>
    
<?php get_footer(); ?>
