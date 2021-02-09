<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//echo ' <pre>';print_r($arResult['ITEMS']['0']);echo '</pre>';

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
                <div class="form id=" form_<?= $arParams['TOKEN'] ?>"">
                <form>
                    <input name="subject" value="Заявка на консультацию по проекту(модальная)" type="hidden">
                    <div class="form__row form__row_flex">
                        <div class="form__cell">
                            <input name="name" placeholder="Имя" type="text" id="name_<?= $arParams['TOKEN'] ?>" required>
                        </div>
                        <div class="form__cell">
                            <input name="number" placeholder="Телефон" type="tel" id="phone_<?= $arParams['TOKEN'] ?>" required>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__cell">
                            <textarea name="about" placeholder="Расскажите о вашем проекте" type="about" id="message_<?= $arParams['TOKEN'] ?>" required></textarea>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__cell">
                            <button class="button button-primary" type="submit" id="button_<?= $arParams['TOKEN'] ?>">
                                <span>Отправить</span></button>
                            <p>Нажимая «Отправить» вы соглашаетесь с порядком обработки <a href="/politika/index.php">персональных данных</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    `use strict`;

    $(() => {
        $(`#button_<?=$arParams['TOKEN']?>`).click(e => {
            e.preventDefault();
            let status = true;
            $(`#form_<?=$arParams['TOKEN']?>`).find(`*[required]`).each((index, el) => {
                if ($(el).val() === ``) {
                    $(el).removeClass(`is-valid`);
                    $(el).addClass(`is-invalid`);
                    status = false
                } else {
                    $(el).addClass(`is-valid`);
                    $(el).removeClass(`is-invalid`);
                }
            });
            if (status) {
                let file_input = $(`#file_<?=$arParams['TOKEN']?>`);
                let data = new FormData;
                data.append(`TOKEN`, `<?=$arParams['TOKEN']?>`);
                data.append(`NAME`, $(`#name_<?=$arParams['TOKEN']?>`).val());
                data.append(`PHONE`, $(`#phone_<?=$arParams['TOKEN']?>`).val());
                data.append(`MESSAGE`, $(`#message_<?=$arParams['TOKEN']?>`).val());
                data.append(`DETAIL_URL`, `<?=$APPLICATION->GetCurDir()?>`);
                $.ajax({
                    method: `post`,
                    url: `<?=$APPLICATION->GetCurDir()?>`,
                    data: data,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        data = JSON.parse(data);
                        if (data.status == true) {
                            $('#modalThank').modal('show').on('hidden.bs.modal', ()=>{location.reload()})
                        }
                    }
                });
            }
        });
    });
</script>