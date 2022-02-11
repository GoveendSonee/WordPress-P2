<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goveendsonee
 */

get_header();
?>
 
    <!-- Start Hero Section  -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="card govindsah bio">

                    <?php 
                        $text = get_theme_mod('goveendsonee_text_title');
                        $span = get_theme_mod('goveendsonee_span_title');
                        $bold = get_theme_mod('goveendsonee_bolddescribe_title');
                        $unbold = get_theme_mod('goveendsonee_unbolddescribe_title');
                        
                    ?>
                    <div class="name">
                        <?php
                            if ($text != '') {
                                echo $text;
                            } 
                            else {
                                echo "Hi Folks, I'm";
                            }
                            
                        ?>
                        
                        <span>
                            <?php
                                if ($span != '') {
                                    echo $span;
                                } 
                                else {
                                    echo "Goveend Sonee.";
                                }
                            ?>
                        </span>
                    </div>

                    <p class="about">
                        <b>
                            <?php
                                if ($bold != ''){
                                    echo $bold;
                                }
                                else{
                                    echo "Passion is not about doing something BIG ..... Passion is doing small things with 100%.";
                                }
                            ?>
                            
                        </b>
                        <br><br>
                            <?php
                                if($unbold != ''){
                                    echo $unbold;
                                }
                                else{
                                    echo "I'm a Learner and (Back-End / Front-End) Developer based in Kathmandu from Janakpur, Nepal.";
                                }
                            ?>
                    </p>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->
 
    <!-- Start About Me  -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    
                    <?php 
                        $abouttext = get_theme_mod('goveendsonee_about_title');
                        $aboutspan = get_theme_mod('goveendsonee_about_span_title');
                        $image = get_theme_mod('basic-author-callout-image');
                        $abouttextarea = get_theme_mod('goveendsonee_about_textarea_title');
                        $link = get_theme_mod('goveendsonee_about_link_title');
                        $readmore = get_theme_mod('goveendsonee_about_readmore_title');
                        
                    ?>
                    <div class="heading">

                        <?php
                            if ($abouttext != '') {
                                echo $abouttext;
                            } 
                            else {
                                echo "About";
                            }
                        ?> 

                        <span>
                            <?php
                                if ($aboutspan != '') {
                                    echo $aboutspan;
                                } 
                                else {
                                    echo "Myself";
                                }
                            ?>

                        </span>
                    </div>
                    <div class="row describe">

                        <?php if ( ! empty( $image ) ) : ?>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">

                                    <img src="<?php echo esc_url( $image ); ?>" class="card-img-top" alt="<?php echo esc_attr( $image ); ?>">

                                </div>
                            </div>
                        <?php endif; ?> 

                        <div class="col-lg-8 col-sm-12">
                            <div class="card-body">
                                <p class="card-text">

                                    <?php
                                        if ($abouttextarea != '') {
                                            echo $abouttextarea;
                                        } 
                                        else {
                                            echo "I'm Goveend Sonee, Nepal based web designer and front‑end developer living in Kathmandu focused on crafting clean, creative and user‑friendly experiences, I build beautiful and powerful websites and learner.";
                                        }
                                    ?>

                                </p>
                            </div>

                            <?php if ( ! empty( $link ) ) : ?>
                            <div class="button">
                                <a class="btn btn-primary" href="<?php echo esc_url( $link ); ?>" role="button">
                                    <?php
                                        if ($readmore != '') {
                                            echo $readmore;
                                        } 
                                        else {
                                            echo "Know Me More";
                                        }
                                    ?>   
                                </a>
                            </div>
                            <?php endif; ?> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start About Me  -->

    <!-- Start skills  -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Learning <span>Skills</span>
                    </div>
                    <div class="row skillss">

                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-text">
                                    Back-End
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-text">
                                    Front-End
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="button">
                        <a class="btn btn-primary" href="skills.html" role="button">View More Skills</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End skills  -->

    <!-- Start Portfolio  -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Port<span>folio</span>
                    </div>
                    <div class="row portfolio">
                    <?php 
                        /**The Query */ 
                        $args= array(
                            'posts_per_page' => 4,
                            'post_type' => 'portfolios'
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        /** */
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <?php
                                    $feature_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    if ( has_post_thumbnail()) : 
                                ?>
                                    <img src="<?php echo $feature_image; ?>" class="card-img" alt="<?php the_title_attribute(); ?>">
                                <?php 
                                    endif; 
                                ?>
                                <div class="card-img-top">
                                  <h5 class="card-title"><?php the_title(); ?></h5>
                                    <?php 
                                        foreach((get_the_category()) as $category) { ?>
                                            <p class="card-text">Category: <span><?php echo $category->cat_name . ' '; ?></span></p>
                                    <?php
                                      } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endwhile; endif; 
                        wp_reset_postdata(); 
                    ?>
                    </div>
                    <div class="button">
                        <a class="btn btn-primary" href="portfolio.html" role="button">View More Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio  -->

    <!-- Start Blog  -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card heading">
                        Documentation
                    </div>
                    <div class="row blog">
                    <?php 
                        /**The Query */ 
                        $args= array(
                            'posts_per_page' => 2,
                            'post_type' => 'post'
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    ?>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <?php
                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    if ( has_post_thumbnail()) : 
                                ?>
                                    <img src="<?php echo $feat_image; ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                                <?php 
                                    endif; 
                                ?>

                                <div class="card-body">
                                  <h5 class="card-title"><?php the_title(); ?></h5>
                                  <?php the_excerpt(); ?>
                                </div>
                                <div class="button">
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button"><?php echo esc_html__('Read More','goveendsonee'); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endwhile; endif; 
                        wp_reset_postdata(); 
                    ?>
                    </div>
                    <div class="button">
                        <a class="btn btn-primary" href="blog.html" role="button">View More Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog  -->	

<?php
// get_footer();