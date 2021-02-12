<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetPageProperty("keywords", "Страница не найдена");
$APPLICATION->SetPageProperty("description", "Страница не найдена");
?>

    <div class="container">
        <div class="banner__inner">
            <h1>404</h1>
            <h2>Страница не найдена.</h2>
            <h3><a href="/">Главная страница</a></h3>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>