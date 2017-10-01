<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");
?>

<?$APPLICATION->IncludeComponent(
  "bitrix:sale.personal.profile.detail",
  "",
  array(
    "COMPATIBLE_LOCATION_MODE" => "N",
    "PATH_TO_LIST" => "profile_list.php",
    "PATH_TO_DETAIL" => "profile_detail.php?ID=#ID#",
    "ID" => $ID,
    "USE_AJAX_LOCATIONS" => "Y",
    "SET_TITLE" => "Y"
  )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
