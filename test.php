<?
if (CModule::IncludeModule("iblock")) {

    $arSelect = array("ID", "IBLOCK_ID", "PROPERTY_SERVICES");

    $arFilter = array(
        "IBLOCK_ID" => 8,
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        "!PROPERTY_22_VALUE" => false
    );

    $res = CIBlockElement::GetList(
        array(),
        $arFilter,
        false,
        false,
        $arSelect
    );

    while ($ob = $res->GetNextElement()) {
        $arItem = $ob->GetFields();
        $arItem["PROPERTIES"] = $ob->GetProperties();
        $arResult[] = $arItem;
    }
    print_r($arResult);
}
?>