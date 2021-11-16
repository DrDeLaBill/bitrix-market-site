<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?php

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <div id="panel"> <?php $APPLICATION->ShowHead() ?></div>

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php

        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/vendor/bootstrap/css/bootstrap.min.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/fontawesome.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/templatemo-sixteen.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/owl.css");
        Asset::getInstance()->addString('<meta charset="utf-8">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
        Asset::getInstance()->addString('<meta name="description" content="">');
        Asset::getInstance()->addString('<meta name="author" content="">');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">');

    ?>

</head>

<body>

<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
            </div>
        </div>
    </nav>
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