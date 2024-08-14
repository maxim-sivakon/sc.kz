<?
require($_SERVER[ "DOCUMENT_ROOT" ]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница"); ?>

    <div class="mt-4">
        <h3 class="text-base font-medium text-slate-600 dark:text-navy-100">
            Today
        </h3>
        <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
            <div class="card justify-between p-4 sm:p-5">
                <div class="flex items-center space-x-3">
                    <img class="h-10 w-10 shrink-0 rounded-lg object-cover" src="images/800x600.png" alt="image"/>
                    <div>
                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                            Design Review
                        </h3>
                        <p class="text-xs">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-xs+">Today</p>
                    <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                        16:00 - 16:30
                    </p>
                    <div class="badge mt-2 bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                        6 Members
                    </div>
                    <div class="mt-5 flex items-center justify-between space-x-2">
                        <div class="flex -space-x-3">
                            <div class="avatar h-8 w-8 hover:z-10">
                                <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/200x200.png" alt="avatar"/>
                            </div>
                            <div class="avatar h-8 w-8 hover:z-10">
                                <div class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                    iu
                                </div>
                            </div>
                            <div class="avatar h-8 w-8 hover:z-10">
                                <img class="rounded-full ring ring-white dark:ring-navy-700" src="images/200x200.png" alt="avatar"/>
                            </div>
                        </div>
                        <button class="btn h-8 w-8 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER[ "DOCUMENT_ROOT" ]."/bitrix/footer.php"); ?>