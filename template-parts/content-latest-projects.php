<section class="bg-white dark:bg-gray-900">
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
      <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
          <h2 class="mb-4 text-6xl font-extrabold tracking-tight uppercase text-gradient dark:text-white">Latest Projects</h2>
      </div> 
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

   <?php   // the query.

$args = array(
  'post_type' => 'projects',
  'posts_per_page' => '3',
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<!-- pagination here -->

	<!-- the loop -->
	<?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
            
<article class="bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

<div>
                <img class="object-cover w-full mb-6 rounded-lg shadow-lg dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/case-study/mail-management-system.jpg"
                  alt="">
                <img class="hidden object-cover w-full mb-6 rounded-lg shadow-lg dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/case-study/mail-management-system-dark.jpg"
                  alt="">
                <div class="p-4 mb-6">
                  <span
                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                    <svg aria-hidden="true" class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                    </svg>
                    Front-end
                  </span>
                  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#" class="hover:underline"><?php the_title(); ?></a>
                  </h3>
                  <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                    Flowbite helps you connect with friends, family and communities of people who share your interests.
                  </p>
                </div>
                <div class="flex items-center gap-4">
                  <a href="#" title=""
                    class="text-white bg-primary-700  hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    role="button">
                    Case study
                  </a>
        
                  <a href="#" title=""
                    class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg shrink-0 focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    role="button">
                    <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                      <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                    </svg>
                    Live preview
                  </a>
                </div>
              </div>
                  
                 
                 </article>

                 <?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'portfolio' ); ?></p>
<?php endif; ?>

      </div>  
  </div>
</section>
