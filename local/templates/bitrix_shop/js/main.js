$(document).ready(function(e) {
$('.bxslider').bxSlider({
  pagerCustom: '#bx-pager'
});
$('.bx-slider').bxSlider({
	slideWidth:315,
	minSlides: 0,
	maxSlides: 8,
	moveSlides: 1,
	slideMargin:17,
	infiniteLoop: false,
	hideControlOnEnd: true 	
});

$('.port-slider').bxSlider({
	auto:true,
	hideControlOnEnd: true,	
	pager:false,
	adaptiveHeight:true,
});
$(function () {
    var tabContainers = $('div.tabs > div');
    tabContainers.hide().filter(':first').show();
    
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide(); 
        tabContainers.filter(this.hash).show(); 
        $('div.tabs ul.tabNavigation a').removeClass('selected'); 
        $(this).addClass('selected'); 
        return false;
    }).filter(':first').click();
});
});


function initScrollers() {
		var time = 700;
	
		$(".items-scroller").each(function(index, element) {

			var itemsPane = $(this);
			var itemPerScreen = itemsPane.data("item-per-screen");
			var controls = itemsPane.data("controls");
			
			if (!itemPerScreen) itemPerScreen = 5;
			
			var currentItem = 0;
			var	totalItems = $(this).find(".item").length;

			//next
			$(".control-next"+"."+controls).click(function(e) {
				e.preventDefault();
				currentItem = currentItem + itemPerScreen;
				if (currentItem > totalItems-1 || totalItems-1-currentItem < itemPerScreen ) currentItem = totalItems-1;
				itemsPane.scrollTo('.item:eq('+currentItem+')',time)
			});
	
			//prev
			$(".control-prev"+"."+controls).click(function(e) {
				e.preventDefault();
				if (currentItem == totalItems-1) currentItem = currentItem - itemPerScreen*2+1;
				else currentItem = currentItem - itemPerScreen;
				
				if (currentItem <= 0) { currentItem = 0;itemsPane.scrollTo(0,time)}
				else itemsPane.scrollTo('.item:eq('+currentItem+')',time)
	
			});	
			
            
        });
	
}




function initShopLikes(){
	$(".shop-like").click(function(e) {
		var self = this;
		if ($(this).hasClass("active")) $(this).removeClass("active").removeClass("animate") 
		else { 
			$(this).addClass("animate");
			setTimeout(function() { $(self).addClass("active") }, 50)
		;};
		/* другие возможные действия */
    });
}

/*
*
* 		Инструмент отладки. Создает окошко, в которое выводит данные.
*/

function echo(text){
	var debugWindow =  $("#debug-window");
	if (!debugWindow.length)  {
			debugWindow = $('<div id="debug-window"></div>');
		 $("body").append( $('<div id="debug-window-container"></div>').append(debugWindow)  ).append("<style>\
		 #debug-window-container{ \
			position: fixed; \
			right: 10px; \
			bottom:0px; \
			width: 390px; \
			height: 200px; \
			z-index: 100000;\
			background-color: #000; \
			display: table-cell; \
			padding: 20px; \
			overflow:scroll; \
		} \
		\
		\
		#debug-window {\
			position:absolute;\
			bottom:0;\
			padding:20px;\
		}\
		 \
	</style>");
	}
	$("#debug-window").append(text+"<br>");
}


function getRandomInt (min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}