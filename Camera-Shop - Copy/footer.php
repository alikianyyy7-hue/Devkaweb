<?php wp_footer(); ?>    
    <footer class="bg-stone-50 w-full h-30 ">
        <div class="border-t-1 border-stone-300 w-4/5 h-full mx-auto font-normal text-xm text-stone-700">
            <div class="float-right w-14 mt-8">
                <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="flex items-center h-full w-2/3 mx-auto justify-between float-left">
                
                <div class="w-40 h-full flex items-center justify-between p-4">

                <img class="w-8 h-8 float-left py-2 px-2 border-1 border-stone-300 rounded-full" src="<?php echo get_template_directory_uri(); ?>/images/facebook-app-symbol.png">

                <div class="w-8 h-8 py-2 px-2 border-1 border-stone-300 rounded-full">
                    <img class="w-5 h-5float-left" src="<?php echo get_template_directory_uri(); ?>/images/linkedin-big-logo.png">
                </div>
                
                
                <img class="w-8 h-8 float-left py-2 px-2 border-1 border-stone-300 rounded-full" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">

                </div>


                <div class="w-100 h-full float-right flex items-center">
                    <img class="w-4 h-4" src="<?php echo get_template_directory_uri(); ?>/images/copyright.png">
                    <p>کلیه حقوق این سایت برای پارت محفوظ میباشد</p>
                </div>
 
            </div>
            
        </div>
    </footer>
</body>
</html>