<?
define("NO_KEEP_STATISTIC", true);
define("NO_AGENT_CHECK", true);
define('PUBLIC_AJAX_MODE', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$_SESSION["SESS_SHOW_INCLUDE_TIME_EXEC"]="N";
$APPLICATION->ShowIncludeStat = false;

//проверяем подключение модуля "каталог"
if(!CModule::IncludeModule("catalog"))
{
  echo -1;
  return;
}

//проверяем, что id товара передан
// if(empty($_POST['productID'])){
//   echo -1;
//   return;
// }

//получаем id товара
$productID = $_POST['productID'];
$action = $_POST['action'];
//получаем товар
//$arProduct = CIBlockElement::GetByID($productID);

$elem = new CIBlockElement();

$result = $elem->Update(
  $productID,
  array(
    'ACTIVE' => $action == 'Y' ? 'Y' : 'N'
  )
);

echo json_encode($result);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
