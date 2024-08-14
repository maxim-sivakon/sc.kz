<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

    <main class="grid min-h-full place-items-center py-24 px-6 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-green-850">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking for.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/" class="rounded-md bg-green-850 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-850 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-850">Вернуться на главную</a>
                <a href="/support/" class="text-sm font-semibold text-gray-900">Поддержка<span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>