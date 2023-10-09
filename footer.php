</main>
<footer class="bottom-footer">
  <div class="footer-container">  
        <div class="footer-col-1">  
        <?php _e('<h3>About Matt</h3>', 'portfolio' ) ?>   
        <?php _e('<p>Matt is a front-end web developer located in Fredericksburg, Virginia. </p>', 'portfolio' ) ?>   
            <div class="social-links">
                <a href="https://www.linkedin.com/in/matthummel-va/" aria-label="LinkedIn">
                     <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="https://github.com/mattrhummel" aria-label="Twitter">
                    <ion-icon name="logo-github"></ion-icon> 
                </a>
            </div>         
        </div>
        <div class="footer-col-2"> 
          <?php _e('<h3>Pages</h3>', 'portfolio' ) ?>                      
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
    &copy; <a href="<?php echo  home_url(); ?>" class="hover:underline"><?php echo get_bloginfo('name') ?></a>
</span>

</footer>

<?php wp_footer(); ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
