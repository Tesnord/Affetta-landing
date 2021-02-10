<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
//echo ' <pre>';print_r($arResult);echo '</pre>';
?>
<div class="banner tw">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12">
                <div class="banner__inner">
                    <h1><?= $arResult['NAME']; ?>
                        <? foreach ($arResult['PROPERTIES']['IMG']['VALUE'] as $i => $arImg): ?>
                            <img src="<?= $arImg ?>" alt="">
                        <? endforeach; ?>
                    </h1>
                    <p><? echo $arResult["PREVIEW_TEXT"]; ?></p>
                    <button
                            class="button button-primary" onclick="Marquiz.showModal('5f367f1d51d1330052bbad60')"><span>Рассчитать стоимость сайта</span>
                    </button>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12">
                <div class="banner__img"><img src="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>" alt=""></div>
            </div>
        </div>
    </div>
</div>
<!--Компонент наград-->
<? $APPLICATION->IncludeComponent(
"bitrix:news.list",
"awards",
array(
"ACTIVE_DATE_FORMAT" => "d.m.Y",
"ADD_SECTIONS_CHAIN" => "Y",
"AJAX_MODE" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "N",
"CACHE_FILTER" => "Y",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "A",
"CHECK_DATES" => "Y",
"DETAIL_URL" => "",
"DISPLAY_BOTTOM_PAGER" => "Y",
"DISPLAY_DATE" => "Y",
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => "Y",
"DISPLAY_PREVIEW_TEXT" => "Y",
"DISPLAY_TOP_PAGER" => "Y",
"FIELD_CODE" => array("ID", ""),
"FILE_404" => "",
"FILTER_NAME" => "",
"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
"IBLOCK_ID" => "1",
"IBLOCK_TYPE" => "-",
"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
"INCLUDE_SUBSECTIONS" => "Y",
"MESSAGE_404" => "",
"NEWS_COUNT" => "15",
"PAGER_BASE_LINK" => "",
"PAGER_BASE_LINK_ENABLE" => "Y",
"PAGER_DESC_NUMBERING" => "Y",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_PARAMS_NAME" => "arrPager",
"PAGER_SHOW_ALL" => "Y",
"PAGER_SHOW_ALWAYS" => "Y",
"PAGER_TEMPLATE" => "",
"PAGER_TITLE" => "Новости",
"PARENT_SECTION" => "",
"PARENT_SECTION_CODE" => "",
"PREVIEW_TRUNCATE_LEN" => "",
"PROPERTY_CODE" => array("", "DESCRIPTION", ""),
"SET_BROWSER_TITLE" => "Y",
"SET_LAST_MODIFIED" => "Y",
"SET_META_DESCRIPTION" => "Y",
"SET_META_KEYWORDS" => "Y",
"SET_STATUS_404" => "Y",
"SET_TITLE" => "N",
"SHOW_404" => "Y",
"SORT_BY1" => "ID",
"SORT_BY2" => "ID",
"SORT_ORDER1" => "ASC",
"SORT_ORDER2" => "ASC",
"STRICT_SECTION_CHECK" => "N"
)
); ?>
<!--Компонент наград end-->
<div class="link-mob">
    <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/svg/scroll.svg" alt="">
</div>
    </div>
<!--Компонент предложений-->
<? $APPLICATION->IncludeComponent(
"bitrix:news.list",
"offer",
array(
"ACTIVE_DATE_FORMAT" => "d.m.Y",
"ADD_SECTIONS_CHAIN" => "Y",
"AJAX_MODE" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "Y",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "36000000",
"CACHE_TYPE" => "A",
"CHECK_DATES" => "Y",
"DETAIL_URL" => "",
"DISPLAY_BOTTOM_PAGER" => "N",
"DISPLAY_DATE" => "Y",
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => "Y",
"DISPLAY_PREVIEW_TEXT" => "Y",
"DISPLAY_TOP_PAGER" => "N",
"FIELD_CODE" => array("NAME", ""),
"FILTER_NAME" => "",
"HIDE_LINK_WHEN_NO_DETAIL" => "N",
"IBLOCK_ID" => "6",
"IBLOCK_TYPE" => "-",
"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
"INCLUDE_SUBSECTIONS" => "Y",
"MESSAGE_404" => "",
"NEWS_COUNT" => "20",
"PAGER_BASE_LINK_ENABLE" => "N",
"PAGER_DESC_NUMBERING" => "N",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "N",
"PAGER_SHOW_ALWAYS" => "N",
"PAGER_TEMPLATE" => ".DEFAULT",
"PAGER_TITLE" => "Новости",
"PARENT_SECTION" => "",
"PARENT_SECTION_CODE" => "",
"PREVIEW_TRUNCATE_LEN" => "",
"PROPERTY_CODE" => array("COLOR", ""),
"SET_BROWSER_TITLE" => "Y",
"SET_LAST_MODIFIED" => "N",
"SET_META_DESCRIPTION" => "Y",
"SET_META_KEYWORDS" => "Y",
"SET_STATUS_404" => "N",
"SET_TITLE" => "N",
"SHOW_404" => "N",
"SORT_BY1" => "ID",
"SORT_BY2" => "ID",
"SORT_ORDER1" => "ASC",
"SORT_ORDER2" => "ASC",
"STRICT_SECTION_CHECK" => "N"
)
); ?>
    <!--Компонент предложений end-->
    <!--Компонент Кейсов-->
