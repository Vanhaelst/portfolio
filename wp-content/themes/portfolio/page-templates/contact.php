<?php

/*
* Template Name: Contact
* Template Post Type: page
*/

get_header();
?>






  <section class="contact bridge-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <h2>Contact</h2>
          <p>Hebt u een vraag of bent u geïnteresseerd? Aarzel dan zeker niet om een vrijblijvend gesprek aan te vragen. Wij komen zo snel mogelijk bij u terug.</p>
        </div>


        <div class="col-md-10 col-lg-8">
          <?php
          gravity_form( 1,
            $display_title = false,
            $display_description = true,
            $display_inactive = false,
            $field_values = null,
            $ajax = false,
            $tabindex,
            $echo = true );
          ?>
        </div>
      </div>
    </div>

  </section>

  <section class="social">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2>Get Social</h2>
        </div>
        <div class="col-12">
          <ul>
            <li><a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fa fa-twitter"  aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>









<?php
get_footer();
?>