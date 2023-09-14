<?php get_header(); ?>

<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-sm mx-auto text-center">
            <h1 class="mb-4 font-extrabold tracking-tight text-7xl lg:text-9xl text-primary-600 dark:text-primary-500"><?php _e('404', 'portfolio') ?></h1>
            <p class="mb-4 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl dark:text-white">
				<?php _e('Something is missing.', 'portfolio') ?>
			</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">
				<?php
					_e('Sorry, that page can not be found. Contact Matt at ', 'portfolio');
					
						echo sprintf('<a href="mailto:matthummel.com">matt@matthummel.com</a>', 'portfolio');		

					_e(' for questions.', 'portfolio') 
				?>
			</p>
			<div class="flex justify-center mt-12">
            	<a href="<?php echo  home_url(); ?>" class="primary-button">
				<?php _e('Back to homepage', 'portfolio') ?></a>
			</div>
			
        </div>   
    </div>
</section>

<?php get_footer();