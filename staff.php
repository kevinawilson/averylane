<?php
/*
Template Name: Staff Page
*/
?>

<?php get_header(); ?>

<?php 
    $al_banner_url = get_option( 'al_subpages_about_banner' );
    $al_banner_alt = get_option( 'al_subpages_about_alt' );
?>

    <div id="content" class="page">
    <div id="three-women" class="row column hide-for-small-only"> <img class="full-image" src="<?php echo $al_banner_url; ?>" alt="<?php echo $al_banner_alt; ?>" /> </div>
        <div id="inner-content" class="row column small-10 small-centered">

            <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
