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
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="row">
    <? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
        <div class="col-md-6 <? if ($i == 8 || $i == 9): ?> col-lg-2 col-sm-6 <? else: ?> col-lg-4 col-sm-12 <? endif; ?>">
            <div class="technology__item technology__item-img">
                <div class="technology__title"><?= $arItem["NAME"] ?></div>
                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                <div class="technology__hov"><span style="transform: translate3d(-15px, -136px, 0px);"></span></div>
            </div>
        </div>
    <? endforeach; ?>
</div>