<? $APPLICATION->IncludeComponent(
"bitrix:news.list",
"case",
array(
"ACTIVE_DATE_FORMAT" => "d.m.Y",
"ADD_SECTIONS_CHAIN" => "Y",
"AJAX_MODE" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "Y",
"CACHE_FILTER" => "N",
"CACHE_GROUPS" => "Y",
"CACHE_TIME" => "36000000",
"CACHE_TYPE" => "A",
"CHECK_DATES" => "Y",
"DETAIL_URL" => "",
"DISPLAY_BOTTOM_PAGER" => "N",
"DISPLAY_DATE" => "Y",
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => "Y",
"DISPLAY_PREVIEW_TEXT" => "Y",
"DISPLAY_TOP_PAGER" => "N",
"FIELD_CODE" => array("PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PICTURE", ""),
"FILTER_NAME" => "",
"HIDE_LINK_WHEN_NO_DETAIL" => "N",
"IBLOCK_ID" => "4",
"IBLOCK_TYPE" => "-",
"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
"INCLUDE_SUBSECTIONS" => "Y",
"MESSAGE_404" => "",
"NEWS_COUNT" => "20",
"PAGER_BASE_LINK_ENABLE" => "N",
"PAGER_DESC_NUMBERING" => "N",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "N",
"PAGER_SHOW_ALWAYS" => "N",
"PAGER_TEMPLATE" => "-",
"PAGER_TITLE" => "Новости",
"PARENT_SECTION" => "",
"PARENT_SECTION_CODE" => "",
"PREVIEW_TRUNCATE_LEN" => "",
"PROPERTY_CODE" => array("LINK", "TECH", "COLOR", ""),
"SET_BROWSER_TITLE" => "Y",
"SET_LAST_MODIFIED" => "N",
"SET_META_DESCRIPTION" => "Y",
"SET_META_KEYWORDS" => "Y",
"SET_STATUS_404" => "N",
"SET_TITLE" => "N",
"SHOW_404" => "N",
"SORT_BY1" => "ID",
"SORT_BY2" => "SORT",
"SORT_ORDER1" => "ASC",
"SORT_ORDER2" => "ASC",
"STRICT_SECTION_CHECK" => "N"
)
); ?>
    <!--Компонент Кейсов end-->
<div class="brands" id="brands">
    <h2> Нам доверяют</h2>
    <div class="brands__inner">
        <div class="brands__paroller mega"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brands.png" alt="">
        </div>
        <div class="brands__inner-mob">
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob1.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob2.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob3.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob4.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob5.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob6.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob7.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob8.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob9.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob10.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob11.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob12.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob13.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob14.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob15.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob16.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob17.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob18.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob19.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob20.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob21.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob22.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob23.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob24.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob25.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob26.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob27.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob28.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob29.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob30.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob31.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob32.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob33.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob34.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob35.jpg"
                                                     alt=""></div>
            <div class="brands__inner-mob-item"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/brand-mob36.jpg"
                                                     alt=""></div>
        </div>
    </div>
    <div class="brands__btn"><span>Показать ещё</span></div>
    <div class="button-center">
        <button
                class="button button-primary" onclick="Marquiz.showModal('5f367f1d51d1330052bbad60')"><span>Рассчитать стоимость сайта</span>
        </button>
    </div>
</div>
    <!--Компонент Технологий-->
