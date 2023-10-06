</main>
<footer class="py-4 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-sky-100 via-white to-sky-100 md:py-8  dark:bg-gray-800">
  <div class="max-w-screen-xl px-10 mx-auto">
  <div class="justify-center p-5 text-center md:text-left md:flex md:justify-between xl:p-0">         
        <div class="p-0 lg:w-1/2">   
            <h3 class="mb-0 text-gradient">About Matt</h3>
            <p class="text-sm">Matt is a front-end web developer located in Fredericksburg, Virginia. </p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/matthummel-va/" aria-label="LinkedIn">
                     <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="https://github.com/mattrhummel" aria-label="Twitter">
                    <ion-icon name="logo-github"></ion-icon> 
                </a>
            </div>         
        </div>
        <div class="px-20 lg:w-1/2"> 
            <h3 class="mb-0 text-gradient">Pages</h3>
                        
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
     
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
          
        <span class="flex justify-center mx-auto mb-10 text-sm text-gray-500 dark:text-gray-400">
            &copy; <a href="<?php echo  home_url(); ?>" class="hover:underline"><?php echo get_bloginfo('name') ?></a>
        </span>

</footer>


<?php wp_footer(); ?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
