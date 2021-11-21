<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php
if (!empty($arResult)): ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?=SITE_DIR?>"><h2>My <em>company</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
                <ul class="navbar-nav ml-auto">
                    <?
                    foreach ($arResult as $arItem):
                        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                            continue;
                        }
                        ?>
                        <?
                        if ($arItem["SELECTED"]):?>
                            <li class="nav-item active"><a href="<?= $arItem["LINK"] ?>"
                                                           class="nav-link"><?= $arItem["TEXT"] ?><span class="sr-only">(current)</span></a>
                            </li>
                        <?
                        else:?>
                            <li class="nav-item"><a class="nav-link"
                                                    href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                        <?
                        endif ?>

                    <?
                    endforeach ?>

                    <? if ($USER->IsAuthorized()): ?>
                        <li class="nav-item">
                            <a href="/?logout=yes&sessid=<?=bitrix_sessid()?>" class="nav-link">
                                Выйти
                            </a>
                            <span class="sr-only">(current)</span>
                        </li>
                    <? else: ?>
                        <li class="nav-item">
                            <a href="/personal/" class="nav-link">
                                Войти
                            </a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                            <a href="/personal/auth/registration.php" class="nav-link">
                                Регистрация
                            </a>
                            <span class="sr-only">(current)</span>
                        </li>
                    <? endif; ?>


                    <li class="nav-item">
                            <?// Ссылка на корзину
                            $APPLICATION->IncludeComponent(
                                "bitrix:sale.basket.basket.line",
                                "small_basket",
                                array(
                                    "COMPONENT_TEMPLATE" => "main_cart",
                                    "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",
                                    // Страница корзины
                                    "PATH_TO_ORDER" => SITE_DIR . "personal/order/make/",
                                    // Страница оформления заказа
                                    "SHOW_NUM_PRODUCTS" => "N",
                                    // Показывать количество товаров
                                    "SHOW_TOTAL_PRICE" => "N",
                                    // Показывать общую сумму по товарам
                                    "SHOW_EMPTY_VALUES" => "Y",
                                    // Выводить нулевые значения в пустой корзине
                                    "SHOW_PERSONAL_LINK" => "Y",
                                    // Отображать персональный раздел
                                    "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                                    // Страница персонального раздела
                                    "SHOW_AUTHOR" => "N",
                                    // Добавить возможность авторизации
                                    "PATH_TO_AUTHORIZE" => "",
                                    // Страница авторизации
                                    "SHOW_REGISTRATION" => "Y",
                                    // Добавить возможность регистрации
                                    "PATH_TO_REGISTER" => SITE_DIR . "login/",
                                    // Страница регистрации
                                    "PATH_TO_PROFILE" => SITE_DIR . "personal/",
                                    // Страница профиля
                                    "SHOW_PRODUCTS" => "N",
                                    // Показывать список товаров
                                    "POSITION_FIXED" => "N",
                                    // Отображать корзину поверх шаблона
                                    "HIDE_ON_BASKET_PAGES" => "N",
                                    // Не показывать на страницах корзины и оформления заказа
                                ),
                                false
                            );
                            ?>
                        <span class="sr-only">(current)</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?
endif ?>