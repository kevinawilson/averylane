<?php get_header(); ?>
    <div id="content">
            <main id="inner-content" class="row column" role="main">
                <article id="content-not-found" class="row white-block">
                    <div class="column small-8 small-centered">
                        <h2><?php _e( 'Our apologies', 'jointswp' ); ?></h2>
                        <p class="text-center">
                            <?php _e( 'The item you were trying to access was not found.', 'jointswp' ); ?>
                        </p>
                    </div>
                    <!-- <section class="search">
					    <p><?php get_search_form(); ?></p>
				    </section>  end search section -->
                </article>
                <!-- end article -->
            </main>
        <!-- end #inner-content -->
    </div>
    <!-- end #content -->
    <?php get_footer(); ?>
