<?php
    get_header();

?>

    <div class="w-3/5 mx-auto h-15   p-4 font-normal text-sm text-stone-700">
        <a href="" class="float-right mt-8 bg-blue-500 hover:bg-blue-600 py-1 px-4 border-1 border-blue-500 hover:border-blue-600 rounded-full text-stone-50">همه محصولات</a>
        <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">دوربین</a>
        <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">کنسول بازی</a>
        <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">هدفون</a>
        <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">وسایل گیمینگ</a>
    </div>

    <div id="page" class="site text-right">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                
                
        ?>
                <div class="container mx-auto px-4 py-8">
                  <div class="grid   gap-6" >
                  <?php
                        $products = [
                            ["name" => " دوربین دیجیتال آکسون مدل AX6062", "price" => "27,399,000 ","name-part"=> " دوربین ", "image" => "1.jpg"],
                            ["name" => " دوربین دیجیتال کانن مدل EOS 250D", "price" => "27,399,000 ","name-part"=> " دوربین ", "image" => "2.jpg"],
                            ["name" => " هدفون بلوتوثی هایلو مدل X1 2023" , "price" => "27,399,000 ", "name-part"=> " هدفون " ,"image" => "3.jpg"],
                            ["name" => "هدست بلوتوثی سونی مدل WH-CH720N ", "price" => "27,399,000 ","name-part"=> " هدفون ", "image" => "4.jpg"],
                            ["name" => "هدست گیمینگ بلوتوثی سونی مدل InZone H9 ", "price" => "27,399,000 ","name-part"=> " هدفون ", "image" => "5.jpg"],
                            ["name" => " هدست بلوتوث استریو سونی مدل SBH54", "price" => "27,399,000 ","name-part"=> " هدفون ", "image" => "6.jpg"]

                        ];
                    ?>

                        <div class="container mx-auto px-4 py-5">
                
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center mx-auto w-[80%]">
                                <?php foreach ($products as $product): ?>
                                    <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-sm ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>" class="w-100 h-3/5 object-cover">
                                        <div class="p-4">
                                            <h2 class="text-sm font-bold mb-1"><?php echo $product["name"]; ?></h2>
                                            <span class=" text-xs text-gray-600 "> <?php echo $product["name-part"]; ?> </span>
                                            <div class="flex items-center my-3 space-x-2">
                                              <span class="rounded bg-red-600 text-white pl-2 pr-2 float-right">4%</span>
                                              <del class="mr-[40px] text-gray-400  "> 28,440,000 </del>
                                              <p class=" font-bold"><?php echo $product["price"]; ?></p>
                                                <span class="text-xs text-gray-600 " > تومان </span>
                                            </div>
                                            
                                            <div class="flex justify-between items-center">
                                            <button class="bg-gray-300 text-gray-800 px-6 text-sm py-2 rounded hover:bg-gray-400"><a href="#"> مشاهده جزئیات </a></button>
                                                <button class="bg-blue-500 text-white px-6 text-sm py-2 rounded hover:bg-blue-600"> افزودن به سبد</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                  </div>
                </div>
                <?php
            }
        } else {
            echo '<p>No content found.</p>';
        }
        ?>
    </main>
</div>
<div class="text-center w-2/10 h-10 mx-auto mb-100 flex items-center justify-between ">
    <a href="" class="w-15 h-10 px-2 py-2 border-1 border-stone-300 rounded-lg text-stone-300"> بعدی</a>
    <a href="" class="w-15 h-10 px-2 py-2 border-1 border-stone-300 rounded-lg text-stone-300">2</a>
    <a href="" class="w-15 h-10 px-2 py-2 border-1  border-blue-500 hover:border-blue-600 rounded-lg text-stone-300 bg-blue-500 hover:bg-blue-600 border-blue-500 hover:border-blue-600 text-stone-50">1</a>
    <a href="" class="w-15 h-10 px-2 py-2 border-1 border-stone-300 rounded-lg text-stone-300">قبلی</a>
</div>

<?php
    get_footer();

?>
       
    



