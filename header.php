<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#content" class="sr-only focus:not-sr-only"><?php _e('Skip to content', 'portfolio') ?></a>

<header class="site-heading">
    <nav class="site-heading-container">
      
            <a href="<?php echo  home_url(); ?>" class="site-branding">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
             
            <div class="flex items-center lg:order-2">

            <?php if ( get_field('call_to_action_button_text', 'option') ) : ?>
                <a href="<?php echo esc_attr( get_field('call_to_action_button_url', 'option') ); ?>" class="primary-button"> <?php echo get_field('call_to_action_button_text', 'option'); ?>
                </a>
            <?php endif; ?>

            <button data-collapse-toggle="menu-container" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
               
            </div>

            <?php wp_nav_menu(
          array(
            'container_id'    => 'menu-container',
            'container_class' => 'items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1',
            'menu_class'      => 'primary-menu',
            'theme_location'  => 'primary',
            'li_class'        => '',
            'fallback_cb'     => false,
          )
    ); ?>
    </nav>
</header>

<?php if ( is_page() && !is_page('home') || is_404() ) { ?>

<?php if ( have_posts() ) : ?>
  <?php
  while ( have_posts() ) :
    the_post();
    ?>
  <div class="mt-5 hero">
    <div class="hero-container">
      <h1>
        <div class="text-center"><?php the_title(); ?></div>
        <?php if ( is_single() ) { ?>
        <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
        <?php } ?>
      </h1>  
 </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php } ?>
<?php if ( is_archive() ) { ?>
  <div class="mt-5 hero">
    <div class="hero-container">
      <h1>
       <?php the_archive_title(); ?>
        </h1>  
        <?php if ( is_archive() ) { ?>
          <div class="text-center">
          <span class="text-sm font-normal normal text-slate-500"><?php _e('Last post in category made ','portfolio') ?></span><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm font-normal text-gray-700"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago.'  ?></time>
        </div>
        <?php } ?>
      </div>
 </div>
</div>
</div>

</div>
  </div>
		
<?php } ?>
<?php if ( is_single() ) { ?>

  <div class="mt-5 hero">
    <div class="hero-container">
    <h1>
      <div class="text-center"><?php the_title(); ?></div>
    </h1>

      <?php if ( is_single() ) { ?>

        <div class="text-center">
        <?php

            $output = '<span class="text-sm">Posted in ';
            $categories = get_the_category();
            if ($categories){

            foreach($categories as $category) {
                $output .= '<span class="mr-2 px-3 py-2 lg:mx-0; text-sm font-medium text-white bg-indigo-900 rounded-full dark:bg-gray-700" style="width: max-content"><a href="' . esc_attr( esc_url( get_category_link( $category->term_id ) ) ) . '">' . $category->name . '</a></span>';
            }

            echo trim($output);
            
        }
?>
 <span class="text-sm font-normal text-slate-500"></span><span class="text-sm"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span></span>

<?php } ?>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
  
<?php } ?>
`
<?php if ( is_front_page() ) { ?>

  <div class="hero"> 
    <div class="home-hero-container">
      <div class="flex flex-col items-center justify-between bg-white md:flex-row">         
            
              <div class="w-full p-5 mx-auto md:w-1/2">
                <h1 class="text-xl font-extrabold leading-tight tracking-tight uppercase md:text-3xl lg:text-5xl dark:text-white">
                <?php if ( get_field('hero_tagline') ) : ?>
                <span class="text-3xl md:text-4xl lg:text-6xl text-gradient">
                  <?php echo get_field('hero_tagline'); ?>
               </span>
                <?php endif; ?>
                <?php if ( get_field('hero_subheading') ) : ?>
                  <span class="font-thin"><?php echo get_field('hero_subheading'); ?></span>
                  <?php endif; ?>
                </h1>
                <?php if ( get_field('hero_text') ) : ?>
                <p class="text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                <?php echo get_field('hero_text'); ?>
                </p> 
                <?php endif; ?>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/matthummel-va/" aria-label="LinkedIn">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="https://github.com/matthummeldev" aria-label="Twitter">
                        <ion-icon name="logo-github"></ion-icon> 
                    </a>
                 </div>
            </div>

          <div class="mt-10 lg:mt-0 w/-1/4">      
                  <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                  ?>	
                  <?php echo '<img src="'. esc_url($logo[0]) .'" alt="'. get_bloginfo('name') .'" class="w-auto h-auto mx-auto md:mx-0 filter grayscale">'; ?>
                            
          </div>
      </div>

    <div class="mt-10">
        <?php if ( get_field('what_i_do_heading', 'options') ) : ?>
          <h2 class="font-bold"> <?php echo get_field('what_i_do_heading', 'options'); ?></h2> 
        <?php endif; ?>
       <div class="grid w-full gap-5 lg:grid-cols-3">
                  <?php if ( get_field('what_col_1_heading', 'option') ) : ?>
                      <div class="p-5 hero-box bg-slate-50 border-slate-800">
                        <h3 class="mt-0 text-2xl font-bold"><?php echo get_field('what_col_1_heading', 'option'); ?></h2>
                        <p><?php echo get_field('what_col_1_description', 'option'); ?></p>
                      </div>
                  <?php endif; ?>
                  <?php if ( get_field('what_col_1_heading', 'option') ) : ?>
                      <div class="p-5 hero-box bg-slate-50 border-slate-800">
                        <h3 class="mt-0 text-2xl font-bold"><?php echo get_field('what_col_2_heading', 'option'); ?></h2>
                        <p><?php echo get_field('what_col_2_description', 'option'); ?></p>
                      </div>
                  <?php endif; ?>
                  <?php if ( get_field('what_col_3_heading', 'option') ) : ?>
                      <div class="p-5 hero-box bg-slate-50 border-slate-800">
                        <h3 class="mt-0 text-2xl font-bold"><?php echo get_field('what_col_3_heading', 'option'); ?></h2>
                        <p><?php echo get_field('what_col_3_description', 'option'); ?></p>
                      </div>
                  <?php endif; ?>
                </div>
        </div>
        
      </div>
    </div>
</div>	
		
<?php } ?>

<main id="content">
