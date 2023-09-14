<section class="bg-white dark:bg-gray-900">
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
      <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
          <h2 class="mb-4 text-6xl font-extrabold tracking-tight uppercase text-gradient dark:text-white">Latest Post</h2>
      </div> 
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      <?php
$lastposts = get_posts( array(
	'posts_per_page' => 3
) );a

if ( $lastposts ) {
	foreach ( $lastposts as $post ) :
		setup_postdata( $post ); ?>
            
<article class="bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                      
                    <img class="mb-2 rounded-t-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png" alt="office laptop working">

                      <div class="p-4">
                    
                      
                <header class="mb-4 entry-header">
                    
		            <?php the_title( sprintf( '<h2 class="my-6 text-4xl font-bold tracking-tight text-gradient hover:bg-gray-900 dark:text-white"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    <span class="mb-4 text-sm"><?php echo 'Posted ', human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
	                    
                </header>

    
                        <hr class="mb-4"/>

                        <div class="mb-4 dark:text-white ">

                        <?php $categories = get_categories();
foreach($categories as $category) {
   echo ' <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700mb-4" style="width: max-content">' . $category->name . '</a></span>';
} ?>
                            
                       
        </div>

                      

                       <hr/>

                        <p class="mt-4 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                           
                        <div class="mt-10 mb-8">
                            <a href="<?php echo get_the_permalink(); ?>" class="primary-button">Read Post</a>   
                        </div>

                    </div>
                 
                    </article>

                  <?php
	endforeach; 
	wp_reset_postdata();
} ?>
      </div>  
  </div>
</section>
