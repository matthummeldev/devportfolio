<?php  // the query.
$args1 = array(
'post_type' => 'projects',
 'orderby' => 'ASC'
);
$the_query = new WP_Query( $args1 ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<section class="section">
      <h2><?php _e('Latest Projects', 'portfolio') ?></h2>
        <div class="projects-section-container"> 

            <?php //the loop
                while ( $the_query->have_posts() ) :
                $the_query->the_post();
            ?>
            
       <article class="text-left card">
        <?php if ( get_field('project_image') ) : $image = get_field('project_image'); ?>
        
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mb-5 rounded-t-lg"/>
           
        <?php endif; ?>
        
        <div class="project-details">
          
          <header>
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
                              echo  '<div class="inline-block"><span class="project-categories" style="width: max-content">' . $project_category->name . '</a></span></div>';
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
                        <a href="<?php echo get_field('repository_url'); ?>" class="project-button">
                        <svg class="w-3 h-3 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                      </svg>
                      <?php _e('View Code', 'portfolio') ?>
                      
                      </a>
                      <?php endif; ?>

                      <?php if ( get_field('project_url') ) : ?>
                          <a href="<?php echo get_field('project_url'); ?>" class="project-button">
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