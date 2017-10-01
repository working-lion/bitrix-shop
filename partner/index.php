<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнёрский кабинет");
?>

<?
if(!isset($USER)){
  global $USER;
}
//если пользователь авторизован
if ($USER->IsAuthorized())
{
  //получаем id пользователя
  $userID = $USER->GetID();
  //получаем список партнёров
  $arSelect = array("ID", "NAME");
  $arFilter = array(
    "IBLOCK_ID" => 5,
    "PROPERTY_OPERATOR" => $userID,
  );
  $arPartners = CIBlockElement::GetList(
    array("SORT"=>"ASC"),
    $arFilter,
    false,
    array("nPageSize"=>10),
    array()
  );
  if(!empty($arPartners->arResult)) {
    ?>
    <div class="partners_list">
      <?
      foreach ($arPartners->arResult as $key => $partner) {
        echo
        '<div class="row col-md-12 col-sm-12">
          <a class="sale-order-list-link sale-order-list-partner-link" href="/partner/' . $partner["ID"] . '">' . $partner["NAME"] . '</a>
        </div>';
      }
      ?>
    </div>
    <?
  }
  else {
    ShowError("Вы не являетесь оператором ни у одного партнёра!");
  }

}
else {
  ShowError("Доступ запрещёт!");
}
?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
