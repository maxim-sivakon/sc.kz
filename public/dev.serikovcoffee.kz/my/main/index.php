<?

require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle( "Мой профиль · Личный кабинет" );
?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "personal.page.menu",
    [
        "ALLOW_MULTI_SELECT"    => "N",
        "DELAY"                 => "Y",
        "MAX_LEVEL"             => "2",
        "MENU_CACHE_GET_VARS"   => [
        ],
        "MENU_CACHE_TIME"       => "360000",
        "MENU_CACHE_TYPE"       => "N",
        "MENU_CACHE_USE_GROUPS" => "N",
        "ROOT_MENU_TYPE"        => "personal.page",
        "USE_EXT"               => "N",
    ],
    false
); ?>
<div class="mx-auto container">
    <div class="grid gap-3 grid-cols-3 space-3 m:grid-cols-1 2xl:!grid-cols-3">
        <div data-colum="one">
            <div class="flex flex-col justify-center items-center">
                <div class="relative flex flex-col items-center rounded-[20px] w-[400px] mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                    <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover" >
                        <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                        <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400">
                            <img class="h-full w-full rounded-full" src='https://i0.wp.com/melap.ru/uploads/posts/2019-04/andrej-malahov-biografija-zhena-deti-lichnaja-zhizn-semja-televeduschego-nacionalnost-roditeli_2.jpg' alt="" />
                        </div>
                    </div>
                    <div class="mt-16 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            Андрей Малахов
                        </h4>
                        <div class="flex justify-between cursor-pointer px-3 py-2 font-medium fill-green-850 text-sm text-green-850 hover:text-yellow-300 active:text-orange-500 hover:fill-yellow-300 active:fill-orange-500">
                            <svg viewBox="0 0 9 15" class="w-2.5">
                                <path d="M8.93514 3.49707C7.91888 -1.00362 -0.0963308 -1.37476 0.000876875 4.26497C0.05169 7.19788 3.06292 11.3936 4.88335 14.0769C6.99762 9.93883 9.43002 5.69836 8.93514 3.49707ZM6.92692 5.31015C6.60437 6.58997 5.30532 7.44318 4.02616 7.21494C2.74699 6.98671 1.97375 5.75595 2.29409 4.46974C2.61444 3.18352 3.91569 2.33671 5.19486 2.56494C6.47402 2.79318 7.24726 4.02393 6.92692 5.31015Z"></path>
                            </svg>
                            <span class="pl-2">Россия, Новосибирск</span>
                        </div>
                    </div>
                    <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-green-850 dark:text-white">17</p>
                            <p class="text-sm font-normal text-gray-600">Заказов</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-green-850 dark:text-white">
                                15.000 тг
                            </p>
                            <p class="text-sm font-normal text-gray-600">Бонусов</p>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-green-850 dark:text-white">
                                434
                            </p>
                            <p class="text-sm font-normal text-gray-600">Отзыва</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <div data-colum="two">
            <div class="flex flex-col justify-center items-center">
                <div class="relative flex flex-col rounded-[20px] w-full mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                    <div class="py-2 sm:px-6">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">О пользователе</h3>
                    </div>
                    <table class="min-w-full leading-normal">
                        <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Имя</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Андрей
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Фамилия</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Малахов
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Дата рождения</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    31.03.1998
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Пол</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Мужской
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Тип пользователя</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Простой
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex flex-col justify-center items-center mt-4">
                <div class="relative flex flex-col rounded-[20px] w-full mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                    <div class="py-2 sm:px-6">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Адреса доставки</h3>
                    </div>
                    <table class="min-w-full leading-normal">
                        <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Караганда</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Ержанова 32/2, кв 54
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Новосибирск</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Фрунзе 88, кв 1208
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div data-colum="tree">
            <div class="flex flex-col justify-center items-center">
                <div class="relative flex flex-col rounded-[20px] w-full mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                    <div class="py-2 sm:px-6">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">История заказов</h3>
                    </div>
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Номер заказа
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Заказ от
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Статус
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    #43
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">25 января 2025 г.</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">Выполнен</span>
									</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    #43
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">25 января 2025 г.</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									    <span class="relative">Выполнен</span>
									</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    #43
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">25 января 2025 г.</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden
                                              class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
									<span class="relative">В работе</span>
									</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    #43
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">25 января 2025 г.</p>
                            </td>
                            <td class="px-5 py-5 border-b bg-white text-sm">
									<span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
									    <span class="relative">Отменён</span>
									</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?
require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ); ?>