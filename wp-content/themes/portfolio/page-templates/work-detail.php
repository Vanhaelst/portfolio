<?php

/*
* Template Name: Portfolio item
* Template Post Type: post, page, product, acme_portfolio, portfolio
*/

get_header();
?>





    <!-- ======================================================================
        Header
    ======================================================================= -->

    <header class="c-work--header" style="background-image: url('<?php echo the_field('header_image') ?>')">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="c-work--header__logo" style="background-image:url('<?php echo the_field('client_logo')?>');"></div>
                    <p class="c-work--header__intro">
                        <?php echo the_field('client_intro') ?>
                    </p>
                    <ul class="c-work--header__list">
                        <li>
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <p><?php echo get_field('header_company_name', 'option')?></p>
                            <p><?php echo get_field('client_name')?></p>
                        </li>
                        <li>
                            <i class="fa fa-industry" aria-hidden="true"></i>
                            <p><?php echo get_field('header_company_industry', 'option')?></p>
                            <p><?php echo get_field('client_industry')?></p>
                        </li>
                        <li>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p><?php echo get_field('header_company_website', 'option')?></p>
                            <p><?php echo get_field('client_website')?></p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p><?php echo get_field('header_company_location', 'option')?></p>
                            <p><?php echo get_field('client_location')?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <!-- ======================================================================
       Intro
    ======================================================================= -->

    <section class="c-work c-work--info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>
                      <?php echo the_field('portfolio_title_info', 'option')?>
                    </h2>
        <?php

            // check if the flexible content field has rows of data
            if( have_rows('client_info') ):

              // loop through the rows of data
              while ( have_rows('client_info') ) : the_row();

                // Found 'text' layout
                if( get_row_layout() == 'tekst' ):

                  ?><p><?php
                    the_sub_field('client_info_text');
                  ?></p><?php

                // Found 'list item' repeater layout
                elseif( get_row_layout() == 'list_item' ):

                  // check if the repeater field has rows of data
                  if( have_rows('client_info_list-repeater') ):

                    ?><ul><?php
                    // loop through the rows of data
                    while ( have_rows('client_info_list-repeater') ) : the_row();

                      // display a sub field value
                      ?><li><?php
                      the_sub_field('client_info_list-item');
                      ?></li><?php

                    endwhile;
                    ?></ul><?php

                  endif;

                endif;

              endwhile;

            else :

              // no layouts found

            endif;
        ?>
      </div>
    </div>
  </div>
</section>






    <!-- ======================================================================
       Challenges
    ======================================================================= -->
<section class="c-work c-work--challenges">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>
                  <?php echo the_field('portfolio_title_info', 'option')?>
                </h2>
              <?php

                // check if the flexible content field has rows of data
                if( have_rows('client_challenges') ):

                // loop through the rows of data
                while ( have_rows('client_challenges') ) : the_row();

                      // Found 'text' layout
                      if( get_row_layout() == 'text' ):

                        ?><p><?php
                        the_sub_field('client_challenges_text');
                        ?></p><?php

                      // Found 'list item' repeater layout
                      elseif( get_row_layout() == 'list_item' ):

                        // check if the repeater field has rows of data
                        if( have_rows('client_challenges_list-repeater') ):

                          ?><ul><?php
                          // loop through the rows of data
                          while ( have_rows('client_challenges_list-repeater') ) : the_row();

                            // display a sub field value
                            ?><li><?php
                            the_sub_field('client_challenges_list-item');
                            ?></li><?php

                          endwhile;
                          ?></ul><?php

                        endif;

                      endif;

                    endwhile;

                  else :
                    // no layouts found
                  endif;
                  ?>
                </div>
            </div>
        </div>
    </section>







    <!-- ======================================================================
       Results
    ======================================================================= -->

    <section class="c-work c-work--results">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2>
                      <?php echo the_field('portfolio_title_info', 'option')?>
                    </h2>
                  <?php

                  // check if the flexible content field has rows of data
                  if( have_rows('client_results') ):

                    // loop through the rows of data
                    while ( have_rows('client_results') ) : the_row();

                      // Found 'text' layout
                      if( get_row_layout() == 'text' ):

                        ?><p><?php
                        the_sub_field('client_results_text');
                        ?></p><?php

                      // Found 'list item' repeater layout
                      elseif( get_row_layout() == 'list_item' ):

                        // check if the repeater field has rows of data
                        if( have_rows('client_results_list-repeater') ):

                          ?><ul><?php
                          // loop through the rows of data
                          while ( have_rows('client_results_list-repeater') ) : the_row();

                            // display a sub field value
                            ?><li><?php
                            the_sub_field('client_results_list-item');
                            ?></li><?php

                          endwhile;
                          ?></ul><?php

                        endif;

                      endif;

                    endwhile;

                  else :

                    // no layouts found

                  endif;
                  ?>
                </div>
            </div>
        </div>
    </section>



<?

get_footer();