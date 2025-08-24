<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>
<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<div class="w-4/6 mx-auto mb-40 flex justify-between gap-5">


	<div class="w-2/6 h-100 p-2 bg-stone-50 border-1 border-gray-300 rounded-lg my-14">
		<!-- بخش محصولات مشابه -->
		<?php
		// دریافت دسته‌های محصول فعلی
		$product_id = get_the_ID();
		$product_categories = wp_get_post_terms($product_id, 'product_cat', ['fields' => 'ids']);

		// کوئری محصولات مشابه
		$args = [
			'post_type' => 'product',
			'posts_per_page' => 3,
			'post__not_in' => [$product_id],
			'tax_query' => [
				[
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $product_categories,
				]
			]
		];
		$related_products = new WP_Query($args);

		if ($related_products->have_posts()) :
		?>

			<div class="max-w-md mx-auto p-6">
				<h2 class="text-lg font-bold text-gray-800 mb-6">محصولات مشابه</h2>
				<ul class="space-y-4">

					<?php while ($related_products->have_posts()) : $related_products->the_post();
						global $product; ?>
						<li class="flex items-center justify-between bg-white p-4 border-b border-gray-300 hover:shadow-md transition">
							<div class="flex flex-col text-right">
								<div class="w-16">
									<?php echo the_post_thumbnail()?>
								</div>
								<a href="<?php the_permalink(); ?>" class="text-sm text-gray-700 hover:text-blue-600">
									<?php the_title(); ?>
								</a>
								<span class="text-blue-600 font-semibold text-sm">
									<?php echo $product->get_sku(); ?>
								</span>
							</div>

						</li>
					<?php endwhile;
					wp_reset_postdata(); ?>

				</ul>
			</div>

		<?php endif; ?>

	</div>

	<!-- بخش جزئیات محصول -->
	<div class="w-5/7 rounded-lg  mb-8 my-14">


		<!-- تصویر محصول -->
		<div class="mb-8 flex justify-center w-full h-120">
			<?php the_post_thumbnail() ?>
		</div>

		<!--    عنوان و قیمت -->
		<div class="flex items-center justify-between">
			<h2 class="text-xl font-bold text-gray-800 inline text-justify"><?php the_title() ?></h2>
			<div class="flex items-center">
				<span class="rounded-md bg-red-600 text-white px-2">4%</span>
				<del class="mr-[40px] text-gray-400 ml-5"> 28,440,000 </del>
				<span class=" text-xm text-gray-600 font-bold "> 27,399,000 </span>
				<span class="text-xs text-gray-400 mr-2"> تومان </span>
			</div>

		</div>



		<!-- توضیحات -->
		<div class="text-gray-500 my-8 leading-8 text-justify">
			<p>
				<?php the_content() ?>
			</p>
		</div>


		<!-- دکمه افزودن به سبد -->
			<div class="text-right w-full h-15 my-8">
				<button class="bg-sky-600 w-45 px-5 text-white py-3 rounded-lg hover:bg-sky-900 transition flex float-right">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						 
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13a1 1 0 001-1v-1H7z" />
					</svg>
					افزودن به سبد
				</button>
			</div>



		<!-- بخش ویژگی ها -->
		<div>
			<h2 class="text-xl font-bold text-gray-800 inline text-justify">ویژگی ها</h2>
			<ul class="space-y-4 text-right mt-4">
				<li class="flex items-center gap-2">
					<span class="text-gray-600">نوع حسگر:</span>
					<span class="font-semibold text-gray-800">CMOS</span>
				</li>
				<li class="flex items-center gap-2">
					<span class="text-gray-600">قطع حسگر:</span>
					<span class="font-semibold text-gray-800">APS-C / Crop Frame (کراپ‌فریم)</span>
				</li>
			</ul>
		</div>


	</div>
</div>


<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>


<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
?>

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
