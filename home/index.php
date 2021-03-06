<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Home");
?>
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "product_catalog",
                array(
                    "ACTION_VARIABLE" => "action",
                    // Название переменной, в которой передается действие
                    "ADD_PROPERTIES_TO_BASKET" => "Y",
                    // Добавлять в корзину свойства товаров и предложений
                    "ADD_SECTIONS_CHAIN" => "N",
                    // Включать раздел в цепочку навигации
                    "ADD_TO_BASKET_ACTION" => "ADD",
                    // Показывать кнопку добавления в корзину или покупки
                    "AJAX_MODE" => "N",
                    // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",
                    // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",
                    // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",
                    // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",
                    // Включить подгрузку стилей
                    "BACKGROUND_IMAGE" => "-",
                    // Установить фоновую картинку для шаблона из свойства
                    "BASKET_URL" => "/personal/basket.php",
                    // URL, ведущий на страницу с корзиной покупателя
                    "BROWSER_TITLE" => "-",
                    // Установить заголовок окна браузера из свойства
                    "CACHE_FILTER" => "N",
                    // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",
                    // Учитывать права доступа
                    "CACHE_TIME" => "36000000",
                    // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",
                    // Тип кеширования
                    "COMPATIBLE_MODE" => "Y",
                    // Включить режим совместимости
                    "CONVERT_CURRENCY" => "N",
                    // Показывать цены в одной валюте
                    "DETAIL_URL" => "",
                    // URL, ведущий на страницу с содержимым элемента раздела
                    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                    // Не подключать js-библиотеки в компоненте
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    // Выводить под списком
                    "DISPLAY_COMPARE" => "N",
                    // Разрешить сравнение товаров
                    "DISPLAY_TOP_PAGER" => "N",
                    // Выводить над списком
                    "ELEMENT_SORT_FIELD" => "shows",
                    // По какому полю сортируем элементы
                    "ELEMENT_SORT_FIELD2" => "shows",
                    // Поле для второй сортировки элементов
                    "ELEMENT_SORT_ORDER" => "asc",
                    // Порядок сортировки элементов
                    "ELEMENT_SORT_ORDER2" => "asc",
                    // Порядок второй сортировки элементов
                    "ENLARGE_PRODUCT" => "STRICT",
                    // Выделять товары в списке
                    "FILTER_NAME" => "arrFilter",
                    // Имя массива со значениями фильтра для фильтрации элементов
                    "HIDE_NOT_AVAILABLE" => "Y",
                    // Недоступные товары
                    "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                    // Недоступные торговые предложения
                    "IBLOCK_ID" => "23",
                    // Инфоблок
                    "IBLOCK_TYPE" => "product",
                    // Тип инфоблока
                    "INCLUDE_SUBSECTIONS" => "Y",
                    // Показывать элементы подразделов раздела
                    "LAZY_LOAD" => "N",
                    // Показать кнопку ленивой загрузки Lazy Load
                    "LINE_ELEMENT_COUNT" => "3",
                    // Количество элементов выводимых в одной строке таблицы
                    "LOAD_ON_SCROLL" => "N",
                    // Подгружать товары при прокрутке до конца
                    "MESSAGE_404" => "",
                    // Сообщение для показа (по умолчанию из компонента)
                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                    // Текст кнопки "Добавить в корзину"
                    "MESS_BTN_BUY" => "Купить",
                    // Текст кнопки "Купить"
                    "MESS_BTN_DETAIL" => "Подробнее",
                    // Текст кнопки "Подробнее"
                    "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                    // Текст кнопки "Показать ещё"
                    "MESS_BTN_SUBSCRIBE" => "Подписаться",
                    // Текст кнопки "Уведомить о поступлении"
                    "MESS_NOT_AVAILABLE" => "Нет в наличии",
                    // Сообщение об отсутствии товара
                    "META_DESCRIPTION" => "-",
                    // Установить описание страницы из свойства
                    "META_KEYWORDS" => "-",
                    // Установить ключевые слова страницы из свойства
                    "OFFERS_LIMIT" => "5",
                    // Максимальное количество предложений для показа (0 - все)
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",
                    // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",
                    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",
                    // Выводить всегда
                    "PAGER_TEMPLATE" => ".default",
                    // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Товары",
                    // Название категорий
                    "PAGE_ELEMENT_COUNT" => "18",
                    // Количество элементов на странице
                    "PARTIAL_PRODUCT_PROPERTIES" => "N",
                    // Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                    "PRICE_CODE" => "",
                    // Тип цены
                    "PRICE_VAT_INCLUDE" => "Y",
                    // Включать НДС в цену
                    "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                    // Порядок отображения блоков товара
                    "PRODUCT_ID_VARIABLE" => "id",
                    // Название переменной, в которой передается код товара для покупки
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    // Название переменной, в которой передаются характеристики товара
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    // Название переменной, в которой передается количество товара
                    "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                    // Вариант отображения товаров
                    "PRODUCT_SUBSCRIPTION" => "Y",
                    // Разрешить оповещения для отсутствующих товаров
                    "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                    // Параметр ID продукта (для товарных рекомендаций)
                    "RCM_TYPE" => "personal",
                    // Тип рекомендации
                    "SECTION_CODE" => "",
                    // Код раздела
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    // ID раздела
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    // Название переменной, в которой передается код группы
                    "SECTION_URL" => "",
                    // URL, ведущий на страницу с содержимым раздела
                    "SECTION_USER_FIELDS" => array(    // Свойства раздела
                        0 => "",
                        1 => "",
                    ),
                    "SEF_MODE" => "N",
                    // Включить поддержку ЧПУ
                    "SET_BROWSER_TITLE" => "Y",
                    // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",
                    // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "Y",
                    // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "Y",
                    // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",
                    // Устанавливать статус 404
                    "SET_TITLE" => "Y",
                    // Устанавливать заголовок страницы
                    "SHOW_404" => "N",
                    // Показ специальной страницы
                    "SHOW_ALL_WO_SECTION" => "Y",
                    // Показывать все элементы, если не указан раздел
                    "SHOW_CLOSE_POPUP" => "N",
                    // Показывать кнопку продолжения покупок во всплывающих окнах
                    "SHOW_DISCOUNT_PERCENT" => "N",
                    // Показывать процент скидки
                    "SHOW_FROM_SECTION" => "N",
                    // Показывать товары из раздела
                    "SHOW_MAX_QUANTITY" => "N",
                    // Показывать остаток товара
                    "SHOW_OLD_PRICE" => "N",
                    // Показывать старую цену
                    "SHOW_PRICE_COUNT" => "1",
                    // Выводить цены для количества
                    "SHOW_SLIDER" => "Y",
                    // Показывать слайдер для товаров
                    "TEMPLATE_THEME" => "site",
                    // Цветовая тема
                    "USE_ENHANCED_ECOMMERCE" => "N",
                    // Отправлять данные электронной торговли в Google и Яндекс
                    "USE_MAIN_ELEMENT_SECTION" => "N",
                    // Использовать основной раздел для показа элемента
                    "USE_PRICE_COUNT" => "N",
                    // Использовать вывод цен с диапазонами
                    "USE_PRODUCT_QUANTITY" => "N",
                    // Разрешить указание количества товара
                    "COMPONENT_TEMPLATE" => ".default",
                    "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                    // Фильтр товаров
                    "SLIDER_INTERVAL" => "3000",
                    // Интервал смены слайдов, мс
                    "SLIDER_PROGRESS" => "N",
                    // Показывать полосу прогресса
                    "ADD_PICT_PROP" => "-",
                    // Дополнительная картинка основного товара
                    "LABEL_PROP" => "",
                    // Свойства меток товара
                ),
                false
            ); ?>
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Looking for the best products?</h4>
                    <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This
                            template</a> is free to use for your business websites. However, you have no permission
                        to redistribute the downloadable ZIP file on any template collection website. <a
                            rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.
                    </p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                        <li><a href="#">Non cum id reprehenderit</a></li>
                    </ul>
                    <a href="about.html" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/assets/images/feature-image.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite
                                author nulla.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="filled-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>