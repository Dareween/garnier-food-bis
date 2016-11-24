<?php
/*
Template Name: references
*/
?>


<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container-fluid page-taxonomy">
                        <div class="row">
                          <div class="col-sm-9">
                     
                     
                  
                                <section class="section-vignettes-page-reference">
                                                        <div class="row vignettes-ref-home">
                                                            <?php $loop = new WP_Query( array( 'post_type' => 'reference', 'posts_per_page' => '20' ) ); ?>
                                                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                             <div class="col-xs-6 col-sm-6 col-md-6 vignette-taxonomy">

                                                                <a href="<?php the_permalink() ?>"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                                    <div class="thumbnail-reference-home"><div class="thumbnail-bg"><?php the_post_thumbnail( 'medium-750' ) ?></div></div>
                                                                    <div class="thumbnail-text">
                                                                        <h5><?php the_field('titre_vignette'); ?></h5>
                                                                        <p class="thumbnail-sous-titre">
                                                                            <?php the_field('sous-titre_vignette'); ?></p>


                                                                        <div class="liens-taxo-thumbnail">
                                                                        <?php echo get_the_term_list( $post->ID, 'produits', '', ', ', ',' ); ?>
                                                                       <?php echo get_the_term_list( $post->ID, 'prestations', '', ', ', '' ); ?></div>
                                                                    </div>

                                                                </article><!-- #post-## -->
                                                                </a>

                                                             </div><!-- .vignette -->
                                                            <?php endwhile; wp_reset_query(); ?>
                                                        </div>
                                                    </section>    


                     
                            </div>
                    <aside class="col-sm-3">
                        
               <?php 
               
               if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar') ) ?>
                      
                </aside>
                    </div>        
                    </div>    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
