<section class="bg-gray-50 section">
      <h2><?php _e('Latest Post', 'portfolio') ?></h2>
      <div class="grid gap-10 mx-auto my-auto max-w-7xl sm:grid-cols-1 lg:grid-cols-3"> 
             <?php
              $lastposts = get_posts( array(
                'posts_per_page' => 3,
                'post_status' => 'publish', 
                'orderby' => 'publish_date', 
                'order' => 'DESC'
                ) );
              if ( $lastposts ) { ?>
              <?php foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>
            <article class="text-left card">
                <?php 
                  if (has_post_thumbnail()) {
                    $image_id = get_post_thumbnail_id();
                    $image_url_array = wp_get_attachment_image_src($image_id, 'thumb');
                    $image_url = $image_url_array[0];
                    echo '<img src="'. esc_url($image_url) .'" alt="'. the_title_attribute('echo=0') .'" class="mb-5 rounded-t-lg">';
                    } else {
                        // Fallback in case the post doesn't have a featured image
                        echo '<img src="http://localhost:8001/wp-content/uploads/2023/02/my-first-post.jpg" alt="Default Image">';
                  }  
                ?>
                <div class="px-4 py-2">
                  <header class="mb-4 entry-header">
                  
                      <?php the_title( sprintf( '<h3>
                       <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                      <span class="text-sm"><?php echo  get_the_date(); ?></span>
                      
                  </header>
                <hr class="w-16 h-2 mb-5 bg-indigo-800"/>
                <p class="mt-4 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>       

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
            <?php endforeach;   
            if ( !$lastposts ) { 
            ?>
            <?php get_template_part('template-parts/content', 'section-maintenance'); } 
               wp_reset_postdata();
            } ?>
            </div>
</section>              