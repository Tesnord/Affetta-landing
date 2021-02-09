<?php

define("DEFAULT_TEMPLATE_PATH", '/local/templates/index');

setupModules();
$UF_PHONE = Ion\Settings::getSpaceField("UF_PHONE", "INFO");
$UF_MAIL = Ion\Settings::getSpaceField("UF_MAIL", "INFO");
$UF_URL_BEH = Ion\Settings::getSpaceField("UF_URL_BEH", "INFO");
$UF_INSTAGRAM = Ion\Settings::getSpaceField("UF_URL_INST", "INFO");
$UF_TG = Ion\Settings::getSpaceField("UF_TG", "INFO");
$UF_COMPANY = Ion\Settings::getSpaceField("UF_COMPANY", "INFO");
$UF_INN  = Ion\Settings::getSpaceField("UF_INN", "INFO");
$UF_ADDRESS = Ion\Settings::getSpaceField("UF_ADDRESS", "INFO");
$SOC_PHONE = preg_replace('/\W/', '', $GLOBALS['UF_PHONE']);

function setupModules(): void
{
    if (!Bitrix\Main\Loader::includeModule("main")) {
        throw new RuntimeException("Module \"main\" unavailable");
    }

    if (!Bitrix\Main\Loader::includeModule("ion")) {
        throw new RuntimeException("Module \"ion\" unavailable");
    }

    if (!Bitrix\Main\Loader::includeModule("iblock")) {
        throw new RuntimeException("Module \"iblock\" unavailable");
    }
}

