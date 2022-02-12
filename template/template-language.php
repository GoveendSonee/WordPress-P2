<?php
/**
 * Template Name: Skills
 */
get_header(); 
?>

    <!-- Start skills  -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="heading">
                        Learning <span>Skills</span>
                    </div>
                    <div class="row skillss">
                        <?php
                            /**Query Post Type For Skills */
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'skills',
                            );
                            $the_query = new WP_Query($args);

                            if ($the_query-> have_posts()):
                                while($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                
                                <div class="card-text">
                                   <?php echo the_title(); ?>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo the_excerpt(); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo the_excerpt(); ?>%"><?php echo the_excerpt(); ?>%</div>
                                </div>
                                <?php
                                      $custom_fields = get_post_custom();
                                        $my_custom_field = $custom_fields['my_custom_field'];
                                        foreach ( $my_custom_field as $key => $value ) {
                                            echo $key . " => " . $value . "<br />";
                                        }
                                ?>
                            </div>
                        </div>
                        <?php 
                            endwhile; endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End skills  -->