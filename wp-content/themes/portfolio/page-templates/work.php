<?php

/*
* Template Name: Portfolio
* Template Post Type: page
*/

get_header();





?>


<?php
    get_template_part( 'partials/page-header' );
?>


  <section class="portfolio">
    <div class="container">
      <div class="row">

        <?php
        $loop = new WP_Query( array( 'post_type' => 'acme_portfolio') );
        while ( $loop->have_posts() ) : $loop->the_post();

          // vars
          $link = get_permalink();
          $title = get_field('client_name');
          $text = get_field('client_tagline');
          $image = get_field('header_image');
          ?>
          <div class="col-md-6 col-lg-4">
            <!-- Portfolio Item-->
            <div class="col-md-12">
              <div class="portfolio--item">
                <a href="<?php echo $link; ?>" target="_blank" class="portfolio--link">
                  <div class="portfolio--item__inner" >
                    <div class="portfolio--title">
                      <h4><?php echo $title; ?></h4>
                      <h6><?php echo $text; ?></h6>
                    </div>
                    <img src="<?php echo $image; ?>"
                         class="portfolio--image"/>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>







<?php
get_footer();
?>