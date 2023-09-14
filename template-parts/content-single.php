<section class="bg-white entry-content dark:bg-gray-900">
			<div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
				<div class="max-w-screen-lg mx-auto mb-8 lg:mb-16">	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'full', array('class' => 'h-auto rounded-lg mb-10' ) );
	}
	?>


  	<?php the_content(); ?>


		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'portfolio' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'portfolio' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>


</article>

			</div>
		</div>			
</section>
