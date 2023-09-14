<?php get_header(); ?>

	<section class="bg-white entry-content dark:bg-gray-900">
  		<div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
      		<div class="max-w-screen-md mx-auto mb-8 lg:mb-16">	
	
			<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

		<?php endif; ?>

			</div>
			</div>
	</section>

<?php
get_footer();
