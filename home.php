<?php
/*
Template Name: Home
*/
?>
  <?php get_header(); ?>
  <main id="main" class="medium-12 columns home" role="main">
    <div classd="row column home_header">

      <?php
        $home_head = get_field("home_slider");
        masterslider ( $home_head );
        ?>
        <div class="row home_header_logo_bar">
          <div class="column small-10 small-centered">
            <div class="row">
              <div class="home_header_logo_bar_accredited column large-4">
                accredited and certified
              </div>
              <div class="column large-8 ">
                <?php
                        $images = get_field('home_certified_bar');
                        if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                  <div class="large-3 column small-3 gallery-image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row column home_intro">
      <div class="column small-10 large-8 small-centered">
        <h1 class=""><?php echo get_field( 'home_intro_title' ); ?></h1>
        <p class="">
          <?php echo get_field("home_intro_paragraph"); ?>
        </p>
        <a class="button" href="'<?php echo get_field(" home_intro_link "); ?>'">Learn More</a>
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
          <a class="button centered" href="'<?php echo get_field(" home_insurance_link "); ?>'">Learn More</a>
        </div>
      </div>
      <div class="row">
        <div class="column small-10 small-centered">
          <div class="row">
            <?php
                $images = get_field('home_insurance_logos');
                if( $images ): ?>
              <?php foreach( $images as $image ): ?>
              <div class="large-2 small-2 column">
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
    <div class="row home_staff">
      <div class="row home_staff_person">
        <h1> Meet the Avery Lane Team</h1>
        <!-- <div class="small-10 small-centered">
                <h2 class="staff-title">
                  AMILLE HILDEBRAND
                </h2>
                <p>
                  CEO & Founder
                  Camille Hildebrand is a native of the San Francisco Bay Area and has over five years of combined personal and professional experience.
                </p>
                <a href=""> learn mre
              </div>
            </div> -->
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
  <?php get_footer(); ?>
