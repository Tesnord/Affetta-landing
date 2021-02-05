<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top-inner">
                <div class="footer__menu">
                    <ul>
                        <li><a href="#case">Работы</a></li>
                        <li><a href="#brands">Нам доверяют</a></li>
                        <li><a href="#technology">Технологии</a></li>
                        <li><a href="#offer">Умеем и предлагаем</a></li>
                    </ul>
                </div>
                <div class="footer__news">
                    <div class="footer__news-title">Следите за нами</div>
                    <a class="footer__news-item" href="https://www.behance.net/affetta" target="_blank">
                        <svg>
                            <use xlink:href="#be"></use>
                        </svg>
                    </a><a class="footer__news-item" href="https://www.instagram.com/affetta.ru/" target="_blank">
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
            <div class="footer__bottom-inner"><a class="footer__logo" href="#"><img src="<?=SITE_TEMPLATE_PATH ?>/assets/images/svg/logo.svg"
                                                                                    alt=""></a>
                <div class="footer__contacts"><a class="footer__contacts-mail" href="mailto:manager@affetta.ru">manager@affetta.ru</a>
                    <div class="footer__contacts-all"><a class="footer__contacts-tel" href="tel:+79186663547">+7
                            (918) 666-35-47</a><a class="footer__contacts-soc" href="https://wa.me/+79186663547">
                            <svg>
                                <use xlink:href="#viber"></use>
                            </svg>
                        </a><a class="footer__contacts-soc" href="https://t.me/+79186663547">
                            <svg>
                                <use xlink:href="#teleg"></use>
                            </svg>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</footer>&lt;!&ndash; Modal &ndash;&gt;
<div class="modal fade" id="modalCall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><img
                        src="<?=SITE_TEMPLATE_PATH ?>/assets/images/svg/close.svg" alt=""></button>
            <div class="modal-body">
                <div class="consultation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="consultation__title">Запишитесь на бесплатную консультацию и узнайте
                                    стоимость и сроки разработки вашего проекта
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form">
                                    <form>
                                        <input name="subject" value="Заявка на консультацию по проекту(модальная)"
                                               type="hidden">
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
                                                    <textarea name="about"
                                                              placeholder="Расскажите о вашем проекте" type="about"></textarea>
                                            </div>
                                        </div>
                                        <div class="form__row">
                                            <div class="form__cell">
                                                <button class="button button-primary" type="submit">
                                                    <span>Отправить</span></button>
                                                <p>Нажимая «Отправить» вы соглашаетесь с порядком обработки <a
                                                            href="#">персональных данных</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal thank-md fade" id="modalThank" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><img  src="<?=SITE_TEMPLATE_PATH ?>/assets/images/svg/close.svg" alt=""></button>
            <div class="modal-body">
                <div class="modal-body-inner">
                    <div class="thank__text"> Спасибо за заявку! Мы скоро<br> свяжемся с вами.</div><a class="button button-primary" href="#">Хорошо</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $asset = \Bitrix\Main\Page\Asset::getInstance();
    $asset->addJs(SITE_TEMPLATE_PATH.'vendors/jquery/dist/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'vendors/bootstrap/dist/js/bootstrap.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'vendors/paroller/jquery.paroller.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'assets/js/app.js');

?>
&lt;!&ndash; Yandex.Metrika counter 10670140 &ndash;&gt;
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
</noscript> &lt;!&ndash; /Yandex.Metrika counter &ndash;&gt;

</div>
