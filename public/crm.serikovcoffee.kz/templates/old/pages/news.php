<?$title = 'Блог - Serikov Coffee';?>
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
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Блог</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <!-- News list-->
    <section class="mx-auto container">
        <div class="grid gap-4 grid-cols-2 space-4">
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10">Serikov Coffee Company</div>
                <div class="text-white w-64 mt-2 ml-10">Первая компания по обжарке кофе в Казахстане. Узнай нас ближе.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_01.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">Блог</div>
                <div class="font-black text-4xl text-white uppercase w-48 mt-2 ml-10">Готовьте правильно кофе</div>
                <div class="text-white w-80 mt-2 ml-10">Мы совершенно точно знаем как готовить кофе так, чтобы не было "горько", "кисло" и расскажем об этом каждому.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_02.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10">Serikov Coffee Company</div>
                <div class="text-white w-64 mt-2 ml-10">Первая компания по обжарке кофе в Казахстане. Узнай нас ближе.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_01.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">Блог</div>
                <div class="font-black text-4xl text-white uppercase w-48 mt-2 ml-10">Готовьте правильно кофе</div>
                <div class="text-white w-80 mt-2 ml-10">Мы совершенно точно знаем как готовить кофе так, чтобы не было "горько", "кисло" и расскажем об этом каждому.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_02.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10">Serikov Coffee Company</div>
                <div class="text-white w-64 mt-2 ml-10">Первая компания по обжарке кофе в Казахстане. Узнай нас ближе.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_01.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">Блог</div>
                <div class="font-black text-4xl text-white uppercase w-48 mt-2 ml-10">Готовьте правильно кофе</div>
                <div class="text-white w-80 mt-2 ml-10">Мы совершенно точно знаем как готовить кофе так, чтобы не было "горько", "кисло" и расскажем об этом каждому.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_02.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10">Serikov Coffee Company</div>
                <div class="text-white w-64 mt-2 ml-10">Первая компания по обжарке кофе в Казахстане. Узнай нас ближе.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_01.png" alt="">
            </a>
            <a href="<?= $fullDomainName ?>/pages/detail_news.php" class="bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">Блог</div>
                <div class="font-black text-4xl text-white uppercase w-48 mt-2 ml-10">Готовьте правильно кофе</div>
                <div class="text-white w-80 mt-2 ml-10">Мы совершенно точно знаем как готовить кофе так, чтобы не было "горько", "кисло" и расскажем об этом каждому.</div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_02.png" alt="">
            </a>
        </div>
    </section>
<? include "../components/footer.php"; ?>