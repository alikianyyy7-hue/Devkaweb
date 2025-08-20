<?php
get_header();

?>

<div class="w-3/5 mx-auto h-15   p-4 font-normal text-sm text-stone-700">
    <a href="" class="float-right mt-8 bg-blue-500 hover:bg-blue-600 py-1 px-4 border-1 border-blue-500 hover:border-blue-600 rounded-full text-stone-50">همه محصولات</a>
    <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">دوربین</a>
    <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">کنسول بازی</a>
    <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">هدفون</a>
    <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">وسایل گیمینگ</a>
    <a href="" class="float-right mt-8 mr-8 py-1 px-4 border-1 border-stone-300 rounded-full">هدست</a>
</div>

<div id="page" class="site text-right">
    <main id="main" class="site-main">

        <div class="container mx-auto px-4 py-8">
            <div class="grid   gap-6">

                <div class="container mx-auto px-4 py-5">


                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center mx-auto w-[80%]">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post(); ?>
                                <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-sm ">
                                    <div class="p-4">
                                        <div class="mb-8 flex justify-center w-full h-65">
                                            <?php the_post_thumbnail() ?>
                                        </div>
                                        <h2 class="text-sm font-bold mb-4"><?php the_title() ?></h2>

                                        <div class="mb-4">
                                            <?php
                                                $terms = get_the_terms( get_the_ID(), 'product_category' );
                                                if ($terms[0])
                                                echo "<div class='text-gray-400'>".$terms[0]->name."</div>";
                                            ?>
                                        </div>

                                        <?php
                                            $price = get_post_meta(get_the_ID(), 'price', true);
                                            $oldPrice = get_post_meta(get_the_ID(), 'old_price', true); 
                                        ?>
                                        <div class="flex gap-1">
                                            <div><b><?php echo esc_html($price); ?></b>تومان</div>
                                            <div><?php echo esc_html($oldPrice); ?></div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button class="bg-gray-300 text-gray-800 px-6 text-sm py-2 rounded hover:bg-gray-400"><a href="<?php the_permalink() ?>"> مشاهده جزئیات </a></button>
                                            <button class="bg-blue-500 text-white px-6 text-sm py-2 rounded hover:bg-blue-600"> افزودن به سبد</button>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo '<p>No content found.</p>';
                        } ?>
                    </div>

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