<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

// Register custom post types
require_once(get_template_directory() . '/assets/functions/custom-post-type.php');

$keymetric_script = 'http://www.averylanewomensrehab.com/wp-content/themes/AveryLane/assets/js/keymetric.js';
$deps = array();

//wp_enqueue_script( 'keymetric', $keymetric_script, $deps, false, true );

/********************* META-BOX ***********************/

$prefix = "al_";

// ---------  Homepage  ---------

// Introduction
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'intro',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Introduction',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'home' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Header',
			'desc'		=> "Add header",
			'id'		=> "{$prefix}intro_header",
			'type'		=> 'textarea'
		),
        array(
			'name'		=> 'Text',
			'desc'		=> "Add content here",
			'id'		=> "{$prefix}intro_text",
			'type'		=> 'wysiwyg',
			'cols'		=> "40",
			'rows'		=> "8"
		),
        array(
			'name'		=> 'Link',
			'desc'		=> "Add link to additional content",
			'id'		=> "{$prefix}intro_link",
			'type'		=> 'textarea'
		)
	)
);

// First Box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'first_box',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'First Box',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'home' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Header',
			'desc'		=> "Add header",
			'id'		=> "{$prefix}first_box_header",
			'type'		=> 'textarea'
		),
        array(
			'name'		=> 'Text',
			'desc'		=> "Add content here",
			'id'		=> "{$prefix}first_box_text",
			'type'		=> 'wysiwyg',
			'cols'		=> "40",
			'rows'		=> "8"
		),
        array(
			'name'		=> 'Link',
			'desc'		=> "Add link to additional content",
			'id'		=> "{$prefix}first_box_link",
			'type'		=> 'textarea'
		)
	)
);

// Second Box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'second_box',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'Second Box',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'home' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'		=> 'Header',
			'desc'		=> "Add header",
			'id'		=> "{$prefix}second_box_header",
			'type'		=> 'textarea'
		),
        array(
			'name'		=> 'Text',
			'desc'		=> "Add content here",
			'id'		=> "{$prefix}second_box_text",
			'type'		=> 'wysiwyg',
			'cols'		=> "40",
			'rows'		=> "8"
		),
        array(
			'name'		=> 'Link',
			'desc'		=> "Add link to additional content",
			'id'		=> "{$prefix}second_box_link",
			'type'		=> 'textarea'
		)
	)
);


// Register meta boxes

function al_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there are no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.

add_action( 'admin_init', 'al_register_meta_boxes' );


/********************* SITE SETTINGS PAGE ***********************/

add_action( 'admin_menu', 'al_add_site_settings' );

function al_add_site_settings() {
    $page_title = 'Avery Lane Settings';
    $menu_title = 'Site Settings';
    $capability = 'manage_options';
    $menu_slug = 'al_site_settings';
    $page_creation_function = 'al_settings_menu';

    add_options_page( $page_title, $menu_title, $capability, $menu_slug, $page_creation_function);
}

function al_settings_menu() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

?>
    <div class="wrap">
        <h2>Avery Lane Settings</h2>
        <form action="options.php" method="post">
            <?php settings_fields( 'al_settings' ); ?>
            <?php do_settings_sections( 'al_settings' ); ?>
            <input name="Submit" type="submit" value="Save Changes" />
        </form>
    </div>

<?php }

add_action('admin_init', 'al_admin_init');

