<?php
/**
 * @global $APPLICATION
 * @global $arResult
 * @global $arParams
 */
?>

<script type="application/javascript">
    `use strict`
    $(() => {
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
                let data = new FormData

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
            }
        })
    })
</script>