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

<div class="offer" id="offer">
    <div class="container">
        <h2>решаем проблемы сайтов</h2>
        <div class="offer__inner">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="offer__item offer__item_color<?= $arItem['PROPERTIES']['COLOR']['VALUE_XML_ID']; ?>">#<?= $arItem["NAME"] ?></div>
            <?endforeach;?>
        </div>
    </div>
</div>