<?$title = 'Обучение - Serikov Coffee';?>
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Обучение</span>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <!-- Catalog, product list -->
    <section class="mx-auto container bg-green-800 rounded-2xl relative h-auto overflow-hidden">
        <h1 class="hidden">Обучение</h1>
        <img src="<?= $fullDomainName ?>/uploads/images/learning.png" alt="Обучение" class="w-96 m-auto py-20">
        <div class="text-white font-light text-justify text-xl w-8/12 m-auto pb-44">
                это про новые форматы, про интересных спикеров, про знания накопленные с опытом, про любовь к кофе и немного больше.
                <br>
                <br>
                Наши главные преимущества:
                <br>
                <br>
                <div class="font-bold">ТРИ ГОРОДА</div>
                <div class="grid gap-3 grid-cols-3 space-3 w-9/12 m-auto py-6">
                    <a href="<?= $fullDomainName ?>/pages/section_learning_city.php">
                        <svg viewBox="0 0 9 15" class="w-4 inline-block fill-orange-500">
                            <path d="M8.93514 3.49707C7.91888 -1.00362 -0.0963308 -1.37476 0.000876875 4.26497C0.05169 7.19788 3.06292 11.3936 4.88335 14.0769C6.99762 9.93883 9.43002 5.69836 8.93514 3.49707ZM6.92692 5.31015C6.60437 6.58997 5.30532 7.44318 4.02616 7.21494C2.74699 6.98671 1.97375 5.75595 2.29409 4.46974C2.61444 3.18352 3.91569 2.33671 5.19486 2.56494C6.47402 2.79318 7.24726 4.02393 6.92692 5.31015Z"></path>
                        </svg>
                        <div class="uppercase font-black text-yellow-300 inline-block">Алма-Ата</div>
                    </a>
                    <a href="<?= $fullDomainName ?>/pages/section_learning_city.php">
                        <svg viewBox="0 0 9 15" class="w-4 inline-block fill-orange-500">
                            <path d="M8.93514 3.49707C7.91888 -1.00362 -0.0963308 -1.37476 0.000876875 4.26497C0.05169 7.19788 3.06292 11.3936 4.88335 14.0769C6.99762 9.93883 9.43002 5.69836 8.93514 3.49707ZM6.92692 5.31015C6.60437 6.58997 5.30532 7.44318 4.02616 7.21494C2.74699 6.98671 1.97375 5.75595 2.29409 4.46974C2.61444 3.18352 3.91569 2.33671 5.19486 2.56494C6.47402 2.79318 7.24726 4.02393 6.92692 5.31015Z"></path>
                        </svg>
                        <div class="uppercase font-black text-yellow-300 inline-block">Караганда</div>
                    </a>
                    <a href="<?= $fullDomainName ?>/pages/section_learning_city.php">
                        <svg viewBox="0 0 9 15" class="w-4 inline-block fill-orange-500">
                            <path d="M8.93514 3.49707C7.91888 -1.00362 -0.0963308 -1.37476 0.000876875 4.26497C0.05169 7.19788 3.06292 11.3936 4.88335 14.0769C6.99762 9.93883 9.43002 5.69836 8.93514 3.49707ZM6.92692 5.31015C6.60437 6.58997 5.30532 7.44318 4.02616 7.21494C2.74699 6.98671 1.97375 5.75595 2.29409 4.46974C2.61444 3.18352 3.91569 2.33671 5.19486 2.56494C6.47402 2.79318 7.24726 4.02393 6.92692 5.31015Z"></path>
                        </svg>
                        <div class="uppercase font-black text-yellow-300 inline-block">Нур-Султан</div>
                    </a>
                </div>
                В каждом из представленных городов, оборудованы специальные учебные классы с профессиональным оборудованием. В процессе обучения мы предоставляем всё необходимое.
                <br>
                <br>
                <div class="font-bold">ОБУЧЕНИЕ ПРОВОДЯТ ПРОФЕССИОНАЛЫ</div>
                Все наши тренера имеют большой опыт в работе с кофе, который копился годами. А теперь они передают все свои знания ученикам нашего Serikov Coffee Education.
                <br>
                <br>
                <div class="font-bold">ВЫЕЗДНЫЕ ТРЕНИНГИ</div>
                Наши тренера с радостью могут отправиться в любой город, чтобы провести обучение для вашей команды!
                <br>
                <br>
                <div class="font-bold">ОБУЧЕНИЕ ДЛЯ ВСЕХ</div>
                Мы знаем, что есть большое количество людей, которые хотят узнать про кофе больше «для себя». Например управляющие кофейн и ресторанов всегда хотят знать как отличить хорошее зерно от плохого. А кто-то хочет узнать, как сварить самый лучший кофе в турке на своей кухне.
                <br>
                <br>
                <div class="font-bold">Стать частью грандиозных планов Serikov Coffee Education.</div>
                Мы готовим новые обучающие программы для тех, кто любит кофе, варит кофе, работает с кофе, да и просто хочет узнать больше про этот невероятный напиток
            </div>
        <div class="grid gap-4 grid-cols-4 space-4 m-auto pt-6 w-11/12 relative left-14">
            <a href="<?= $fullDomainName ?>/pages/section_learning_detail.php" class="relative">
                <img class="left-12 w-64 absolute bottom-0" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                <div class="relative">
                    <svg class="relative top-1" width="172" height="166" viewBox="0 0 172 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M144.871 3.96598C163.133 8.70881 171.122 20.1161 170.47 39.4554C169.94 54.8287 170.47 70.2837 170.47 85.6979C170.103 103.279 172.998 216.984 169.37 234.851C166.231 250.102 159.75 257.38 144.912 260.896C131.297 264.167 41.9043 259.056 30.0423 260.446C26.5138 260.909 22.9274 260.606 19.5255 259.559C16.1236 258.512 12.9854 256.744 10.323 254.376C7.66055 252.008 5.5359 249.094 4.09259 245.832C2.64928 242.569 1.92093 239.034 1.95675 235.465C1.95675 210.279 2.8943 88.8461 2.40514 63.7419C2.40514 53.4794 -0.0813893 43.2987 0.285476 32.9953C0.542978 26.6318 2.67026 20.4867 6.3999 15.3324C16.6721 2.00343 32.4066 1.30836 47.5703 0.122654C51.4021 -0.28621 141.61 3.10737 144.871 3.96598Z" fill="white"/>
                    </svg>
                    <div class="absolute z-10 top-6 left-6 w-40">
                        <div class="uppercase font-black text-yellow-300 w-24">БАУЫРЖАН НУКЕШЕВ</div>
                        <div class="pt-2 text-orange-500 font-medium text-sm">г. Нур-Султан</div>
                        <div class="pt-2 font-medium font-black text-xs">КУРС:</div>
                        <div class="text-xs w-24">Latte Art</div>
                    </div>
                </div>
            </a>
            <a href="<?= $fullDomainName ?>/pages/section_learning_detail.php" class="relative left-16">
                <img class="-left-20 w-64 absolute bottom-0" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                <div class="relative">
                    <svg class="relative top-0" width="186" height="169" viewBox="0 0 186 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.707 265.365C25.1305 262.064 16.2741 251.316 15.4131 231.985C14.7402 216.617 13.0043 201.25 11.7998 185.883C10.7918 168.327 -0.978189 55.1962 1.24248 37.1C3.17998 21.6507 9.07277 13.8888 23.5903 9.22391C36.9079 4.89918 126.427 3.00928 138.144 0.696519C141.625 -0.0402124 145.225 -0.0187275 148.698 0.759462C152.171 1.53762 155.438 3.05443 158.277 5.20733C161.117 7.36023 163.462 10.0991 165.156 13.2389C166.85 16.3786 167.852 19.8462 168.096 23.4072C170.064 48.5162 178.617 169.651 181.067 194.64C181.869 204.871 185.143 214.826 185.582 225.127C185.823 231.491 184.182 237.784 180.867 243.214C171.667 257.305 156.035 259.227 141.011 261.594C137.223 262.301 47.0251 265.966 43.707 265.365Z" fill="white"/>
                    </svg>
                    <div class="absolute z-10 top-8 left-6 w-40">
                        <div class="uppercase font-black text-yellow-300 w-24">РАТМИР АШИРБЕКОВ</div>
                        <div class="pt-2 text-orange-500 font-medium text-sm">г. Алма-Ата</div>
                        <div class="pt-2 font-medium font-black text-xs">КУРС:</div>
                        <div class="text-xs w-24">базовый курс бариста</div>
                    </div>
                </div>
            </a>
            <a href="<?= $fullDomainName ?>/pages/section_learning_detail.php" class="relative left-10">
                <img class="-left-32 w-64 absolute bottom-0" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                <div class="relative">
                    <svg class="relative top-5" width="157" height="152" viewBox="0 0 157 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.9465 234.396C9.3415 230.271 1.98715 220.004 2.39277 202.461C2.7256 188.516 2.09661 174.506 1.94852 160.529C2.11229 144.583 -1.60443 41.5053 1.51362 25.2687C4.21326 11.4095 10.0205 4.74792 23.4412 1.41691C35.7554 -1.6799 116.864 2.09565 127.607 0.72113C130.802 0.267913 134.057 0.507873 137.152 1.42478C140.247 2.34169 143.11 3.91419 145.547 6.03605C147.984 8.15789 149.938 10.7796 151.278 13.7242C152.619 16.6687 153.313 19.8675 153.315 23.1042C153.557 45.9425 153.873 156.064 154.558 178.824C154.657 188.13 157.009 197.337 156.775 206.684C156.603 212.457 154.733 218.049 151.401 222.759C142.214 234.944 127.953 235.726 114.214 236.946C110.743 237.354 28.9118 235.143 25.9465 234.396Z" fill="white"/>
                    </svg>
                    <div class="absolute z-10 top-10 left-6 w-40">
                        <div class="uppercase font-black text-yellow-300 w-24">Илья бычек</div>
                        <div class="pt-2 text-orange-500 font-medium text-sm">г. Караганда</div>
                        <div class="pt-2 font-medium font-black text-xs">КУРС:</div>
                        <div class="text-xs w-24">Sensory Skills</div>
                    </div>
                </div>
            </a>
            <a href="<?= $fullDomainName ?>/pages/section_learning_detail.php" class="relative">
                <img class="-left-36 w-64 absolute bottom-0" src="<?= $fullDomainName ?>/uploads/images/Aigul_201.png" alt="">
                <div class="relative">
                    <svg class="relative top-7" width="147" height="144" viewBox="0 0 147 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.2426 200.953C15.2647 198.157 8.32053 189.829 8.03752 175.078C7.82181 163.351 6.74498 151.609 6.0987 139.875C5.65848 126.475 -1.45106 40.0455 0.735843 26.2822C2.63659 14.5327 7.57671 8.70355 19.4373 5.36544C30.3185 2.2686 102.878 2.17468 112.419 0.587702C115.256 0.0784049 118.171 0.148929 120.968 0.794489C123.765 1.44005 126.379 2.64561 128.633 4.32973C130.887 6.01385 132.728 8.13728 134.033 10.5566C135.338 12.9759 136.076 15.6347 136.196 18.3533C137.252 37.5263 141.585 130.009 143.033 149.098C143.463 156.911 145.903 164.55 146.038 172.41C146.096 177.265 144.632 182.038 141.83 186.128C134.075 196.733 121.371 197.963 109.149 199.542C106.065 200.024 32.9177 201.461 30.2426 200.953Z" fill="white"/>
                    </svg>
                    <div class="absolute z-10 top-12 left-6 w-40">
                        <div class="uppercase font-black text-yellow-300 w-24">Айгуль Нуржан</div>
                        <div class="pt-2 text-orange-500 font-medium text-sm">г. Нур-Султан</div>
                        <div class="pt-2 font-medium font-black text-xs">КУРС:</div>
                        <div class="text-xs w-24">Latte Art</div>
                    </div>
                </div>
            </a>
        </div>
    </section>
<? include "../components/footer.php"; ?>