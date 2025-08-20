<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMERA SHOP</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-100 static text-right">
    <header class="bg-stone-50 border-b-1 border-stone-300">
        <div class="h-16 w-3/5 mx-auto font-normal text-sm text-stone-700">
            <div class="float-right w-12 ml-4 my-2">
                <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
                ?>
            </div>
            <a href="#" class="float-right my-5">خانه</a>
            <a href="#" class="float-right my-5 mr-4">محصولات</a>
            <a href="#" class="float-left my-5 ml-15">ارتباط با ما</a>
                
            <div class="float-left relative w-20 h-20">
            <a href="#"><img class="absolute w-5 h-5 my-5 ml-5 float-left" src="<?php echo get_template_directory_uri(); ?>/images/shopping-cart.png"></a>
            <span class="bg-red-600 absolute right-4 rounded-full b-1 py-1 px-2 my-5 mt-2 text-stone-50">1</span>
            </div>  
        </div> 
    </header>
    
    
