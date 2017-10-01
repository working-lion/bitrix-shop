$(document).ready(function() {

	/*большой слайдер на главной*/
	$('.main_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		infinite: false,
		autoplay: true,
		autoplaySpeed: 3000,
		variableWidth: false,
		fade: true
	});

	/*TEST*/
	$(document).on('click', 'a.product-item-detail-tab-link', function() {
		console.log('click!');
	});

	/*Кнопка закрыть форму*/
	$(document).on('click', '.close, div#overlay', function() {
		$("div#overlay").fadeOut('slow');
		$(".modal_form:visible").fadeOut('slow');
	});

	$(document).on('click', '.close, div#overlay', function() {
		$("div#overlay").fadeOut('slow');
		$("#modal_form").fadeOut('slow');
		$("#waitlist_form").fadeOut('slow');
		return false;
	});

	//от сих-----------------

	function updateProductStatus (productID, action) {
		BX.ajax({
      url: '/local/templates/bitrix_shop/ajax/activation.php',
      data: {
				'productID': productID,
				'action': action
			},
      method: 'POST',
      dataType: 'json',
      timeout: 30,
      async: true,
      processData: true,
      scriptsRunFirst: true,
      emulateOnload: true,
      start: true,
      cache: false,
      onsuccess: function(data){
        alert('Статус товара успешно не изменён!');
				var elemId = '#bx_' + productID;
				updateProductItemHtml(elemId, action);
      },
      onfailure: function(data){
				alert('Ошибка! Статус товара не изменён!');
			}
    });
	}
	//обновляет текст кнопки и свойства 'active'
	function updateProductItemHtml(elemId, action) {
		var btnText = '',//текст кнопки (Активировать/Деактивировать)
				propertyActiveText = '',//свойство 'active'
				dataActive = '';//сначение атрибута 'data-active'
		if(action == 'Y') {
			btnText = 'Деактивировать';
			propertyActiveText = 'Y';
			dataActive = 'N';
		}
		else {
			btnText = 'Активировать';
			propertyActiveText = 'N';
			dataActive = 'Y';
		}
		//обновляем текст кнопки
		$(elemId).attr('data-active', dataActive)
		$(elemId).find('.js_action_bt').text(btnText);
		//обновляем классы кнопки
		$(elemId).find('.js_action_bt').toggleClass('deactivate_bt');
		//обновляем свойство active
		$(elemId).find('.properti_active span.property_value').text(propertyActiveText);
		//обновляем классы свойства active
		$(elemId).find('.properti_active span.property_value_action').toggleClass('property_value_action_active');
	};

	/*активация товара*/
	$(document).on('click', '.js_action_bt', function() {
		var productID = $(this).closest('.partner-product-item').attr('data-id');
		var action = $(this).closest('.partner-product-item').attr('data-active');
		updateProductStatus(productID, action);
	});

	//до сих----------;)
});
