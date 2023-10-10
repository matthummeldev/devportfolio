<section class="bg-gray-50 section">

      <?php if ( get_field('latest_post_section_heading', 'option') ) : ?>
        <h2><?php echo get_field('latest_post_section_heading', 'option'); ?></h2>
      <?php endif; ?>

      <div class="section-container"> 
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
            <?php endforeach;   
            if ( !$lastposts ) { 
            ?>
            <?php get_template_part('template-parts/content', 'section-maintenance'); } 
               wp_reset_postdata();
            } ?>
            </div>
</section>              
   