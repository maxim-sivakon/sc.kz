<?$title = 'О нас - Serikov Coffee';?>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">О нас</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <!-- News list-->
    <section class="mx-auto container">

        <div class="h-[300px] before:z-10 before:bg-cover before:bg-center backgroundAboutUsOne block bg-green-800 relative rounded-2xl before:w-full before:h-[300px] overflow-hidden">
            <div class="uppercase text-green-900 font-black text-2xl mt-6 ml-10">О нас</div>
            <div class="font-black text-5xl text-white uppercase w-1/2 mt-2 ml-28">Serikov<br> Coffee Company</div>
            <div class="text-lg text-white w-1/2 mt-4 ml-28">Первая компания по обжарке кофе в Казахстане. Узнай нас ближе.</div>
            <img class="absolute top-0 right-0 h-[300px]" src="<?= $fullDomainName ?>/uploads/images/main_page_blog_images_01.png" alt="">
            <a href="<?= $fullDomainName ?>/pages/detail_about.php" class="relative z-20 w-max block italic text-sm mt-4 ml-28 text-white hover:text-yellow-300 active:text-orange-500">подробнее</a>
        </div>

        <div class="mt-8 after:z-20 after:bg-cover after:bg-center after:bg-no-repeat backgroundAboutUsTwo block bg-green-800 relative rounded-2xl w-full h-[300px] overflow-hidden">
            <div class="uppercase text-green-900 font-black text-2xl mt-6 ml-10">О нас</div>
            <div class="font-black text-5xl text-white uppercase w-1/2 mt-2 ml-28">наша<br> философия</div>
            <div class="text-lg text-white w-1/2 mt-4 ml-28 z-10">Расскажем вам что за секретики заложены в наши<br>упаковки и в наши души.</div>
            <a href="<?= $fullDomainName ?>/pages/detail_about.php" class="relative z-20 w-max block italic text-sm mt-4 ml-28 text-white hover:text-yellow-300 active:text-orange-500">подробнее</a>
        </div>

        <div class="flex justify-between justify-items-center w-5/6 m-auto mt-16">
            <div class="font-black text-7xl text-green-800 uppercase w-24">КТО мы?</div>
            <div class="w-[790px]">
                <div class="font-black text-2xl text-green-800 uppercase text-justify leading-6">Команда профессионалов своего дела, которые живут кофе. Мы считаем что все работает, только если это по любви.</div>
                <div class="grid gap-3 grid-cols-3 space-3 mt-4">
                    <div class="text-justify">В нашем ассортименте более ???? уникальных сортов кофе со всего мира, которые выбираем лично для каждого нашего партнера.</div>
                    <div class="text-justify">Вот уже 10 лет мы стабильно обжариваем кофе и отправляем партнерам по Казахстану и СНГ, а также производим кофе под брендом заказчиков.</div>
                    <div class="text-justify">Мы следим за качеством кофе от фермы до чашки: сами ищем кофе в странах произрастания, обжариваем на лучших ростерах в мире, проводим каппинги с участием Q-грейдеров, проверяем каждую партию по 7 контрольным точкам.</div>
                </div>
            </div>
        </div>

        <div class="w-4/5 m-auto my-20">
            <div class="grid gap-3 grid-cols-3 space-3 mb-8">
                <div></div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div></div>
            </div>
            <div class="grid gap-3 grid-cols-3 space-3 mb-8">
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-4 space-4 mb-8">
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-4 space-4 mb-8">
                <div></div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div class="text-center">
                    <img src="https://keemaesthetics.co.uk/sites/default/files/styles/mt_testimonial_image/public/2016-11/testimonial-6.jpg?itok=ZntA2jRH" alt="photo" class="">
                    <div class="text-green-800 text-base font-medium">name</div>
                    <div class="text-green-800 text-sm font-medium">city</div>
                    <div class="">description</div>
                </div>
                <div></div>
            </div>
        </div>

        <div class="font-black text-4xl text-black uppercase">хотите стать частью<br>нашей команды? <a href="" class="font-medium text-lg text-black uppercase ml-8 w-max hover:text-yellow-300 active:text-orange-500">work.love.coffee@SC.kz</a></div>

    </section>
<? include "../components/footer.php"; ?>