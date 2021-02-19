<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top-inner">
                <div class="footer__menu">
                    <!-- Меню Главной -->
                    <? if ($APPLICATION->GetCurPage() == '/') :
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "footer",
                                "USE_EXT" => "N"
                            )
                        );
                    endif;
                    //Меню Политики
                    if ($APPLICATION->GetCurPage() != '/') :
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "policy_foot",
                                "USE_EXT" => "N"
                            )
                        );
                    endif; ?>
                </div>
                <div class="footer__news">
                    <div class="footer__news-title">Следите за нами</div>
                    <a class="footer__news-item" href="<?= $GLOBALS['ION_URL_BEH']; ?>" target="_blank">
                        <svg>
                            <use xlink:href="#be"></use>
                        </svg>
                    </a>
                    <a class="footer__news-item" href="<?= $GLOBALS['ION_INSTAGRAM']; ?>" target="_blank">
                        <svg>
                            <use xlink:href="#in"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-inner"><a class="footer__logo" href="http://affetta.affettaok.ru"><img
                            src="<?= DEFAULT_TEMPLATE_PATH ?>/assets/images/svg/logo.svg"
                            alt=""></a>
                <div class="footer__contacts"><a class="footer__contacts-mail"
                                                 href="mailto:<?= $GLOBALS['ION_MAIL']; ?>"><?= $GLOBALS['ION_MAIL']; ?></a>
                    <div class="footer__contacts-all"><a class="footer__contacts-tel"
                                                         href="tel:+<?= $GLOBALS['SOC_PHONE']; ?>"><?= $GLOBALS['ION_PHONE']; ?></a>
                        <a class="footer__contacts-soc" target="_blank"
                           href="https://wa.me/+<?= $GLOBALS['SOC_PHONE']; ?>">
                            <svg>
                                <use xlink:href="#viber"></use>
                            </svg>
                        </a><a class="footer__contacts-soc" href="<?= $GLOBALS['ION_TG']; ?>">
                            <svg>
                                <use xlink:href="#teleg"></use>
                            </svg>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<!-- Форма обратной связи-->
<div class="modal fade" id="modalCall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><img
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/assets/images/svg/close.svg" alt=""></button>
            <div class="modal-body">
                <? $APPLICATION->IncludeComponent(
                    "custom:form",
                    "consultation",
                    array(
                        'IBLOCK_ID' => '7',
                        'MAIL_EVENT' => 'FORM_SENDED',
                        'ACTIVE' => 'Y',
                        'TOKEN' => 'form001',
                        'FORM_NAME' => 'Заявка на консультацию по проекту (модальная)',
                        'PROPS' => array(
                            'NAME', // type - string
                            'SUBJECT',
                            'PHONE', // type - string
                            'MESSAGE', // type - html/text
                            'DETAIL_URL',

                        ),
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>
<div class="modal thank-md fade" id="modalThank" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><img
                        src="<?= DEFAULT_TEMPLATE_PATH ?>/assets/images/svg/close.svg" alt=""></button>
            <div class="modal-body">
                <div class="modal-body-inner">
                    <div class="thank__text"> Спасибо за заявку! Мы скоро<br> свяжемся с вами.</div>
                    <span class="button button-primary" data-dismiss="modal" aria-label="Close">Хорошо</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Форма обратной связи end-->
<?php
$asset = \Bitrix\Main\Page\Asset::getInstance();
$asset->addJs(DEFAULT_TEMPLATE_PATH . '/vendors/jquery/dist/jquery.min.js');
$asset->addJs(DEFAULT_TEMPLATE_PATH . '/vendors/bootstrap/dist/js/bootstrap.min.js');
$asset->addJs(DEFAULT_TEMPLATE_PATH . '/vendors/paroller/jquery.paroller.min.js');
$asset->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/app.js');

?>
<!-- Yandex.Metrika counter 10670140 -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    window.mainMetrikaId = 10670140;
    ym(window.mainMetrikaId, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        ecommerce: "dataLayer"
    }); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/10670140" alt=""/></div>
</noscript> <!-- Yandex.Metrika counter 10670140 -->

</div>