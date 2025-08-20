<?php get_header(); ?>

<div class="max-w-5xl mx-auto px-4 py-10">
    <!-- عنوان محصول -->
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center"><?php the_title(); ?></h1>

    <!-- تصویر محصول -->
    <div class="mb-8 flex justify-center">
        <?php the_post_thumbnail()?>
    </div>

    <!-- مشخصات محصول -->
    <div class="bg-white rounded-lg shadow-md p-6 space-y-4 text-right">
        <p class="text-lg text-gray-700"><span class="font-semibold text-indigo-600">قیمت:</span> <?php echo get_post_meta(get_the_ID(), 'price', true); ?> تومان</p>
        <p class="text-lg text-gray-700"><span class="font-semibold text-indigo-600">نوع حسگر:</span> <?php echo get_post_meta(get_the_ID(), 'sensor_type', true); ?></p>
        <p class="text-lg text-gray-700"><span class="font-semibold text-indigo-600">رزولوشن:</span> <?php echo get_post_meta(get_the_ID(), 'resolution', true); ?></p>
        <div class="text-gray-700 leading-relaxed">
            <span class="font-semibold text-indigo-600 block mb-2">توضیحات:</span>
            <?php the_content(); ?>
        </div>
    </div>

    <!-- دکمه افزودن به سبد خرید -->
    <div class="mt-8 text-center">
        <a href="#" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full shadow hover:bg-indigo-700 transition duration-300">
            افزودن به سبد خرید
        </a>
    </div>

    <!-- محصولات مرتبط -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-right">محصولات مرتبط</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID())
            );
            $related = new WP_Query($args);
            if ($related->have_posts()) :
                while ($related->have_posts()) : $related->the_post(); ?>
                    <div class="bg-white rounded-lg shadow-md p-4 text-center">
                        <?php the_post_thumbnail('medium', ['class' => 'mx-auto mb-2 rounded']); ?>
                        <a href="<?php the_permalink(); ?>" class="text-indigo-600 font-semibold hover:underline"><?php the_title(); ?></a>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>