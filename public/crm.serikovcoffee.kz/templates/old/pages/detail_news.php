<?$title = 'Готовьте кофе правильно - Блог - Serikov Coffee';?>
<? include "../head.php"; ?>
<? include "../components/header.php"; ?>
<!-- Breadcrumb -->
<section class="mx-auto container">
    <nav class="flex py-3 text-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Главная
                </a>
            </li>
            <li class="inline-flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Блог
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Готовьте кофе правильно</span>
                </div>
            </li>
        </ol>
    </nav>
</section>

<!-- Catalog, product list -->
<section class="mx-auto container bg-green-800 rounded-2xl relative h-auto overflow-hidden">
    <div class="uppercase text-green-900 font-black text-2xl pt-5 pl-10">Блог</div>
    <div class="pl-20 pb-20">
        <h1 class="font-black text-5xl text-white uppercase w-2/4">готовьте кофе правильно</h1>
        <div class="w-[50%] text-white font-light text-justify text-xl">
            Френч-пресс, или французский пресс, представляет собой кухонный прибор, в котором можно легко и быстро приготовить ароматный кофе или чай.
            <br>
            <br>
            Итак, способ приготовления: На 250 мл горячей воды (желательная температура ~94 градуса) нужно взять 15 грамм кофе крупного помола, засыпать в кофейник, залить водой, перемешать и закрыть крышкой.
            <br>
            <br>
            Через 4 минуты опустить поршень, перелить готовый кофе в чашку и наслаждаться...
            <br>
            <br>
            Кофейник перед приготовлением можно прогреть (залить в него горячую воду, перемешать и вылить) также прогреть и чашку, чтобы не было перепада температур и кофе заварился равномерно.
            <br>
            <br>
            Как видите все очень просто и быстро - никаких заморочек. С рецептом можно легко экспериментировать в зависимости от ваших вкусовых предпочтений.
            <br>
            <br>
            А ещё во френч-прессе можно взбивать молоко для капучино. Нужно просто залить в него нужное количество теплого молока (в зависимости от порции), и интенсивно опускать вверх-вниз поршень, тем самым расширяя молоко, превращая его в эластичную пену.
            <br>
            <br>
            Ну и конечно, во френч-прессе можно заваривать чай и травы.
            <br>
            <br>
            Этот гаджет удобен и многофункционален, а главное он недорогой и прост в обращении.
        </div>
    </div>
    <img class="absolute top-0 right-0 h-full" src="<?= $fullDomainName ?>/uploads/images/blog_detail_01.png" alt="">
</section>
<? include "../components/footer.php"; ?>

