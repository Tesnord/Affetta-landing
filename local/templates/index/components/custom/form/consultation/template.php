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
                                <textarea name="message" placeholder="Расскажите о вашем проекте" required></textarea>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__cell">
                                <button class="button button-primary" type="submit">
                                    <span>Отправить</span></button>
                                <p>Нажимая «Отправить» вы соглашаетесь с порядком обработки <a href="/policy/index.php">персональных
                                        данных</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    `use strict`

    $(() => {
        $(`#form_<?=$arParams['TOKEN']?>`).hover(() => {
            if (typeof recaptcha === "undefined") {
                const rescript = document.createElement('script');
                rescript.src = `https://www.google.com/recaptcha/api.js?render=<?= $arParams['RECAPTCHA_PUBLIC_KEY'] ?>`
                document.body.append(rescript)
            }
        })

        $(`#form_<?=$arParams['TOKEN']?> button`).click(() => {
            let validate = true

            $(`#form_<?=$arParams['TOKEN']?> *[required]`).each((index, el) => {
                if ($(el).val() === '') {
                    $(el).css('border', '1px solid red')
                    validate = false
                } else if ($(el).is(':not(:checked)') && $(el).is(':checkbox')) {
                    $(el).parent().css('border', '1px solid red')
                    validate = false
                } else {
                    $(el).css('border', 'unset')
                }
            })

            if (validate) {
                grecaptcha.ready(async () => {
                    const retoken = await grecaptcha.execute('<?=$arParams['RECAPTCHA_PUBLIC_KEY']?>', {action: 'feedback'})

                    let data = new FormData

                    data.append(`RECAPTCHA`, retoken)
                    data.append(`TOKEN`, `<?=$arParams['TOKEN']?>`)
                    data.append(`DETAIL_URL`, `<?=$APPLICATION->GetCurDir()?>`)
                    data.append(`SUBJECT`, `<?=$arParams['FORM_NAME']?>`)
                    data.append(`NAME`, $(`#form_<?=$arParams['TOKEN']?> *[name="name"]`).val())
                    data.append(`PHONE`, $(`#form_<?=$arParams['TOKEN']?> *[name="phone"]`).val())
                    data.append(`MESSAGE`, $(`#form_<?=$arParams['TOKEN']?> *[name="message"]`).val())

                    $.ajax({
                        method: `post`,
                        url: `<?=$APPLICATION->GetCurDir()?>`,
                        data: data,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            data = JSON.parse(data)
                            if (data.status === true) {
                                $('#modalThank').modal('show').on('hidden.bs.modal', () => {
                                    location.reload()
                                })
                            } else {
                                // TODO: error modal
                                alert(data.message)
                            }
                        }
                    })
                })
            }
        })
    })
</script>