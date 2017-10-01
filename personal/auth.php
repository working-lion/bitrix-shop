<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заказов");
?>

<?$APPLICATION->IncludeComponent(
  "bitrix:system.auth.form",
  "",
  array(
    "REGISTER_URL" => "register.php",
    "FORGOT_PASSWORD_URL" => "forgot_pass.php",
    "PROFILE_URL" => "profile.php",
    "SHOW_ERRORS" => "Y"
   )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
