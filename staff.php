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



<?php
$al_staff_query = "SELECT `ID` FROM `wp6o_posts` WHERE `post_parent` = '2602'";


$al_staff_posts = $wpdb->get_results($al_staff_query);

foreach ($al_staff_posts as $post_id) {

    $al_staff_meta = get_post_meta($post_id->ID);
    $al_bio = $al_staff_meta["_editorCnt_F3"][0];
    $al_bio_length = strrpos($al_bio, "<a");
    $al_bio = substr($al_bio, 0, $al_bio_length); ?>

    <div class="reveal large staff-bio" id="staff-<?php echo $post_id->ID; ?>" data-reveal>
        <img class="float-left" src="<?php echo $al_staff_meta["_imgUrlL"][0]; ?>" alt="<?php echo $al_staff_meta["_imgAlt"][0]; ?>" />
        <h2><?php echo $al_staff_meta["_mp1_F1"][0]; ?></h2>
        <h3><?php echo $al_staff_meta["_txt_F2"][0]; ?></h3>
        <p><?php echo $al_bio; ?></p>
        <p class="text-center"><a data-close aria-label="Close modal">Close</a></p>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php }; ?>
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
