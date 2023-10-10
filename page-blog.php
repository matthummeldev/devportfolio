<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
<section class="bg-white entry-content dark:bg-gray-900">
			<div class="max-w-screen-lg px-4 py-8 mx-auto lg:py-16 lg:px-6">

                <?php if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) :
							the_post();
							?>

                        <?php
                        $lastposts = get_posts( array(
                            'post_status' => 'publish', 
                            'orderby' => 'publish_date', 
                            'order' => 'DESC'
                        ) );

                        if ( $lastposts ) {
                            foreach ( $lastposts as $post ) :
                        setup_postdata( $post ); ?>

<article class="post-card">
                 <header>
                      <?php the_title( sprintf( '<h3>
                       <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                      <span class="text-sm"><?php echo  get_the_date(); ?></span>
                  </header>               
                <p><?php the_excerpt(); ?></p>
                  <?php
                          $output = '';
                          $categories = get_the_category();
                          if ($categories){
                              foreach($categories as $category) {
                                  $output .= '<div class="inline-block"><span class="post-card-categories" style="width: max-content">' . $category->name . '</a></span></div>';
                              }
                          echo trim($output);
                          }
                      ?>
              </article>

                                    <?php
                                        
                                    endforeach; 

                                    wp_reset_postdata();
                                    
                                    } 
                                    
                                    ?>
                            </div>  


						<?php endwhile; ?>

					<?php endif; ?>
				              		
			</div>
	</section>

<?php
get_footer();
