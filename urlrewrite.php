<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/catalog/([a-zA-Z0-9-_]+)/product_([a-zA-Z0-9-_]+)/?.*#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2",
		"ID" => "bitrix:catalog.element",
		"PATH" => "/catalog/detail.php",
	),
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/catalog/([a-zA-Z0-9-_]+)/?.*#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/catalog/list.php",
	),
	array(
		"CONDITION" => "#^/partner/([a-zA-Z0-9-_]+)?.*#",
		"RULE" => "partnerID=\$1",
		"ID" => "",
		"PATH" => "/partner/list.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/stssync/calendar/#",
		"RULE" => "",
		"ID" => "bitrix:stssync.server",
		"PATH" => "/bitrix/services/stssync/calendar/index.php",
	),
	array(
		"CONDITION" => "#^\\??(.*)#",
		"RULE" => "&\$1",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/catalog/list.php",
	),
	array(
		"CONDITION" => "#^\\??(.*)#",
		"RULE" => "&\$1",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/catalog/index.php",
	),
);

?>