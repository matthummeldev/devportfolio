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
<a href="#content" class="sr-only focus:not-sr-only">Skip to content</a>
<?php if ( is_page() && !is_page('home') || is_404() ) { ?>
<header class="banner bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-sky-100 via-white to-sky-100">
<nav class="banner-content">
<a href="<?php echo  home_url(); ?>" class="site-name text-gradient">
  <?php echo get_bloginfo( 'name' ); ?>
</a>
<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only"><?php _e('Open main menu', 'tailpress') ?></span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>
<?php wp_nav_menu(
          array(
            'container_id'    => 'navbar-default',
            'container_class' => 'hidden w-full md:block md:w-auto',
            'menu_class'      => 'primary-menu',
            'theme_location'  => 'primary',
            'li_class'        => '',
            'fallback_cb'     => false,
          )
); 
?>
</nav>
<?php if ( have_posts() ) : ?>
  <?php
  while ( have_posts() ) :
    the_post();
    ?>
<div class="max-w-screen-md px-6 py-8 mx-auto md:max-w-screen-md lg:max-w-screen-xl md:px-14 sm:py-12 lg:py-16">
  <div class="flex flex-col items-center">
      <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-center uppercase lg:text-6xl dark:text-white text-gradient">
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
</div>
</header>	
<?php } ?>
<?php if ( is_archive() ) { ?>
  <header class="banner bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-sky-100 via-white to-sky-100">
    <nav class="banner-content">  
    <a href="<?php echo  home_url(); ?>" class="site-name text-gradient">
      <?php echo get_bloginfo( 'name' ); ?>
    </a>     
  <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only"><?php _e('Open main menu','tailpress'); ?></span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>
  <?php wp_nav_menu(
          array(
            'container_id'    => 'navbar-default',
            'container_class' => 'hidden w-full md:block md:w-auto',
            'menu_class'      => 'primary-menu',
            'theme_location'  => 'primary',
            'li_class'        => '',
            'fallback_cb'     => false,
          )
    ); ?>
</nav>
<div class="max-w-screen-md px-6 py-8 mx-auto md:max-w-screen-md lg:max-w-screen-xl md:px-14 sm:py-12 lg:py-16">
  <div class="flex flex-col items-center">
      <div>
      <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-center uppercase lg:text-6xl dark:text-white text-gradient">
       <?php the_archive_title(); ?>
        </h1>  
        <?php if ( is_archive() ) { ?>
          <div class="text-center">
          <span class="text-sm font-normal normal text-slate-500"><?php _e('Last post in category made ','tailpress') ?></span><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm font-normal text-gray-700"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago.'  ?></time>
        </div>
        <?php } ?>
     

      </div>
 </div>
</div>
</div>

</div>
  </div>

</header>
		
<?php } ?>
<?php if ( is_single() ) { ?>
<header class="banner bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-sky-100 via-white to-sky-100">

<nav class="banner-content">

<a href="<?php echo  home_url(); ?>" class="site-name text-gradient">
  <?php echo get_bloginfo( 'name' ); ?>
</a>
   
<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
    <span class="sr-only"><?php _e('Open main menu','tailpress'); ?></span>
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
</button>

  <?php wp_nav_menu(
        array(
          'container_id'    => 'navbar-default',
          'container_class' => 'hidden w-full md:block md:w-auto',
          'menu_class'      => 'primary-menu',
          'theme_location'  => 'primary',
          'li_class'        => '',
          'fallback_cb'     => false,
        )
  ); ?>

</nav>

<div class="max-w-screen-md px-6 py-8 mx-auto md:max-w-screen-md lg:max-w-screen-xl md:px-14 sm:py-12 lg:py-16">
<div class="flex flex-col items-center">
    <div>
    <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-center uppercase lg:text-6xl dark:text-white text-gradient">
      <div class="text-center"><?php the_title(); ?></div>
</h1>
      <?php if ( is_single() ) { ?>

        <div class="text-center">
        <?php

$output = '<span class="text-sm">Posted in ';
$categories = get_the_category();
if ($categories){

    foreach($categories as $category) {
        $output .= '<span class="px-3 py-2 text-sm font-medium text-white bg-indigo-500 rounded-full dark:bg-gray-700 style="width: max-content"><a href="' . esc_attr( esc_url( get_category_link( $category->term_id ) ) ) . '">' . $category->name . '</a></span>';
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

</header>
  
<?php } ?>

<?php if ( is_front_page() ) { ?>

  <header class="banner bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-sky-100 via-white to-sky-100">
    <nav class="banner-content">
      <a href="<?php echo  home_url(); ?>" class="site-name text-gradient">
        <?php echo get_bloginfo( 'name' ); ?>
      </a>   
  <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only"><?php _e('Open main menu','tailpress') ?></span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>

    <?php wp_nav_menu(
          array(
            'container_id'    => 'navbar-default',
            'container_class' => 'hidden w-full md:block md:w-auto',
            'menu_class'      => 'primary-menu',
            'theme_location'  => 'primary',
            'li_class'        => '',
            'fallback_cb'     => false,
          )
    ); ?>
</nav>

<article class="antialiased">
<div class="max-w-screen-md px-6 py-8 mx-auto md:max-w-screen-md lg:max-w-screen-xl md:px-14 sm:py-12 lg:py-16">
    <div class="flex flex-col items-center gap-8 xl:gap-16 lg:flex-row">
      
      <div class="text-center lg:text-left">

            <?php the_content(); ?>

      </div>

      <div class="max-w-sm">

        <?php 
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
          ?>	

        <div class="gradient-border">		 
          <?php echo '<img src="'. esc_url($logo[0]) .'" alt="'. get_bloginfo('name') .'" class="rounded-full filter grayscale">'; ?>
        </div>
      </div>

</div>
    </div>
  </div>
  </article>
</header>

</div>		
		
<?php } ?>

<main id="content">
