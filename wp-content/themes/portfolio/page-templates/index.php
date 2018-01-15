<?php

/*
* Template Name: Front Page
*/

get_header();
?>




    <!--    Header
    ====================================================================== -->
    <header class="header">
        <div class="info">
            <h4 class="tags">
                <span>Development</span>
                <span>Wordpress</span>
                <span>UI</span>
                <span>UX</span>
                <span>Design</span>
            </h4>
            <h1 class="title">Welcome to my portfolio</h1>
            <div class="meta">
                <a href="http://www.indyvanhaelst.be"
                   target="_blank"
                   class="author"
                   style="background-image: url('http://indyvanhaelst.local:8888/wp-content/uploads/2018/01/profile.jpg');">
                </a>
                By
                <a href="http://www.indyvanhaelst.be"
                   target="_blank"
                    class="white">
                    Indy Vanhaelst
                </a>
                on December 13, 2017
            </div>
        </div>
    </header>



    <!--    Navigation
    ====================================================================== -->

    <nav class="c-navigation">
        <span class="menu-item"><a href="index.php">Indy Vanhaelst</a></span>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>

    <nav class="c-navigation c-navigation--sticky">
        <span class="menu-item"><a href="index.php">Indy Vanhaelst</a></span>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>




    <!--    Intro
    ====================================================================== -->
    <section class="intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>
                      <?php echo the_field('intro_titel')?>
                    </h2>
                    <p>
                      <?php the_field('intro_paragraph', false, false); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!--    Portfolio
    ====================================================================== -->
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <h2><?php echo the_field('werk_title') ?></h2>
            </div>
        </div>


        <div class="container">
            <div class="portfolio-grid">

                <?php


                $args = array(
                  'post_type' => 'acme_portfolio',
                  'cat' => '3',
                  'posts_per_page' => 6,
                );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();

                    // vars
                    // $link = get_permalink();
                    $link = get_field('client_website_temp');
                    $title = get_field('client_name');
                    $text = get_field('client_tagline');
                    $image = get_field('header_image');
                ?>
                    <div class="c-portfolio--item js-portfolio--item portfolio--item">
                        <a href="http://<?php echo $link; ?>" target="_blank" class="portfolio--link">
                            <div class="portfolio--item__inner" >
                                <div class="portfolio--title">
                                    <h4><?php echo $title; ?></h4>
                                    <h6><?php echo $text; ?></h6>
                                </div>
                                <img src="<?php echo $image; ?>"
                                     class="portfolio--image portfolio--filter"/>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>


    <!--    Social
    ====================================================================== -->
    <section class="social">
        <div class="container">
            <div class="row">
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

    <!--    Contact
    ====================================================================== -->
    <section class="contact bridge-bg">
        <div class="container">
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

    </section>





<?

get_footer();