<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заказов");
?>

<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.detail","",Array(
    "PATH_TO_LIST" => "index.php",
    "PATH_TO_CANCEL" => "order_cancel.php",
    "PATH_TO_PAYMENT" => "",
    "PATH_TO_COPY" => "/personal/cart/basket.php",
    "ID" => $ID,
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_GROUPS" => "Y",
    "SET_TITLE" => "Y",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "PICTURE_WIDTH" => "110",
    "PICTURE_HEIGHT" => "110",
    "PICTURE_RESAMPLE_TYPE" => "1",
    "CUSTOM_SELECT_PROPS" => array(),
    "PROP_1" => Array(),
    "PROP_2" => Array()
  )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
