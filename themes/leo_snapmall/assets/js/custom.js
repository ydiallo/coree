/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

$(document).ready(function(){
    floatHeader();
    backtotop()
    
    if (prestashop.page.page_name == 'category'){
        setDefaultListGrid();
    }

    if(typeof (products_list_functions) != 'undefined')
    {
        for (var i = 0; i < products_list_functions.length; i++) {
            products_list_functions[i]();
        }
    }
	
	//DONGND:: update for order page - tab adress, when change adress, block adress change class selected
	$('.address-item .radio-block').click(function(){
		if (!$(this).parents('.address-item').hasClass('selected'))
		{
			$('.address-item.selected').removeClass('selected');
			$(this).parents('.address-item').addClass('selected');
		}
	})
	
	//DONGND:: loading quickview
	actionQuickViewLoading();
	
	prestashop.on('updateProductList', function() {
		actionQuickViewLoading();
	});	
});

//DONGND:: loading quickview
function actionQuickViewLoading()
{
	$('.quick-view').click(function(){
		if (!$(this).hasClass('active'))
		{
			$(this).addClass('active');
			$(this).find('.leo-quickview-bt-loading').css({'display':'block'});
			$(this).find('.leo-quickview-bt-content').hide();
			check_active_quickview = setInterval(function(){
				if($('.quickview.modal').length)
				{			
					$('.quickview.modal').on('hide.bs.modal', function (e) {
						$('.quick-view.active').find('.leo-quickview-bt-loading').hide();
						$('.quick-view.active').find('.leo-quickview-bt-content').show();
						$('.quick-view.active').removeClass('active');
					})
					clearInterval(check_active_quickview);
				}
				
			}, 300);
		}
	})
}

$(document).on('click', '.leo_grid', function(e){
    e.preventDefault();
    $('#js-product-list .product_list').removeClass('list');
    $('#js-product-list .product_list').addClass('grid');
    
    $(this).parent().find('.leo_list').removeClass('selected');
    $(this).addClass('selected');

    var configName = LEO_COOKIE_THEME +'_grid_list';
    $.cookie(configName, 'grid', {expires: 1, path: '/'});
});

$(document).on('click', '.leo_list', function(e){
    e.preventDefault();
    $('#js-product-list .product_list').removeClass('grid');
    $('#js-product-list .product_list').addClass('list');
    
    $(this).parent().find('.leo_grid').removeClass('selected');
    $(this).addClass('selected');

    var configName = LEO_COOKIE_THEME +'_grid_list';
    $.cookie(configName, 'list', {expires: 1, path: '/'});
});

function setDefaultListGrid()
{
    if ($.cookie(LEO_COOKIE_THEME +'_grid_list') == 'grid')
    {
        $('.leo_grid').trigger('click');
    }
    if ($.cookie(LEO_COOKIE_THEME +'_grid_list') == 'list')
    {
        $('.leo_list').trigger('click');
    }
}

function processFloatHeader(headerAdd, scroolAction){
	if(headerAdd){
		$("#header").addClass( "navbar-fixed-top" );
		var hideheight =  $("#header").height()+120;
		$("#page").css( "padding-top", $("#header").height() );
		setTimeout(function(){
			$("#page").css( "padding-top", $("#header").height() );
		},200);
	}else{
		$("#header").removeClass( "navbar-fixed-top" );
		$("#page").css( "padding-top", '');
	}

	var pos = $(window).scrollTop();
    if( scroolAction && pos >= hideheight ){
        $(".header-nav").addClass('hide-bar');
        $(".hide-bar").css( "margin-top", - $(".header-nav").height() );
        $("#header").addClass("mini-navbar");
        if(!$('.popup-menu-reseve .leo-verticalmenu').hasClass('active')){
        	$('.popup-menu-reseve .leo-verticalmenu').addClass('active');
        }
    }else {
        $(".header-nav").removeClass('hide-bar');
        $(".header-nav").css( "margin-top", 0 );
        $("#header").removeClass("mini-navbar");
        if($('.popup-menu-reseve .leo-verticalmenu').hasClass('active')){
        	$('.popup-menu-reseve .leo-verticalmenu').removeClass('active');
        }
    }
}

//Float Menu
function floatHeader(){
	if (!$("body").hasClass("keep-header") || $(window).width() <= 990){
		return;
	}
	
	$(window).resize(function(){
		if ($(window).width() <= 990)
		{
			processFloatHeader(0,0);
		}
		else if ($(window).width() > 990)
		{
			if ($("body").hasClass("keep-header"))
				processFloatHeader(1,1);
		}
	});
	var headerScrollTimer;

    $(window).scroll(function() {
    	if(headerScrollTimer) {
	        window.clearTimeout(headerScrollTimer);
	    }

    	headerScrollTimer = window.setTimeout(function() {
	        if (!$("body").hasClass("keep-header")) return;
	        if($(window).width() > 990){
	        	processFloatHeader(1,1);
    		}
	    }, 100);
    });
}

// Back to top
function backtotop(){
	$("#back-top").hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
}


$(document).ready(function(){
    $('.popup-newsletter #block_newsletter .popup-title-newsletter').on('click', function(e) {        
        $('#block_newsletter .popup-content-newsletter').stop().toggle('show',function(){
         	$('.popup-newsletter #block_newsletter').addClass('active');
        });
    });
    $('.popup-newsletter #block_newsletter .close-popup').on('click', function(e) {        
        $('#block_newsletter .popup-content-newsletter').stop().toggle('hide',function(){
         	$('.popup-newsletter #block_newsletter').removeClass('active');
        });
    });
});