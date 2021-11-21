<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
if (!$arResult["DISABLE_USE_BASKET"])
{
    ?>
    <a href="<?= $arParams['PATH_TO_BASKET'] ?>" class="nav-link bx-basket-block"><i class="fa fa-shopping-cart"></i> <?= GetMessage('TSB1_CART') ?></a><?
}
?>