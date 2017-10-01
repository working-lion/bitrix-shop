<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заказов");
?>

<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.cancel","",Array(
    "PATH_TO_LIST" => "index.php",
    "PATH_TO_DETAIL" => "order_detail.php?ID=#ID#",
    "ID" => $ID,
    "SET_TITLE" => "Y"
  )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
