<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();}

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>
<div class="col-md-4">
    <div class="product-item">
        <a href="<?=$item['DETAIL_PAGE_URL']?>">
            <div class="product-img">
                <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
            </div>
        </a>
        <div class="down-content">
            <a href="<?=$item['DETAIL_PAGE_URL']?>"><h4><?=$productTitle?></h4></a>
            <h6><?
                if (!empty($price))
                {
                    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
                    {
                        echo Loc::getMessage(
                            'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                            array(
                                '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                                '#VALUE#' => $measureRatio,
                                '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                            )
                        );
                    }
                    else
                    {
                        echo $price['PRINT_RATIO_PRICE'];
                    }
                }
                ?>
            </h6>
            <p><?=$item['PREVIEW_TEXT']?></p>
            <ul class="stars">
            </ul>
            <?php
                $reviewsCount = CIBlockElement::GetByID($item['ID'])->GetNext()['SHOW_COUNTER'];
                if (!$reviewsCount)
                    $reviewsCount = 0;
            ?>
            <span>Reviews (<?php echo $reviewsCount; ?>)</span>
        </div>
    </div>
</div>