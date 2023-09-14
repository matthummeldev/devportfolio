<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
<section class="bg-white entry-content dark:bg-gray-900">
			<div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
				<div class="max-w-screen-lg mx-auto mb-8 lg:mb-16">	


                <?php if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) :
							the_post();
							?>
<div class="grid gap-8 sm:grid-cols-1 lg:grid-cols-1">

<?php
$lastposts = get_posts( array(
    'post_status' => 'publish', 
    'orderby' => 'publish_date', 
    'order' => 'DESC'
  ) );

if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
setup_postdata( $post ); ?>

<article class="bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
             
<div class="p-10">
          <header class="mb-4 entry-header">
              
            <?php the_title( sprintf( '<h2 class="my-6 text-3xl font-bold tracking-tight text-gradient hover:bg-gray-900 dark:text-white"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <p class="mt-4 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                 
          </header>

          <hr class="mb-4"/>

          <div class="mb-4 dark:text-white ">
          <span class="mb-4 text-sm"><?php echo 'Posted ', human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago in '; ?></span>
                            <?php

                                $output = '';
                                $categories = get_the_category();
                                if ($categories){

                                    foreach($categories as $category) {
                                        $output .= '<span class="px-3 py-2 mr-2 text-sm font-small leading-[3em] text-white bg-indigo-800 rounded-full dark:bg-gray-700mb-4" style="width: max-content"><a href="' . esc_attr( esc_url( get_category_link( $category->term_id ) ) ) . '">' . $category->name . '</a></span>';
                                    }

                                echo trim($output);
                                }
                            ?>


                            
                    </div>

                    <hr/>

            
          <hr class="mb-4"/>

<div class="mb-4 dark:text-white ">
<span class="mb-4 text-sm">Tags:</span>
                  <?php

                      $tagsoutput = '';
                      $tags = get_the_tags();
                      if ($tags){

                          foreach($tags as $tag) {
                              $tagsoutput .= '<span class="px-3 py-2 mr-2 text-sm font-small leading-[3em] text-white bg-indigo-800 rounded-full dark:bg-gray-700mb-4" style="width: max-content"><a href="' . esc_attr( esc_url( get_category_link( $tag->term_id ) ) ) . '">' . $tag->name . '</a></span>';
                          }

                      echo trim($tagsoutput);
                      }
                  ?>


                  
          </div>

          <hr/>

             
                
                            </div>
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
			</div>
	</section>

<?php
get_footer();
