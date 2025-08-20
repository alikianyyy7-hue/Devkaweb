<?php
get_header()
?>

<div class="w-3/5 mx-auto">
  <div class="max-w-5/6 mx-auto p-6 bg-white rounded-lg shadow-md mb-8 my-14">

    <!-- تصویر محصول -->
    <div class="mb-8 flex justify-center w-full h-120">
      <?php the_post_thumbnail() ?>
    </div>

    <!--    عنوان و قیمت -->
    <div class="gap-50">
      <h2 class="text-xl font-bold inline text-justify"><?php the_title() ?></h2>
      <div class="flex items-center w-100">
        <span class="rounded-md bg-red-600 text-white px-2 float-right">4%</span>
        <del class="mr-[40px] text-gray-400 ml-5"> 28,440,000 </del>
        <span class=" text-xm text-gray-600 font-bold "> 27,399,000 </span>
        <span class="text-xs text-gray-400 ml-2"> تومان </span>
      </div>

    </div>



    <!-- توضیحات -->
    <div>
      <p class="text-gray-700 leading-relaxed my-8">
        <?php the_content() ?>
      </p>
    </div>


    <!-- دکمه افزودن به سبد -->
    <div class="text-right text-stone-50 w-full h-15 my-8">
      <button class="bg-sky-700 w-43 px-9 py-3 rounded-lg hover:bg-sky-600 transition flex float-right">
        افزودن به سبد
      </button>
    </div>

  

</div>
<?php
get_footer()
?>