<article id="post-<?php the_ID(); ?>" <?php post_class( 'max-w-screen-lg px-4 py-8 mx-auto bg-white dark:bg-gray-900 lg:py-16 lg:px-6' ); ?>>
	<?php
	/* translators: %s: Name of current post */
	the_content(
		sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tailpress' ),
			get_the_title()
		));
	wp_link_pages(
		array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		)
	);
	?>
</article>