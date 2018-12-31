(function($) {
    "use strict"; // Start of use strict

    //===Mobile View===
    //if ($(window).width() <= 767)
    if ($(window).width() >= 320 && $(window).width() <= 767) {

        //$('a#callus').addClass('page-scroll');
        
        $('a#callus').css({
            'margin-bottom':'-8px', 
            'margin-left':'0',
        });
         
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        /*
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 70) //62
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });
        
        // Highlight the top nav as scrolling occurs
        
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 72//63
        });
        */

        //Hide Search in mobile devices
        $('ul.nav li:last-child').hide();
    }

    //Target 768 - 1024 Resolution (iPad / iPad Pro)    
    else if ($(window).width() >= 768 && $(window).width() <= 1024) {

        //removing font-awesome icons
        //$('ul.nav.navbar-nav li a > i').remove();
        
        //$('ul.nav li:last-child').empty().append('<a id="goSearch" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>');
        //manipulate <a> tag

        /*
        $('ul.nav.navbar-nav li a').css({
            'margin':'0',
            'padding': '24px 6px',
            'color': 'white'
        }).removeClass('btn btn-success');         
        */

        //nav#mainNav.navbar.navbar-default.navbar-custom.navbar-fixed-top.affix-top#sjsmLOGO        
        $('#sjsmLOGO').css({
            //'margin-top':'3px',
            //'margin-bottom':'0',
            'width':'66px !important',
            'height':'64px !important',
            //'background-size':'66px 64px',
        });
        
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 57)
            }, 1250, 'easeInOutExpo');
            event.preventDefault(); 
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 58
        });
    }
})(jQuery); // End of use strict