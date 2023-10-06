<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
<?php  // the query.
$args1 = array(
'post_type' => 'projects',
 'orderby' => 'ASC'
);
$the_query = new WP_Query( $args1 ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<section class="section">
<h2><?php _e('Latest Projects', 'portfolio') ?></h2>

        <div class="grid gap-20 mx-auto my-auto md:max-w-screen-md lg:max-w-screen-lg sm:grid-cols-2"> 

            <?php //the loop
                while ( $the_query->have_posts() ) :
                $the_query->the_post();
            ?>
       <article class="text-left card">
        <?php if ( get_field('project_image') ) : $image = get_field('project_image'); ?>
        
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-5 rounded-t-lg"/>
           
        <?php endif; ?>
        <div class="px-4 py-2">
         <header class="mb-4 entry-header">
            <h2><?php the_title();?></h2>      
            <p>
                <?php if ( get_field('project_description') ) : ?>
                  <?php echo get_field('project_description'); ?>
                <?php endif; ?>
            </p>
        </header>
          
        <div class="block w-full">
            <hr class="mb-4"/>

  <?php
                      $project_id = get_the_ID(); // gets the ID of the current post
                      $project_categories = get_the_terms($project_id, 'project_categories');
                      if($project_categories){
                          foreach($project_categories as $project_category) {          
                              echo  '<div class="inline-block"><span class="px-3 py-2 mr-2 text-sm font-small leading-[3em] text-white bg-indigo-800 rounded-full dark:bg-gray-700m" style="width: max-content">' . $project_category->name . '</a></span></div>';
                        }
                      } else {
                        echo 'No Category';
                      }
                      ;
  ?>    
          </div>
             <hr class="mt-4"/>
                <div class="inline-flex mt-8 rounded-md shadow-sm" role="group">
                      <?php if ( get_field('repository_url') ) : ?>
                        <a href="<?php echo get_field('repository_url'); ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                      </svg>
                      <?php _e('View Code', 'portfolio') ?>
                      
                      </a>
                      <?php endif; ?>

                      <?php if ( get_field('project_url') ) : ?>
                          <a href="<?php echo get_field('project_url'); ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                          <svg class="w-3 h-3 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                          <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                        </svg>
                          <?php _e('View Project', 'portfolio') ?>
                      </a>
                    <?php endif; ?>
                  
</article>
<?php endwhile; //end of the loop ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
  <?php get_template_part('template-parts/content', 'section-maintenance'); ?>
<?php endif; ?>
</div>
</section>

<section class="bg-gray-50 section">
      <h2><?php _e('Latest Writings', 'portfolio') ?></h2>
      <div class="max-w-screen-lg gap-10 mx-auto my-auto"> 
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
            <?php endforeach;   
            if ( !$lastposts ) { 
            ?>
            <?php get_template_part('template-parts/content', 'section-maintenance'); } 
               wp_reset_postdata();
            } ?>
            </div>
</section>              
   
<?php get_footer(); 