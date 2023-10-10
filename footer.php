</main>
<footer class="bottom-footer">
  <div class="footer-container">  
        <div class="footer-col-1">  
 
            <?php if ( get_field('footer_col_1_heading', 'option') ) : ?>
                <h3><?php echo get_field('footer_col_1_heading', 'option'); ?></h3>
            <?php endif; ?>

            <?php if (get_the_author_meta('description')){
                    echo '<p>' . get_the_author_meta('description'). '</p>';
            } else { ?>
            <?php } ?>
        
            <div class="social-links">
                <a href="https://www.linkedin.com/in/matthummel-va/" aria-label="LinkedIn">
                     <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="https://github.com/matthummeldev" aria-label="Twitter">
                    <ion-icon name="logo-github"></ion-icon> 
                </a>
            </div> 
                    
        </div>

        <div class="footer-col-2"> 
            <?php if ( get_field('footer_col_2_heading', 'option') ) : ?>
                <h3><?php echo get_field('footer_col_2_heading', 'option'); ?></h3>
            <?php endif; ?>
                 <?php wp_nav_menu(
                                array(
                                'container_id'    => '',
                                'container_class' => 'menu-column p-0 ',
                                'menu_class'      => 'footer-menu',
                                'theme_location'  => 'primary',
                                'li_class'        => '',
                                'fallback_cb'     => false,
                            )
                        ); ?>
        </div>
</div>
               
<span class="footer-copyright">
    &copy; <a href="<?php echo home_url(); ?>" class="hover:underline"><?php echo get_bloginfo('name') ?></a>
</span>

</footer>

<?php wp_footer(); ?>
 
</body>
</html>
