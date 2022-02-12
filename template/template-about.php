<?php
/**
 * Template Name: About
 */

get_header();
?>
    <!-- Start About Me  -->
    <section id="about">
        <div class="container">
            <?php 
                $abouttext = get_theme_mod('goveendsonee_about_title');
                $aboutspan = get_theme_mod('goveendsonee_about_span_title');
                $image = get_theme_mod('basic-author-callout-image');
                $abouttextarea = get_theme_mod('goveendsonee_about_textarea_title');
                $link = get_theme_mod('goveendsonee_about_link_title');
                $readmore = get_theme_mod('goveendsonee_about_readmore_title');
            ?>
            <div class="row">
                <div class="card text-center">
                    <div class="heading">

                        <?php
                            if($abouttext != ''){
                                echo $abouttext;
                            }
                            else{
                                echo "About";
                            }
                        ?>
                        
                        <span>
                            <?php
                                if ($aboutspan != ''){
                                    echo $aboutspan;
                                }
                                else{
                                    echo "Myself";
                                }
                            ?>
                        </span>
                    </div>
                    <div class="row describe">
                        <?php if ( ! empty ($image) ): ?>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card">
                                <img src="<?php echo esc_url($image); ?>" class="card-img-top" alt="<?php echo esc_attr($image); ?>">
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
                                <br>
                                <div class="row text-nowrap">
                                    <div class="d-flex col-12 col-sm-6 personal-list-container personal-list-container-1">
                                        <ul class="list-unstyled personal-info w-100">
                                            <li>
                                                <p><i class="fas fa-birthday-cake"></i>&nbsp;<span>Birthdate : </span>1999 July-5 </p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-flag"></i>&nbsp;<span>Nationality : </span>Nepali</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-cogs"></i>&nbsp;<span>Experience : </span>3 years</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex col-12 col-sm-6 personal-list-container personal-list-container-2">
                                        <ul class="list-unstyled personal-info w-100">
                                            <li>
                                                <p><i class="fas fa-phone-square-alt"></i>&nbsp;<span>Phone : </span>+977 9844509805</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-street-view"></i>&nbsp;<span>Address : </span>Kathmandu, Nepal</p>
                                            </li>
                                            <li>
                                                <p><i class="fas fa-envelope"></i>&nbsp;<span>Passion : </span>Learner</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start About Me  -->