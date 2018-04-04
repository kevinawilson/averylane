<div id='sidebar' class="hide-for-small-only medium-4 medium-pull-8 columns" role="complementary">
    <?php if ( $post->post_parent ) {
        $children = wp_list_pages( array(
            'title_li' => '',
            'child_of' => $post->post_parent,
            'echo'     => 0
        ) );
    } else {
        $children = wp_list_pages( array(
            'title_li' => '',
            'child_of' => $post->ID,
            'echo'     => 0
        ) );
    }

    if ( $children ) : ?>
        <nav class='sidebar-nav'>
            <ul>
                <?php echo $children; ?>
            </ul>
        </nav>
        <?php endif; ?>

    <!--<?php if ( is_active_sidebar( 'sidebar1' ) ) :
        dynamic_sidebar( 'sidebar1' );
        endif; ?>-->
</div>
