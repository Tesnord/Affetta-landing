<?php

use Bitrix\Main\Application;

include_once("amo/apiAMO.php");
include_once("cookie.php");

define("DEFAULT_TEMPLATE_PATH", '/local/templates/index');

setupModules();
$UF_PHONE = Ion\Settings::getSpaceField("UF_PHONE_NEW", "INFO");
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

function my_OnBeforeEventSend($arFields, $arTemplate)
{
    $request = Application::getInstance()->getContext()->getRequest();
    $utm = array();
    foreach ($request as $key => $item) {
        if (strripos($key, 'utm_') !==false) {
            $utm[$key]=$item;
        }
    }
    sendApiAmo($arFields['NAME'], $arFields['SUBJECT'], $arFields['PHONE'], $arFields['MESSAGE']['TEXT'], $arFields['PAGE'], $utm);
}
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('main', 'OnBeforeEventSend', 'my_OnBeforeEventSend');