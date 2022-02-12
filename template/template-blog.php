<?php
/**
 * Template Name: Blog
 */
get_header();
?>
    <!-- Start Blog  -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <?php 
                        /**The Query */ 
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args= array(
                            'post_per_page' => -1,
                            'post_type' => 'post',
                            'paged' => $paged
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <div class="card heading">
                    <?php echo esc_html__('Documentation','goveendsonee'); ?>
                    </div>
                    <div class="row blog">
                    <?php 
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
                    ?>
                    </div>
                    <nav aria-label="Page navigation example" class="card text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <?php
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $the_query->max_num_pages,
                                        'prev_text' => '&laquo;<i class="fa fa-hand-o-left"></i> Previous',
                                        'next_text' => 'Next <i class="fa fa-hand-o-right"></i>&raquo;'
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
        </div>
    </section>
    <!-- End Blog  -->