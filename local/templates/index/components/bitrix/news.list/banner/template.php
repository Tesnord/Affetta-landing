<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//echo ' <pre>';print_r($arResult['ITEMS']['0']);echo '</pre>';
?>
<div class="banner tw">
    <div class="container">
        <div class="row">
            <? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12">
                    <div class="banner__inner">
                        <h1><?= $arItem['NAME']; ?>
                            <? foreach ($arItem['PROPERTIES']['IMG']['VALUE'] as $i => $arImg): ?>
                                <img src="<?= $arImg ?>" alt="">
                            <? endforeach; ?>
                        </h1>
                        <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
                        <button
                                class="button button-primary" onclick="Marquiz.showModal('5f367f1d51d1330052bbad60')"><span>Рассчитать стоимость сайта</span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12">
                    <div class="banner__img"><img src="<?= $arItem['DETAIL_PICTURE']['SRC'];?>" alt=""></div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
