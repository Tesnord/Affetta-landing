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
<div class="case" id="case">
    <div class="container">
        <? foreach ($arResult["ITEMS"] as $i => $arItem): ?>
            <a class="case__item case__item-color<?= $arItem['PROPERTIES']['COLOR']['VALUE_XML_ID']; ?>"
               href="<?= $arItem['PROPERTIES']['LINK']['VALUE']['0'] ?>" target="_blank">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="case__info">
                            <div class="case__top">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="">
                                <div class="case__text"><? echo $arItem["PREVIEW_TEXT"]; ?></div>
                            </div>
                            <div class="case__progress">
                                <? foreach ($arItem['PROPERTIES']['PROGRESS']['VALUE'] as $i => $arVal): ?>
                                    <div class="case__progress-item">
                                        <div class="case__progress-numb"><?= $arVal ?></div>
                                        <div class="case__progress-tx"><?= $arItem['PROPERTIES']['PROGRESS']['DESCRIPTION'][$i] ?></div>
                                    </div>
                                <? endforeach; ?>
                            </div>
                            <ul class="case__list">
                                <? foreach ($arItem['PROPERTIES']['TECH']['VALUE'] as $tech): ?>
                                    <li><?= $tech; ?></li>
                                <? endforeach; ?>
                            </ul>
                            <object>
                                <ul class="case__link">
                                    <? foreach ($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] as $i => $arLink): ?>
                                        <li><a href="<?= $arLink ?>"
                                               target="_blank"><?= $arItem['DISPLAY_PROPERTIES']['LINK']['DESCRIPTION'][$i] ?></a>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            </object>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="case__img">
                            <img src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </a>
        <? endforeach; ?>
        <?if (count($arResult["ITEMS"]) > 4):?>
        <div class="case__btn">
            Показать ещё
        </div>
        <?endif;?>
    </div>
</div>
