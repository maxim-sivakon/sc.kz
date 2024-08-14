<?$title = 'Нур-Султан - Обучение - Serikov Coffee';?>
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
                        Обучение
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Нур-Султан</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <section class="mx-auto container bg-green-800 rounded-2xl relative h-auto overflow-hidden">
        <h1 class="hidden">Нур-Султан</h1>
        <img src="<?= $fullDomainName ?>/uploads/images/learning.png" alt="Обучение" class="w-96 m-auto py-20">
        <div class="uppercase font-black text-yellow-300 text-5xl -rotate-[4deg] text-center">Нур-Султан</div>
        <div class="grid gap-4 grid-cols-2 space-4 m-auto w-[80%] mb-20">
            <div class="relative mt-56">
                <div class="z-10 absolute -top-48">
                    <img class="w-64 relative left-8" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                    <div class="relative text-white -top-44 left-[274px] text-lg">
                        <div class="w-24 font-bold leading-5">Айгуль Нуржан</div>
                        <div class="pt-1">тренер эксперт</div>
                    </div>
                </div>
                <div class="z-20 relative bg-cover bg-center bgLearning w-[460px] h-[650px]">
                    <div class="uppercase font-black text-green-800 text-4xl text-center w-32 m-auto pt-12">Latte art</div>
                    <div class="py-6 text-center font-normal">12 академических часов</div>
                    <div class="text-justify font-normal px-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis et ante ullamcorper quisque risus pellentesque in lacus, luctus. Id est turpis adipiscing consectetur semper vel vel urna, ligula. Pretium velit, etiam duis massa. In adipiscing blandit mattis quam netus dolor quam. Dignissim dolor, morbi et lorem blandit. Porttitor sem ultricies praesent egestas est libero diam gravida. Praesent vitae sed nulla quis urna. Dictum tempor tempus sit eget iaculis. Consectetur venenatis hendrerit a nulla. Semper ipsum dignissim eget ultricies egestas mauris, varius.</div>
                    <div class="flex justify-between justify-items-center px-12 pt-6">
                        <div class="w-24 font-extrabold">стоимость курса</div>
                        <div class="font-extrabold text-3xl w-[132px] leading-5">100 000 тенге</div>
                    </div>
                    <input type="button" value="Подать заявку" class="my-12 m-auto block font-semibold text-green-800 px-10 py-2 rounded-full bg-yellow-300 lowercase text-base hover:cursor-pointer hover:text-green-800 hover:bg-yellow-500 active:text-white active:bg-orange-500">
                </div>
            </div>
            <div class="relative mt-56">
                <div class="z-10 absolute -top-48">
                    <img class="w-64 relative left-8" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                    <div class="relative text-white -top-44 left-[274px] text-lg">
                        <div class="w-24 font-bold leading-5">Айгуль Нуржан</div>
                        <div class="pt-1">тренер эксперт</div>
                    </div>
                </div>
                <div class="z-20 relative bg-cover bg-center bgLearning w-[460px] h-[650px]">
                    <div class="uppercase font-black text-green-800 text-4xl text-center w-32 m-auto pt-12">Latte art</div>
                    <div class="py-6 text-center font-normal">12 академических часов</div>
                    <div class="text-justify font-normal px-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis et ante ullamcorper quisque risus pellentesque in lacus, luctus. Id est turpis adipiscing consectetur semper vel vel urna, ligula. Pretium velit, etiam duis massa. In adipiscing blandit mattis quam netus dolor quam. Dignissim dolor, morbi et lorem blandit. Porttitor sem ultricies praesent egestas est libero diam gravida. Praesent vitae sed nulla quis urna. Dictum tempor tempus sit eget iaculis. Consectetur venenatis hendrerit a nulla. Semper ipsum dignissim eget ultricies egestas mauris, varius.</div>
                    <div class="flex justify-between justify-items-center px-12 pt-6">
                        <div class="w-24 font-extrabold">стоимость курса</div>
                        <div class="font-extrabold text-3xl w-[132px] leading-5">100 000 тенге</div>
                    </div>
                    <input type="button" value="Подать заявку" class="my-12 m-auto block font-semibold text-green-800 px-10 py-2 rounded-full bg-yellow-300 lowercase text-base hover:cursor-pointer hover:text-green-800 hover:bg-yellow-500 active:text-white active:bg-orange-500">
                </div>
            </div>
        </div>
    </section>
<? include "../components/footer.php"; ?>