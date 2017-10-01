<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
//домашняя страница или нет
$isHomePage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<!-- файлы стилей -->
		<?$APPLICATION->SetAdditionalCSS('/bitrix/css/main/font-awesome.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');?>

		<!-- библиотека JQ -->
		<?$APPLICATION->AddHeadScript('//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js');?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<header>
			<div class="header_top">
				<div class="container">
					<nav class="top_menu">
						<button class="c-hamburger c-hamburger--htx">
							<span>toggle menu</span>
						</button>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"main_menu",
							array(
								"COMPONENT_TEMPLATE" => "main_menu",
								"ROOT_MENU_TYPE" => "top",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "3",
								"CHILD_MENU_TYPE" => "top",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							),
							false
							);?>
					</nav>
				</div>
			</div>
			<div class="header_bottom">
				<div class="container">
					<div class="header_contacts">
						<?$APPLICATION->IncludeFile(
							"/include/header_contacts.php",
							array(),
							array(
								'MODE' => 'HTML'
							)
						);?>
					</div>
					<div class="logo">
						<?if($isHomePage):?>
						<span class="logo">
							<img src="<?=SITE_TEMPLATE_PATH.'/img/logo.png'?>" alt="bitrix-shop.local">
						</span>
						<?else:?>
						<a href="/" class="logo">
							<img src="<?=SITE_TEMPLATE_PATH.'/img/logo.png'?>" alt="bitrix-shop.local">
						</a>
						<?endif;?>
					</div>
					<div class="header_search_container">
						<?$APPLICATION->IncludeComponent(
							"bitrix:search.form",
							"header_search_form",
							array(
								"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
								"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
							),
							false
						);?>
					</div>
					<div class="header_text">
						<?$APPLICATION->IncludeFile(
							"/include/slogan.php",
							array(),
							array(
								'MODE' => 'HTML'
							)
						);?>
					</div>
					<div class="cart_container">
						<?$APPLICATION->IncludeComponent(
							"bitrix:sale.basket.basket.line",
							"basket",
							array(
								"HIDE_ON_BASKET_PAGES" => "N",	// Не показывать на страницах корзины и оформления заказа
								"PATH_TO_BASKET" => SITE_DIR."personal/cart/basket.php",	// Страница корзины
								"PATH_TO_ORDER" => SITE_DIR."personal/order/order.php",	// Страница оформления заказа
								"PATH_TO_PERSONAL" => SITE_DIR."personal/index.php",	// Страница персонального раздела
								"PATH_TO_PROFILE" => SITE_DIR."personal/profile.php",	// Страница профиля
								"PATH_TO_REGISTER" => SITE_DIR."personal/register.php",	// Страница регистрации
								"PATH_TO_AUTH" => SITE_DIR."personal/auth.php",	// Страница регистрации
								"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
								"POSITION_HORIZONTAL" => "right",
								"POSITION_VERTICAL" => "top",
								"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
								"SHOW_DELAY" => "N",	// Показывать отложенные товары
								"SHOW_EMPTY_VALUES" => "Y",	// Выводить нулевые значения в пустой корзине
								"SHOW_IMAGE" => "N",	// Выводить картинку товара
								"SHOW_NOTAVAIL" => "N",	// Показывать товары, недоступные для покупки
								"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
								"SHOW_PERSONAL_LINK" => "Y",	// Отображать персональный раздел
								"SHOW_PRICE" => "Y",	// Выводить цену товара
								"SHOW_PRODUCTS" => "Y",	// Показывать список товаров
								"SHOW_SUMMARY" => "Y",	// Выводить подытог по строке
								"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
							),
							false
						);?>
					</div>
				</div>
			</div>
		</header>
		<div class="content site">
			<div class="container">
				<div class="left_block left">
					<div class="left_menu_container ">
						<div class="block_header">
							<a href="/catalog/">Каталог ручек</a>
						</div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"left_menu",
							array(
								"COMPONENT_TEMPLATE" => "left_menu",
								"ROOT_MENU_TYPE" => "left",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
					</div>
				</div>
				<div class="site_content right">
					<?if(!$isHomePage):?>
					<div class="breadcrumbs">
						<?$APPLICATION->IncludeComponent(
							"bitrix:breadcrumb",
							"breadcrumb",
							array(
							"COMPONENT_TEMPLATE" => ".default",
								"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
								"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
								"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
							),
							false
						);?>
					</div>
					<?endif;?>
					<?if($isHomePage):?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"main_slider",
						array(
							"DISPLAY_DATE" => "N",	// Выводить дату элемента
							"DISPLAY_NAME" => "Y",	// Выводить название элемента
							"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
							"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
							"IBLOCK_ID" => "2",	// Код информационного блока
							"NEWS_COUNT" => "20",	// Количество новостей на странице
							"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
							"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
							"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
							"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
							"FILTER_NAME" => "",	// Фильтр
							"FIELD_CODE" => array(	// Поля
								0 => "NAME",
								2 => "PREVIEW_PICTURE",
								3 => "PREVIEW_TEXT",
							),
							"PROPERTY_CODE" => "",	// Свойства
							"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
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
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
							"PARENT_SECTION" => "",	// ID раздела
							"PARENT_SECTION_CODE" => "",	// Код раздела
							"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
							"CACHE_GROUPS" => "Y",	// Учитывать права доступа
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
							"PAGER_TITLE" => "",	// Название категорий
							"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
							"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
							"PAGER_DESC_NUMBERING" => "Y",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
							"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
							"SET_STATUS_404" => "Y",	// Устанавливать статус 404
							"SHOW_404" => "Y",	// Показ специальной страницы
							"MESSAGE_404" => "",
							"PAGER_BASE_LINK" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						),
						false
					);?>

					<?endif;?>
