<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Блог");
?>

<?$APPLICATION->IncludeComponent("bitrix:catalog", "blog", Array(
    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
    "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
    "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "COMMON_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
    "COMMON_SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
    "COMPATIBLE_MODE" => "N",	// Включить режим совместимости
    "COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
    "COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
    "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
    "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
    "DETAIL_ADD_TO_BASKET_ACTION" => array(	// Показывать кнопки добавления в корзину и покупки на детальной странице товара
        0 => "BUY",
    ),
    "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(	// Выделять кнопки добавления в корзину и покупки на детальной странице товара
        0 => "BUY",
    ),
    "DETAIL_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
    "DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
    "DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
    "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
    "DETAIL_DETAIL_PICTURE_MODE" => array(	// Режим показа детальной картинки
        0 => "POPUP",
        1 => "MAGNIFIER",
    ),
    "DETAIL_DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
    "DETAIL_IMAGE_RESOLUTION" => "16by9",	// Соотношение сторон изображения товара
    "DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",	// Свойства предложений, отображаемые в блоке справа от картинки
    "DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
    "DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
    "DETAIL_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "",
        1 => "",
    ),
    "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",	// Порядок отображения блоков информации о товаре
    "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",	// Порядок отображения блоков покупки товара
    "DETAIL_SET_CANONICAL_URL" => "Y",	// Устанавливать канонический URL
    "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",	// Включить сохранение информации о просмотре товара на детальной странице для старых шаблонов
    "DETAIL_SHOW_POPULAR" => "Y",	// Показывать блок "Популярное в разделе"
    "DETAIL_SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
    "DETAIL_SHOW_VIEWED" => "Y",	// Показывать блок "Просматривали"
    "DETAIL_STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для детального показа элемента
    "DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
    "DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
    "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
    "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
    "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
    "FILTER_HIDE_ON_MOBILE" => "N",	// Скрывать умный фильтр на мобильных устройствах
    "FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
    "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",	// Текст заголовка "Подарки" в детальном просмотре
    "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в детальном просмотре
    "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Подарки" в строке в детальном просмотре
    "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в детальном просмотре
    "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",	// Текст заголовка "Товары к подарку"
    "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Товары к подарку" в детальном просмотре
    "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Товары к подарку" в строке в детальном просмотре
    "GIFTS_MESS_BTN_BUY" => "Выбрать",	// Текст кнопки "Выбрать"
    "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",	// Текст заголовка "Подарки" в списке
    "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в списке
    "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Подарки" строке в списке
    "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в списке
    "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
    "GIFTS_SHOW_IMAGE" => "Y",	// Показывать изображение
    "GIFTS_SHOW_NAME" => "Y",	// Показывать название
    "GIFTS_SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
    "HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
    "HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
    "IBLOCK_ID" => "41",
    "IBLOCK_TYPE" => "SC_BLOG",
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "INSTANT_RELOAD" => "N",	// Мгновенная фильтрация при включенном AJAX
    "LABEL_PROP" => "",	// Свойство меток товара
    "LAZY_LOAD" => "N",	// Показать кнопку ленивой загрузки Lazy Load
    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
    "LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
    "LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
    "LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
    "LIST_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства раздела
    "LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
    "LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
    "LIST_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "",
        1 => "",
    ),
    "LIST_SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
    "LIST_SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
    "LIST_SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
    "LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
    "MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
    "MESS_BTN_LAZY_LOAD" => "Показать ещё",	// Текст кнопки "Показать ещё"
    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
    "MESS_COMMENTS_TAB" => "Комментарии",	// Текст вкладки "Комментарии"
    "MESS_DESCRIPTION_TAB" => "Описание",	// Текст вкладки "Описание"
    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
    "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",	// Сообщение о недоступности услуги
    "MESS_PRICE_RANGES_TITLE" => "Цены",	// Название блока c расширенными ценами
    "MESS_PROPERTIES_TAB" => "Характеристики",	// Текст вкладки "Характеристики"
    "OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
    "OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
    "OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
    "OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
    "OFFER_ADD_PICT_PROP" => "-",	// Дополнительные картинки предложения
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Товары",	// Название категорий
    "PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
    "PRICE_CODE" => array(	// Тип цены
        0 => "BASE",
    ),
    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
    "PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
    "PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
    "PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
    "SEARCH_CHECK_DATES" => "Y",	// Искать только в активных по дате документах
    "SEARCH_NO_WORD_LOGIC" => "Y",	// Отключить обработку слов как логических операторов
    "SEARCH_PAGE_RESULT_COUNT" => "50",	// Максимальное число результатов
    "SEARCH_RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
    "SEARCH_USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
    "SEARCH_USE_SEARCH_RESULT_ORDER" => "N",	// Использовать сортировку результатов по релевантности
    "SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
    "SECTIONS_VIEW_MODE" => "LIST",	// Вид списка подразделов
    "SECTION_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице списка товаров
    "SECTION_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
    "SECTION_COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
    "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
    "SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
    "SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
    "SEF_MODE" => "Y",	// Включить поддержку ЧПУ
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
    "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
    "SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
    "SHOW_OLD_PRICE" => "N",	// Показывать старую цену
    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
    "SHOW_SKU_DESCRIPTION" => "N",	// Отображать описание для каждого торгового предложения
    "SHOW_TOP_ELEMENTS" => "Y",	// Выводить топ элементов
    "SIDEBAR_DETAIL_POSITION" => "right",	// Расположение боковой панели на детальной странице
    "SIDEBAR_DETAIL_SHOW" => "N",	// Показывать боковую панель на детальной странице
    "SIDEBAR_PATH" => "",	// Путь к включаемой области для вывода информации в боковой панели
    "SIDEBAR_SECTION_POSITION" => "right",	// Расположение боковой панели в списке товаров
    "SIDEBAR_SECTION_SHOW" => "Y",	// Показывать боковую панель в списке товаров
    "TEMPLATE_THEME" => "green",	// Цветовая тема
    "TOP_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице с top'ом товаров
    "TOP_ELEMENT_COUNT" => "9",	// Количество выводимых элементов
    "TOP_ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
    "TOP_ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
    "TOP_ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
    "TOP_ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
    "TOP_LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
    "TOP_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "",
        1 => "",
    ),
    "TOP_SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
    "TOP_SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
    "TOP_SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
    "TOP_VIEW_MODE" => "SECTION",	// Показ элементов top'а
    "USER_CONSENT" => "N",	// Запрашивать согласие
    "USER_CONSENT_ID" => "0",	// Соглашение
    "USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
    "USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
    "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",	// Одинаковые настройки показа кнопок добавления в корзину или покупки на всех страницах
    "USE_COMPARE" => "N",	// Разрешить сравнение товаров
    "USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
    "USE_ENHANCED_ECOMMERCE" => "N",	// Включить отправку данных в электронную торговлю
    "USE_FILTER" => "N",	// Показывать фильтр
    "USE_GIFTS_DETAIL" => "Y",	// Показывать блок "Подарки" в детальном просмотре
    "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",	// Показывать блок "Товары к подарку" в детальном просмотре
    "USE_GIFTS_SECTION" => "Y",	// Показывать блок "Подарки" в списке
    "USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
    "USE_SALE_BESTSELLERS" => "Y",	// Показывать список лидеров продаж
    "USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
    "COMPONENT_TEMPLATE" => "bootstrap_v4",
    "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
    "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
    "TOP_ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
    "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
    "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
    "LIST_ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
    "SEF_URL_TEMPLATES" => array(
        "sections" => "",
        "section" => "#SECTION_ID#/",
        "element" => "#SECTION_ID#/#ELEMENT_ID#/",
        "compare" => "compare.php?action=#ACTION_CODE#",
        "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
    ),
    "VARIABLE_ALIASES" => array(
        "compare" => array(
            "ACTION_CODE" => "action",
        ),
    )
),
    false
);?>


<section data-code="desc-blog" data-margin="true">
    <div class="container mx-auto">
        <div id="blog-header-items">
            <div class="blog-header-item">
                <h1>Блог</h1>
            </div>
            <div class="blog-header-item">
                <select id="blog-sections-list"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-800 focus:border-green-800 block w-full p-2.5">
                    <option selected>Не выбрано</option>
                    <option value="vk.com">Coffee</option>
                </select>
            </div>
        </div>
    </div>
</section>

<section data-margin="true">
    <div class="container mx-auto">
        <div class="blog-items">
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
            <a class="blog-item" href="">
                <div class="container-blog-item">
                    <div class="blog-item-title">serikov coffee company</div>
                    <div class="blog-item-description">Первая компания по обжарке кофе в Казахстане. Узнай нас
                        ближе.
                    </div>
                </div>
                <img src="../assets/images/pavel.png" alt="">
            </a>
        </div>
        <div class="">
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                <a href="#"
                   class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" aria-current="page"
                   class="relative z-10 inline-flex items-center bg-green-800 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800">1</a>
                <a href="#"
                   class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                <a href="#"
                   class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                <a href="#"
                   class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                <a href="#"
                   class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                <a href="#"
                   class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                <a href="#"
                   class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
