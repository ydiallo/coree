$(document).ready(function() {

    var menu = $('#index .leo-verticalmenu');

    function checkWidth() {
        var windowsize = $(window).width();
        if ((windowsize <= 1700) && (windowsize >= 992)) {
            if(!menu.hasClass('active')){
        	   menu.addClass('active');
            }else{
                return;
            }
        }
    }

    checkWidth();
    $(window).resize(function(){
        checkWidth()
    });
});