<? $APPLICATION->IncludeComponent(
"bitrix:news.list",
"technology",
array(
"DISPLAY_DATE" => "Y",
"DISPLAY_NAME" => "Y",
"DISPLAY_PICTURE" => "Y",
"DISPLAY_PREVIEW_TEXT" => "Y",
"AJAX_MODE" => "N",
"IBLOCK_TYPE" => "-",
"IBLOCK_ID" => "5",
"NEWS_COUNT" => "20",
"SORT_BY1" => "ID",
"SORT_ORDER1" => "DESC",
"SORT_BY2" => "ID",
"SORT_ORDER2" => "ASC",
"FILTER_NAME" => "",
"FIELD_CODE" => array(
0 => "",
1 => "",
),
"PROPERTY_CODE" => array(
0 => "",
1 => "",
),
"CHECK_DATES" => "Y",
"DETAIL_URL" => "",
"PREVIEW_TRUNCATE_LEN" => "",
"ACTIVE_DATE_FORMAT" => "d.m.Y",
"SET_TITLE" => "N",
"SET_BROWSER_TITLE" => "Y",
"SET_META_KEYWORDS" => "Y",
"SET_META_DESCRIPTION" => "Y",
"SET_LAST_MODIFIED" => "Y",
"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
"ADD_SECTIONS_CHAIN" => "Y",
"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
"PARENT_SECTION" => "",
"PARENT_SECTION_CODE" => "",
"INCLUDE_SUBSECTIONS" => "Y",
"CACHE_TYPE" => "A",
"CACHE_TIME" => "3600",
"CACHE_FILTER" => "Y",
"CACHE_GROUPS" => "Y",
"DISPLAY_TOP_PAGER" => "N",
"DISPLAY_BOTTOM_PAGER" => "N",
"PAGER_TITLE" => "Новости",
"PAGER_SHOW_ALWAYS" => "N",
"PAGER_TEMPLATE" => ".DEFAULT",
"PAGER_DESC_NUMBERING" => "Y",
"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
"PAGER_SHOW_ALL" => "Y",
"PAGER_BASE_LINK_ENABLE" => "Y",
"SET_STATUS_404" => "Y",
"SHOW_404" => "Y",
"MESSAGE_404" => "",
"PAGER_BASE_LINK" => "",
"PAGER_PARAMS_NAME" => "arrPager",
"AJAX_OPTION_JUMP" => "N",
"AJAX_OPTION_STYLE" => "N",
"AJAX_OPTION_HISTORY" => "N",
"AJAX_OPTION_ADDITIONAL" => "",
"COMPONENT_TEMPLATE" => "offer",
"STRICT_SECTION_CHECK" => "N",
"FILE_404" => ""
),
false
); ?>
    <!--Компонент Технологий end-->

    <!--Компонент формы-->
<?php /*$APPLICATION->IncludeComponent(
    "custom:form",
    "consultation_policy",
    array(
        'IBLOCK_ID' => '7',
        'MAIL_EVENT' => 'FORM_SENDED',
        'ACTIVE' => 'Y',
        'TOKEN' => 'form001',
        'FORM_NAME' => 'Заявка на бесплатную консультацию',
        'PROPS' => array(
            'NAME', // type - string
            'PHONE', // type - string
            'MESSAGE,TEXT', // type - html/text
        ),
    )
); */ ?>
<div class="person">
    <div class="container">
        <div class="person__inner">
            <div class="person__img"><img class="img-fluid" src="<?= DEFAULT_TEMPLATE_PATH; ?>/assets/images/person.png"
                                          alt=""></div>
            <div class="person__text">
                <div class="person__title"></div>
                <div class="person__title">Ибрагим — основатель компании</div>
                <div class="person__item">
                    <div class="person__item-title">Для обсуждения проекта звоните</div>
                    <a class="person__item-link phone_ym"
                       href="tel:+<?= $GLOBALS['SOC_PHONE']; ?>"><?= $GLOBALS['UF_PHONE']; ?></a>
                </div>
                <div class="person__item">
                    <div class="person__item-title">или пишите, везде ответим :)</div>
                    <a class="person__item-link person__item-link-soc wp_ym"
                       href="https://wa.me/+<?= $GLOBALS['SOC_PHONE']; ?>">
                        Ватсап
                        <svg>
                            <use xlink:href="#viber"></use>
                        </svg>
                    </a><a class="person__item-link person__item-link-soc tg_ym"
                           href="<?= $GLOBALS['UF_TG']; ?>">
                        Телеграм
                        <svg>
                            <use xlink:href="#teleg"></use>
                        </svg>
                    </a>
                </div>
                <div class="person__item">
                    <div class="person__item-title">
                        <?= $GLOBALS['UF_COMPANY']; ?>
                    </div>
                    <div class="person__item-title">
                        ИНН:<?= $GLOBALS['UF_INN']; ?>
                    </div>
                    <div class="person__item-title">
                        <?= $GLOBALS['UF_ADDRESS']; ?>
                    </div>
                </div>
                <div class="person__bottom">
                    <button
                            class="button button-primary" onclick="Marquiz.showModal('5f367f1d51d1330052bbad60')">
                        <span>Рассчитать стоимость сайта</span></button>
                    <a
                            class="person__bottom-mail"
                            href="mailto:<?= $GLOBALS['UF_MAIL']; ?>"><?= $GLOBALS['UF_MAIL']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="consultation_policy">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="consultation__title">
                    Запишитесь на бесплатную консультацию и узнайте стоимость и сроки разработки вашего проекта
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form">
                    <form>
                        <input name="subject" value="Заявка на консультацию по проекту (обычная)" type="hidden">
                        <div class="form__row form__row_flex">
                            <div class="form__cell">
                                <input name="name" placeholder="Имя" type="text">
                            </div>
                            <div class="form__cell">
                                <input name="number" placeholder="Телефон" type="tel">
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__cell">
                                <textarea name="about" placeholder="Расскажите о вашем проекте"
                                          type="about"></textarea>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__cell">
                                <button class="button button-primary" type="submit">Отправить</button>
                                <p>
                                    Нажимая «Отправить» вы соглашаетесь с порядком обработки <a
                                            href="/politika/index.php">персональных
                                        данных</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->