<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><div class="products_list">
  <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "section_list",
    array(
      "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
  		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
  		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
  		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
  		"ADD_TO_BASKET_ACTION" => "BUY",	// Показывать кнопку добавления в корзину или покупки
  		"AJAX_MODE" => "N",	// Включить режим AJAX
  		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
  		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
  		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
  		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
  		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
  		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
  		"BRAND_PROPERTY" => "-",	// Свойство брендов
  		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
  		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
  		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
  		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
  		"CACHE_TYPE" => "A",	// Тип кеширования
  		"COMPATIBLE_MODE" => "N",	// Включить режим совместимости
  		"CONVERT_CURRENCY" => "Y",	// Показывать цены в одной валюте
  		"CURRENCY_ID" => "RUB",	// Валюта, в которую будут сконвертированы цены
  		"CUSTOM_FILTER" => "",
  		"DATA_LAYER_NAME" => "dataLayer",	// Имя контейнера данных
  		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
  		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
  		"DISCOUNT_PERCENT_POSITION" => "top-right",	// Расположение процента скидки
  		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
  		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
  		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
  		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
  		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
  		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
  		"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
  		"ENLARGE_PROP" => "NEWPRODUCT",
  		"FILTER_NAME" => "",	// Имя массива со значениями фильтра для фильтрации элементов
  		"HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
  		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
  		"IBLOCK_ID" => "4",	// Инфоблок
  		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
  		"INCLUDE_SUBSECTIONS" => "A",	// Показывать элементы подразделов раздела
  		"LABEL_PROP" => "",	// Свойства меток товара
  		"LABEL_PROP_MOBILE" => "",
  		"LABEL_PROP_POSITION" => "top-left",
  		"LAZY_LOAD" => "Y",	// Показать кнопку ленивой загрузки Lazy Load
  		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
  		"LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
  		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
  		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
  		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
  		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
  		"MESS_BTN_LAZY_LOAD" => "Показать ещё",	// Текст кнопки "Показать ещё"
  		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
  		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
  		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
  		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
  		"OFFERS_CART_PROPERTIES" => array(),
  		"OFFERS_FIELD_CODE" => "",
  		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
  		"OFFERS_PROPERTY_CODE" => array(),
  		"OFFERS_SORT_FIELD" => "sort",
  		"OFFERS_SORT_FIELD2" => "id",
  		"OFFERS_SORT_ORDER" => "asc",
  		"OFFERS_SORT_ORDER2" => "desc",
  		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
  		"OFFER_TREE_PROPS" => array(),
  		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
  		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
  		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
  		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
  		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
  		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
  		"PAGER_TITLE" => "Товары",	// Название категорий
  		"PAGE_ELEMENT_COUNT" => "12",	// Количество элементов на странице
  		"PARTIAL_PRODUCT_PROPERTIES" => "Y",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
  		"PRICE_CODE" => array(
				0 => 'BASE_PRICE',
			),	// Тип цены
  		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
  		"PRODUCT_BLOCKS_ORDER" => "props,price,sku,quantityLimit,quantity,buttons,compare",	// Порядок отображения блоков товара
  		"PRODUCT_DISPLAY_MODE" => "Y",
  		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
  		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
  		"PRODUCT_PROPS_VARIABLE" => "prop_count",	// Название переменной, в которой передаются характеристики товара
  		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
  		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
  		"PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
  		"PROPERTY_CODE" => array(
        0 => "ATT_LINE_WIDTH",
      ),// свойтсва
  		"PROPERTY_CODE_MOBILE" => array(),// Свойства товаров, отображаемые на мобильных устройствах
  		"RCM_PROD_ID" => "",	// Параметр ID продукта (для товарных рекомендаций)
  		"RCM_TYPE" => "personal",	// Тип рекомендации
  		"SECTION_CODE" => !empty($_REQUEST["SECTION_CODE"])?$_REQUEST["SECTION_CODE"]:"",	// Код раздела
  		"SECTION_ID" => "",	// ID раздела
  		"SECTION_ID_VARIABLE" => "",	// Название переменной, в которой передается код группы
  		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
  		"SECTION_USER_FIELDS" => array(	// Свойства раздела
  		),
  		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
  		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
  		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
  		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
  		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
  		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
  		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
  		"SHOW_404" => "N",	// Показ специальной страницы
  		"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
  		"SHOW_CLOSE_POPUP" => "Y",	// Показывать кнопку продолжения покупок во всплывающих окнах
  		"SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
  		"SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
  		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
  		"SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
  		"SHOW_PRICE_COUNT" => "",	// Выводить цены для количества
  		"SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
  		"SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
  		"SLIDER_PROGRESS" => "Y",	// Показывать полосу прогресса
  		"TEMPLATE_THEME" => "blue",	// Цветовая тема
  		"USE_ENHANCED_ECOMMERCE" => "Y",	// Отправлять данные электронной торговли в Google и Яндекс
  		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
  		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
  		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
  		"COMPONENT_TEMPLATE" => ".default",
  		"SEF_RULE" => "",	// Правило для обработки
  		"SECTION_CODE_PATH" => "",	// Путь из символьных кодов раздела
  		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
  	),
  	false
  );?>
</div>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
