<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php

use Bitrix\Main\Page\Asset;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <div id="panel"> <?php
            $APPLICATION->ShowHead() ?></div>

        <title><?php
            $APPLICATION->ShowTitle(); ?></title>

        <?php

        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/vendor/bootstrap/css/bootstrap.min.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/fontawesome.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/templatemo-sixteen.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/owl.css");
        Asset::getInstance()->addString('<meta charset="utf-8">');
        Asset::getInstance()->addString(
            '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'
        );
        Asset::getInstance()->addString('<meta name="description" content="">');
        Asset::getInstance()->addString('<meta name="author" content="">');
        Asset::getInstance()->addString(
            '<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">'
        );

        ?>

    </head>

<body>

    <div id="panel"><?php
        $APPLICATION->ShowPanel() ?></div>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "main",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
            false
        ); ?>
    </header>

    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="container">

<?
// Поиск по заголовкам - http://dev.1c-bitrix.ru/user_help/settings/search/components_2/search_title.php
$APPLICATION->IncludeComponent(
    "bitrix:search.title",
    "main_search",
    array(
        "NUM_CATEGORIES" => "1",
        // Количество категорий поиска
        "TOP_COUNT" => "5",
        // Количество результатов в каждой категории
        "ORDER" => "date",
        // Сортировка результатов
        "USE_LANGUAGE_GUESS" => "Y",
        // Включить автоопределение раскладки клавиатуры
        "CHECK_DATES" => "N",
        // Искать только в активных по дате документах
        "SHOW_OTHERS" => "N",
        // Показывать категорию "прочее"
        "PAGE" => "#SITE_DIR#search/index.php",
        // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
        "CATEGORY_0_TITLE" => "",
        // Название категории
        "CATEGORY_0" => array(    // Ограничение области поиска
            0 => "iblock_workwear_shop",
        ),
        "COMPONENT_TEMPLATE" => ".default",
        "SHOW_INPUT" => "Y",
        // Показывать форму ввода поискового запроса
        "INPUT_ID" => "title-search-input",
        // ID строки ввода поискового запроса
        "CONTAINER_ID" => "title-search",
        // ID контейнера, по ширине которого будут выводиться результаты
        "CATEGORY_0_iblock_workwear_shop" => array(    // Искать в информационных блоках типа "iblock_workwear_shop"
            0 => "24",
        )
    ),
    false
);
?>