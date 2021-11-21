<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @global string $componentPath
 * @global string $templateName
 * @var CBitrixComponentTemplate $this
 */
$cartStyle = 'bx-basket';
$cartId = "bx_basket" . $this->randString();
$arParams['cartId'] = $cartId;

if ($arParams['POSITION_FIXED'] == 'Y') {
    $cartStyle .= "-fixed {$arParams['POSITION_HORIZONTAL']} {$arParams['POSITION_VERTICAL']}";
    if ($arParams['SHOW_PRODUCTS'] == 'Y') {
        $cartStyle .= ' bx-closed';
    }
} else {
    $cartStyle .= ' bx-opener';
}
/** @var \Bitrix\Main\Page\FrameBuffered $frame */
$frame = $this->createFrame($cartId, false)->begin();
    require(realpath(dirname(__FILE__)) . '/ajax_template.php');
$frame->beginStub();
$arResult['COMPOSITE_STUB'] = 'Y';
    require(realpath(dirname(__FILE__)) . '/top_template.php');
    unset($arResult['COMPOSITE_STUB']);
$frame->end();
?>