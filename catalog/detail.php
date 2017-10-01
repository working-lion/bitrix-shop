<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element",
	"catalog_detail",
	array(
		"COMPONENT_TEMPLATE" => "catalog_detail",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"SHOW_DEACTIVATED" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"PROPERTY_CODE" => array(
			0 => "ATT_WEIGHT",
			1 => "ATT_LENGTH",
			2 => "ATT_LINE_WIDTH",
			3 => "ATT_PARTNER",
			4 => "ATT_PRICE",
		),
		"BACKGROUND_IMAGE" => "-",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"MAIN_BLOCK_PROPERTY_CODE" => array(
		),
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => array(
		),
		"DISPLAY_NAME" => "Y",
		"IMAGE_RESOLUTION" => "1by1",
		"SHOW_SLIDER" => "Y",
		"DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"ADD_DETAIL_TO_SLIDER" => "N",
		"DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"PRODUCT_SUBSCRIPTION"   => "N",
		"SHOW_DISCOUNT_PERCENT"  => "N",
		"SHOW_OLD_PRICE"         => "N",
		"SHOW_MAX_QUANTITY"      => "N",
		"SHOW_CLOSE_POPUP"       => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"USE_VOTE_RATING" => "N",
		"USE_COMMENTS" => "N",
		"BRAND_USE" => "N",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "",
		"CHECK_SECTION_ID_VARIABLE" => "N",
		"SEF_MODE" => "Y",
		"SEF_RULE" => "",
		"ELEMENT_ID" => "",
		"ELEMENT_CODE" => !empty($_REQUEST["ELEMENT_CODE"]) ? $_REQUEST["ELEMENT_CODE"] : "",
		"SECTION_ID" => "",
		"SECTION_CODE" => !empty($_REQUEST["SECTION_CODE"]) ? $_REQUEST["SECTION_CODE"] : "",
		"SECTION_CODE_PATH" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"DISPLAY_COMPARE" => "N",
		"PRICE_CODE" => array(
			0 => "BASE_PRICE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "N",
		"USE_RATIO_IN_RANGES" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "N",
		"USE_ELEMENT_COUNTER" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"SET_VIEWED_IN_COMPONENT" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"SLIDER_INTERVAL" => "5000",
		"SLIDER_PROGRESS" => "N"
	),
	false
);?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");