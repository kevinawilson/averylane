<?php
/*
Template Name: home-template
*/
?>
<?php get_header(); ?>
          <main id="main" class="medium-12 columns home" role="main">
            <div class="row home_header">
                      <?php
                  $home_head = get_field("home_slider");
                  masterslider ( $home_head );
                ?>

                <div class="row home_header_logo_bar">
                  <div class="column small-10 small-centered">
                    <div class="row">
                      <div class="home_header_logo_bar_accredited column large-4 small-4">
                        accredited and certified
                      </div>
                      <div class="column large-8 small-8">
                        <?php $images = get_field('home_certified_bar');
                        if( $images ):
                        foreach( $images as $image ): ?>
                        <div class="small-3 column gallery-image">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="home_header_mobile">
            <a href="<?php echo get_home_url(); ?>"><img class="home_mobile_logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" /></a>
            <img class='home_header_mobile_img' src="<?php echo get_template_directory_uri(); ?>/assets/images/AL-HERO-A.jpg">
              <div class="home_header_seeking_wellness">
                <div class="wellness">
                  seeking wellness
                </div>
                <div class="wellness_description">
                  A healing center for women where we can grow together and support one another
                </div>
              </div>
          </div>
            <div class="row home_intro">
              <div class="column small-10 large-8 small-centered">
                <h1 class=""><?php echo get_field( 'home_intro_title' ); ?></h1>
                <p class="">
                  <?php echo get_field("home_intro_paragraph"); ?>
                </p>
                <a class="button" href="'<?php echo get_field(" home_intro_link "); ?>'">learn more</a>
              </div>
            </div>
            <div class="home_programs">
              <div class="row">
                <h1 class="column small-centered small-10 home_programs_block_title">
          <?php echo get_field("home_programs_block_title"); ?>
                </h1>
            </div>
        <div class="row">
          <div class="column large-10 large-centered">

          <?php
            // check if the repeater field has rows of data
            if( have_rows('home_programs_block') ):

             	// loop through the rows of data
                while ( have_rows('home_programs_block') ) : the_row();
          ?>
          <div class="column large-3 medium-6 home_programs_block">
            <a class="home_programs_link" href='<?php echo the_sub_field("home_programs_link"); ?>'>
              <img class="home_programs_img" src='<?php echo the_sub_field("home_programs_img"); ?>'>
              <div class="home_programs_text_block">
                <div class="home_programs_title">
                  <?php echo the_sub_field("home_programs_title"); ?>
                </div>
                <div class="home_programs_paragraph">
                  <?php echo the_sub_field("home_programs_paragraph"); ?>
                </div>
                <div class="home_programs_link-text">
                learn more
                </div>
              </div>
            </a>
          </div>

            <?php
              endwhile;
              endif;
            ?>

                </div>
              </div>
            </div>
            <div class="row home_insurance">
              <div class="column small-10 large-8 small-centered">
                <div class="row">
                  <div class='home_insurance_getting_started'>
                    Getting Started</div>
                  <h1 class=""><?php echo get_field( 'home_insurance_title' ); ?></h1>
                  <p class="">
                    <?php echo get_field("home_insurance_paragraph"); ?>
                  </p>
                  <a class="button centered" href='<?php echo get_field("home_insurance_link"); ?>'>verify now</a>
                </div>
              </div>
              <div class="row">
                <div class="column small-10 small-centered home_insurance_logos">
                  <div class="row medium-up-5">
                    <?php
                $images = get_field('home_insurance_logos');
                if( $images ): ?>
                      <?php foreach( $images as $image ): ?>
                      <div class="column medium-1 insurance_logo">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </div>
                      <?php endforeach; ?>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row home_testimonial">
              <?php
                $home_testimonial_slider = get_field("home_testimonial_slider");
                masterslider ( $home_testimonial_slider );
              ?>
            </div>
            <div class="row home_mobile_testimonial">
              <div class="quote">“Avery Lane is a truly unique treatment program led by passionate, experienced professionals completely versed in and dedicated to healing women broken by addiction and substance abuse.”</i>
              </div>
              <div class="quoter" style="color: #de929a;"><b>- Camille Hildebrand, <br>Chief Executive Officer &amp; Founder</b></span>
            </div>
          </div>
            <div class="row home_staff">
              <div class="row home_staff_person">
                <h1> Meet the Avery Lane Team</h1>
            <?php
              $home_staff_slider = get_field("home_staff_slider");
              masterslider ( $home_staff_slider );
            ?>
              </div>
            </div>
            <div class="home_contact_form row">
              <div class="column small-10 small-centered">
                <?php echo get_field("home_contact_form");?>
              </div>
            </div>

          </main>
          <!-- end .footer -->
        </div>
        <!-- end .main-content -->
      </div>
      <!-- end .off-canvas-wrapper-inner -->
    </div>
    <!-- end .off-canvas-wrapper -->
    <?php wp_footer(); ?>
  </body>
  <?php get_footer(); ?>

  </html>
  <!-- end page -->
