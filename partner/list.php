<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Товары патнёра");
?>

<?
if ($USER->IsAuthorized()) {
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
    $partnerID = $_REQUEST['partnerID'];
    global $partnerProductsFilter;
    $partnerProductsFilter = array(
      "PROPERTY_ATT_PARTNER" => $partnerID,
    );
    ?>
    <h1>Товары партнёра №<?=$partnerID?></h1>
    <div class="products_list partner_products_list">
      <?
      $APPLICATION->IncludeComponent(
        "custom:news.list",
        "partner_products_list",
        array(
          "DISPLAY_DATE" => "Y",	// Выводить дату элемента
      		"DISPLAY_NAME" => "Y",	// Выводить название элемента
      		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
      		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
      		"AJAX_MODE" => "Y",	// Включить режим AJAX
      		"IBLOCK_TYPE" => "catalog",	// Тип информационного блока (используется только для проверки)
      		"IBLOCK_ID" => "4",	// Код информационного блока
      		"NEWS_COUNT" => "20",	// Количество новостей на странице
      		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
      		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
      		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
      		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
      		"FILTER_NAME" => "partnerProductsFilter",	// Фильтр
      		"FIELD_CODE" => array(	// Поля
      			0 => "ID",
            1 => "ACTIVE",
      		),
      		"PROPERTY_CODE" => array(	// Свойства
      			0 => "DESCRIPTION",
      			1 => "ATT_PARTNER",
      		),
      		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
      		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
      		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
      		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
      		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
      		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
      		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
      		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
      		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
      		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
      		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
      		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// Скрывать ссылку, если нет детального описания
      		"PARENT_SECTION" => "",	// ID раздела
      		"PARENT_SECTION_CODE" => !empty($_REQUEST["SECTION_CODE"])?$_REQUEST["SECTION_CODE"]:"",	// Код раздела
      		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
      		"CACHE_TYPE" => "A",	// Тип кеширования
      		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
      		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
      		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
      		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
      		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
      		"PAGER_TITLE" => "Новости",	// Название категорий
      		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
      		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
      		"PAGER_DESC_NUMBERING" => "Y",	// Использовать обратную навигацию
      		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
      		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
      		"PAGER_BASE_LINK_ENABLE" => "Y",	// Включить обработку ссылок
      		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
      		"SHOW_404" => "Y",	// Показ специальной страницы
      		"MESSAGE_404" => "",
      		"PAGER_BASE_LINK" => "",	// Url для построения ссылок (по умолчанию - автоматически)
      		"PAGER_PARAMS_NAME" => "arrPager",	// Имя массива с переменными для построения ссылок
      		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
      		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
      		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
      		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
      	),
      	false
      );?>
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
