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

<article class="mb-4 text-left card">

<div class="px-4 py-2">
  <header class="mb-4 entry-header">
  
      <?php the_title( sprintf( '<h3>
       <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
      <span class="text-sm"><?php echo  get_the_date(); ?></span>
      
  </header>
  
<hr class="w-16 h-2 mb-5 bg-indigo-800"/>

<p><?php the_excerpt(); ?></p>

<div class="mb-4 dark:text-white">
  <?php
          $output = '';
          $categories = get_the_category();
          if ($categories){
              foreach($categories as $category) {
                  $output .= '<div class="inline-block"><span class="px-3 py-2 mr-2 text-sm font-small leading-[3em] text-white bg-indigo-800 rounded-full dark:bg-gray-700m" style="width: max-content">' . $category->name . '</a></span></div>';
              }
          echo trim($output);
          }
      ?>
 </div>
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
