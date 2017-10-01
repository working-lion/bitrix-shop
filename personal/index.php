<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заказов");
?>

<?$APPLICATION->IncludeComponent(
  "bitrix:sale.personal.order.list",
  "order_list",
  array(
    "STATUS_COLOR_N" => "green",	// Цвет статуса "Принят, ожидается оплата"
		"STATUS_COLOR_P" => "yellow",
		"STATUS_COLOR_F" => "gray",	// Цвет статуса "Выполнен"
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",	// Цвет отменённых заказов
		"PATH_TO_DETAIL" => "order/order_detail.php?ID=#ID#",	// Страница c подробной информацией о заказе
		"PATH_TO_COPY" => "cart/basket.php",	// Страница повторения заказа
		"PATH_TO_CANCEL" => "order/order_cancel.php?ID=#ID#",	// Страница отмены заказа
		"PATH_TO_BASKET" => "cart/basket.php",	// Страница корзины
		"PATH_TO_PAYMENT" => "",	// Страница подключения платежной системы
		"ORDERS_PER_PAGE" => "20",	// Количество заказов, выводимых на страницу
		"ID" => $ID,	// Идентификатор заказа
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SAVE_IN_SESSION" => "Y",	// Сохранять установки фильтра в сессии пользователя
		"NAV_TEMPLATE" => "",	// Имя шаблона для постраничной навигации
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"HISTORIC_STATUSES" => "F",	// Перенести в историю заказы в статусах
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	),
	false
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