function al_admin_init(){

    // Home Page settings
    add_settings_section('al_settings_home',
                         'Home Page',
                         'al_home_setting_text',
                         'al_settings');
    add_settings_field('al_tagline_first',
                       'First Tagline',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_home',
                       array( 'al_tagline_first' ) );
    add_settings_field('al_tagline_second',
                       'Second Tagline',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_home',
                       array( 'al_tagline_second' ) );
    add_settings_field('al_insurance',
                       'Insurance Text',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_home',
                       array( 'al_insurance' ) );

    register_setting('al_settings','al_tagline_first');
    register_setting('al_settings','al_tagline_second');
    register_setting('al_settings','al_insurance');

    // Subage banner settings
    add_settings_section('al_settings_subpages',
                         'Subpages',
                         'al_subpages_setting_text',
                         'al_settings');
    add_settings_field('al_subpages_about_banner',
                       'About Banner',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_about_banner' ) );
    add_settings_field('al_subpages_about_id',
                       'About ID',
                       'al_setting_id_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_about_id' ) );
    add_settings_field('al_subpages_about_alt',
                       'About Alt',
                       'al_setting_alt_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_about_alt' ) );
    add_settings_field('al_subpages_primary_banner',
                       'Primary Care Banner',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_primary_banner' ) );
    add_settings_field('al_subpages_primary_id',
                       'Primary Care ID',
                       'al_setting_id_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_primary_id' ) );
    add_settings_field('al_subpages_primary_alt',
                       'Primary Care Alt',
                       'al_setting_alt_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_primary_alt' ) );
    add_settings_field('al_subpages_therapies_banner',
                       'Therapies Banner',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_therapies_banner' ) );
    add_settings_field('al_subpages_therapies_id',
                       'Therapies ID',
                       'al_setting_id_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_therapies_id' ) );
    add_settings_field('al_subpages_therapies_alt',
                       'Therapies Alt',
                       'al_setting_alt_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_therapies_alt' ) );
    add_settings_field('al_subpages_admissions_banner',
                       'Admissions Banner',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_admissions_banner' ) );
    add_settings_field('al_subpages_admissions_id',
                       'Admissions ID',
                       'al_setting_id_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_admissions_id' ) );
    add_settings_field('al_subpages_admissions_alt',
                       'Admissions Alt',
                       'al_setting_alt_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_admissions_alt' ) );
    add_settings_field('al_subpages_fallback_banner',
                       'Default Banner',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_fallback_banner' ) );
    add_settings_field('al_subpages_fallback_alt',
                       'Fallback Alt',
                       'al_setting_alt_string',
                       'al_settings',
                       'al_settings_subpages',
                       array( 'al_subpages_fallback_alt' ) );

    register_setting('al_settings','al_subpages_about_banner');
    register_setting('al_settings','al_subpages_about_id');
    register_setting('al_settings','al_subpages_about_alt');
    register_setting('al_settings','al_subpages_primary_banner');
    register_setting('al_settings','al_subpages_primary_id');
    register_setting('al_settings','al_subpages_primary_alt');
    register_setting('al_settings','al_subpages_therapies_banner');
    register_setting('al_settings','al_subpages_therapies_id');
    register_setting('al_settings','al_subpages_therapies_alt');
    register_setting('al_settings','al_subpages_admissions_banner');
    register_setting('al_settings','al_subpages_admissions_id');
    register_setting('al_settings','al_subpages_admissions_alt');
    register_setting('al_settings','al_subpages_fallback_banner');
    register_setting('al_settings','al_subpages_fallback_alt');

    // Address settings
    add_settings_section('al_settings_address',
                         'Address',
                         'al_address_setting_text',
                         'al_settings');
    add_settings_field('al_street_address',
                       'Street Address',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_address',
                       array( 'al_street_address' ) );
    add_settings_field('al_city_state_zip',
                       'City, State, and ZIP',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_address',
                       array( 'al_city_state_zip' ) );

    register_setting('al_settings','al_street_address');
    register_setting('al_settings','al_city_state_zip');

    // Footer settings
    add_settings_section('al_settings_footer',
                         'Footer',
                         'al_footer_setting_text',
                         'al_settings');
    add_settings_field('al_footer_header_1',
                       'First Header',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_footer',
                       array( 'al_footer_header_1' ) );
    add_settings_field('al_footer_header_2',
                       'Second Header',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_footer',
                       array( 'al_footer_header_2' ) );

    register_setting('al_settings','al_footer_header_1');
    register_setting('al_settings','al_footer_header_2');

    // Social media settings
    add_settings_section('al_settings_social',
                         'Social',
                         'al_social_setting_text',
                         'al_settings');
    add_settings_field('al_facebook',
                       'Facebook',
                       'al_setting_string',
                       'al_settings',
                       'al_settings_social',
                       array( 'al_facebook' ) );
    add_settings_field('al_google',
                   'Google+',
                   'al_setting_string',
                   'al_settings',
                   'al_settings_social',
                   array( 'al_google' ) );
    add_settings_field('al_twitter',
                   'Twitter',
                   'al_setting_string',
                   'al_settings',
                   'al_settings_social',
                   array( 'al_twitter' ) );
    add_settings_field('al_linkedin',
                   'LinkedIn',
                   'al_setting_string',
                   'al_settings',
                   'al_settings_social',
                   array( 'al_linkedin' ) );


    register_setting('al_settings','al_facebook');
    register_setting('al_settings','al_google');
    register_setting('al_settings','al_twitter');
    register_setting('al_settings','al_linkedin');
}

function al_home_setting_text() {
    echo '<p>Enter options for the home page.</p>';
}

function al_subpages_setting_text() {
    echo '<p>Enter URLs for the banner images to use on subpages, the corresponding ID for the parent page, and a value for the alt attribute.</p>';
}

function al_address_setting_text() {
    echo '<p>Enter the address. Use a &lt;br&gt; element if the street address needs to comprise multiple lines.</p>';
}

function al_footer_setting_text() {
    echo '<p>Enter options for the footer.</p>';
}

function al_social_setting_text() {
    echo '<p>Enter link addresses for social media. A blank field will cause the appropriate icon to be hidden.</p>';
}

function al_setting_string( $args ) {
    $option = get_option( $args[0] );
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" size="80"/>';
}

function al_setting_id_string( $args ) {
    $option = get_option( $args[0] );
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" size="5"/>';
}

function al_setting_alt_string( $args ) {
    $option = get_option( $args[0] );
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" size="40"/><hr>';
}
