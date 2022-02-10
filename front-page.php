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
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <img src="assets/img/website.png" class="card-img" alt="assets/img/website.png">
                                <div class="card-img-top">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Category: <span>News-Portal</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <img src="assets/img/website.png" class="card-img" alt="assets/img/website.png">
                                <div class="card-img-top">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Category: <span>News-Portal</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <img src="assets/img/website.png" class="card-img" alt="assets/img/website.png">
                                <div class="card-img-top">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Category: <span>News-Portal</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card bg-dark text-white">
                                <img src="assets/img/website.png" class="card-img" alt="assets/img/website.png">
                                <div class="card-img-top">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Category: <span>News-Portal</span></p>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <img src="assets/img/bg.jpg" class="card-img-top" alt="assets/img/bg.jpg">
                                <div class="card-body">
                                  <h5 class="card-title"> All The JavaScript You Need All The JavaScript You Need All The JavaScript You Need To Know For React Card title</h5>
                                  <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eum est quas aliquid aut. Obcaecati veritatis illum neque iste consectetur quos. Repellendus ipsam nemo, dignissimos impedit veniam quia suscipit. Reprehenderit. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="button">
                                    <a class="btn btn-primary" href="#" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <img src="assets/img/bg.jpg" class="card-img-top" alt="assets/img/bg.jpg">
                                <div class="card-body">
                                  <h5 class="card-title"> All The JavaScript You Need To Know For React Card title</h5>
                                  <p class="card-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. At non adipisci quas reiciendis et nesciunt tenetur quos nulla ab alias laudantium quia veritatis excepturi, quisquam repudiandae itaque ipsum! Voluptates, necessitatibus. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="button">
                                    <a class="btn btn-primary" href="#" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
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