<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global $APPLICATION
 * @global $arResult
 * @global $arParams
 */
?>

    <div class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="consultation__title">
                        Запишитесь на бесплатную консультацию и узнайте стоимость и сроки разработки вашего проекта
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form" id="form_<?= $arParams['TOKEN'] ?>">
                        <form>
                            <input name="subject" value="Заявка на консультацию по проекту(модальная)" type="hidden">
                            <div class="form__row form__row_flex">
                                <div class="form__cell">
                                    <input name="name" placeholder="Имя" type="text" required>
                                </div>
                                <div class="form__cell">
                                    <input name="phone" placeholder="Телефон" type="tel" required>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__cell">
                                    <textarea name="message" placeholder="Расскажите о вашем проекте"
                                              required></textarea>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__cell">
                                    <button class="button button-primary" type="submit">
                                        <span>Отправить</span></button>
                                    <p>Нажимая «Отправить» вы соглашаетесь с порядком обработки <a
                                                href="/policy/index.php">персональных
                                            данных</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if ($arParams['RECAPTCHA_ENABLED'] === 'Y') {
    include('script.recaptcha.php');
} else {
    include('script.php');
}
