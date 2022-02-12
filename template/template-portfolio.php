<?php
/**
 * Template Name: Portfolio
 */
get_header();
?>
    <!-- Start Portfolio  -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <?php 
                    /**The Query */ 
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args= array(
                        'posts_per_page' => 6,
                        'post_type' => 'portfolios',
                        'paged' => $paged
                    );
                    $the_query = new WP_Query( $args );
                ?>
                <div class="card text-center">
                    <div class="heading">
                        <?php echo esc_html__('Port','goveendsonee'); ?><span><?php echo esc_html__('folio','goveendsonee'); ?></span>
                    </div>
                    <div class="row portfolio">
                    <?php
                        if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        /** */
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
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
                    ?>
                    </div>
                   
                </div>
                <nav aria-label="Page navigation example" class="card text-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <?php
                                $paginate = 999999999;
                                echo paginate_links( array(
                                    'base' => str_replace( $paginate, '%#%', get_pagenum_link( $paginate ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $the_query->max_num_pages,
                                    'prev_text' => '&laquo; Previous',
                                    'next_text' => 'Next &raquo;'
                                ) );
                            ?>
                        </li>
                    </ul>
                </nav>
                <?php 
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </section>
    <!-- End Portfolio  -->