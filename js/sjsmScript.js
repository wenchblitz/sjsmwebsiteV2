(function($) {
    "use strict"; // Start of use strict

    /*****************************************************************
     *                     Page Preloader                            *
     *****************************************************************/
    //==
        $(window).on('load', function() { // makes sure the whole site is loaded 
            //$('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});

        });
    //==

    /*****************************************************************
     *              Inject FontAwesome in Navwalker Menu             *
     *****************************************************************/      
    //==
        $('.inject-fontawesome .nav > li:first-child > a').prepend('<i class="fa fa-home"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(2) > a').prepend('<i class="fa fa-gift"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(3) > a').prepend('<i class="fa fa-rss"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(4) > a').prepend('<i class="fa fa-bullhorn"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(5) > a').prepend('<i class="fa fa-info-circle"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(6) > a').prepend('<i class="fa fa-book"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(7) > a').prepend('<i class="fas fa-sign-in-alt"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(8) > a').prepend('<i class="far fa-image"></i>&nbsp;');
        $('.inject-fontawesome .nav > li:nth-child(9) > a').prepend('<i class="fas fa-briefcase"></i>&nbsp;');
   
        // Append Call Us & Search Button        
        $('.inject-fontawesome > ul').append('<li><a class="page-scroll callus-scroll" href="#contactus" id="callus"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us</a></li>');
        $('.inject-fontawesome > ul').append('<li><a id="goSearch" href="javascript:void(0)"><i class="fa fa-search"></i></a></li> ');
    
    //==
    
    //homepage about-us page listing
    $('.list-about-us > li:first-child').remove();

    //remove iframe of sharethis plugin
    $('#st_gdpr_iframe').css("display","none");

    /*****************************************************************
     *                Patron Saints jQuery manipulation              *
     *****************************************************************/      
    //==
        $('.list-patron-saints > li:first-child').remove();
        $('.list-patron-saints > li').addClass("col-lg-6");

        $('.list-patron-saints > li:first-child > a').prepend('<figure><img src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/img/st-francis.jpg" class="img-responsive"></figure>');
        $('.list-patron-saints > li:nth-child(2) > a').prepend('<figure><img src="http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/img/st-joseph.jpg" class="img-responsive"></figure>');

        $('.list-patron-saints > li > a').wrap("<p></p>");          
    //==

    /*****************************************************************
     *                Galleries jQuery Manipulation                  *
     *****************************************************************/      
    //==
        $('.list-galleries > li:first-child').remove();

        $('.list-galleries > li > a').prepend('<i class="far fa-images fa-10x"></i>');
        //$('.list-galleries > li > a').wrap('');
    //==

    /*****************************************************************
     *        Bootstrap - DropDown Menu (Inject Animation.css)       *
     *****************************************************************/      
    //==
        $('.navbar-nav > li > ul').addClass("animated fadeIn");
    //==

    /*****************************************************************
     *                     Bootstrap jQuery                          *
     *****************************************************************/
    //==
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 70) //70
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 72 //72
        });
    //==
        
    /*****************************************************************
     *          Closes the Responsive Menu on Menu Item Click        *
     *****************************************************************/
    //== 
        $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
        });

        // Offset for Main Navigation
        $('#mainNav').affix({
            offset: {
                top: 100
            }
        });

        //InnerNav
        $('.inner-nav').hide();
    //==
    
    /*****************************************************************
     *                   bxSlider Header Banner                      *
     *****************************************************************/
    //==
        //===       
         $('.bxslider').bxSlider({
            mode:'fade',
            infiniteLoop: true,
            auto: true,
            autoStart: true,
            autoDirection: 'next',
            speed: 1500, //850, //300
            autoHover: true,
            autoControls: false,
            pager: true,
            controls: true,
            //pagerType: 'full',
            keyboardEnabled: true
        });
    //==

    /*****************************************************************
     *                          Recent Events                        *
     *****************************************************************/
    //==   
        $('.recent-events').bxSlider({
            mode:'fade',
            infiniteLoop: true,
            auto: true,
            autoStart: true,
            autoDirection: 'next',
            speed: 3000, //850, //300
            autoHover: true,
            autoControls: false,
            pager: true,
            controls: false,
            pagerType: 'full',
            keyboardEnabled: true
        });    

        $('#upcoming-events .bx-controls').remove();
    //==

    /*****************************************************************
     *                          Testimonials                         *
     *****************************************************************/
    //==
        $('.testimonials, .sjsm-buildings').bxSlider({
            //mode:'fade',
            infiniteLoop: true,
            auto: true,
            autoStart: true,
            autoDirection: 'next',
            speed: 1500, //850, //300
            autoHover: true,
            //autoControls: false,
            pager: true,
            //controls: true,
            pagerType: 'full',
            keyboardEnabled: true
        });

        $('#social-proof .bx-controls-direction, #about .bx-controls-direction, #publishing-partners .bx-controls-direction').remove();
        $('.testimonials > div').css({
            "background":""
        });        
    //==

    /*****************************************************************
     *            Parallax Scrolling in Google Chrome Only           *
     *****************************************************************/
    //==
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if(isChrome){
            //===Parallax Scrolling Effects===
            $('.parallax-section-1, .parallax-section-2, .parallax-section-3, .parallax-section-4, .parallax-section-5, .parallax-section-6, #about, .admissions-bg, .testimonials-bg, .publishing-bg, #contactus, #footer, #sub-header').parallax({
                speed : 0.55
            });
        }
    //==

    //==MOBILE==
    /*****************************************************************
     *                      Add Success btn class                    *
     *****************************************************************/    
    //==
        if ($(window).width() > 768) {
            $('#callus').addClass('btn btn-success');

            //=====Shake CallUs Button========
            var animateName = 'animated tada';
            var animateNameEnd ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                $('#callus').on('click'/*'mouseenter'*/, function(){
                $(this).addClass(animateName).one(animateNameEnd, function(){
                    $(this).removeClass(animateName);
                });
            });        
        }
    //==

    /*****************************************************************
     *            Remove active class in li 10th child                *
     *****************************************************************/     
    //===
        $("ul.nav.navbar-nav.navbar-right li:nth-child(10)").removeClass("active");
    //==
    
    /*****************************************************************
     *                           Search                              *
     *****************************************************************/ 
    //==
        var displayBlock = {"display":"block !important"};

        $('.search').hide();//hide search form

        //show search form onClick
        $('#goSearch').on('click', 1000, function(){
            $('.search').css(displayBlock).fadeIn(250);
            });

        //closes search box by click
        $('.closeSearch').css({"opacity":"0.5"});

        $('.closeSearch').on('mouseenter', function(){
            $(this).css({"cursor":"pointer","opacity":"1"});        
            $(this).on('click', function(){
                $('.search').fadeOut(100);  
            });
        });
        
        $('.closeSearch').on('mouseleave', function(){
            $(this).css({"opacity":"0.5"});
        });

        //closes search box by escape button
        $('body').keyup(function(evt) {
            if (evt.keyCode == 27) {
                $('.search').fadeOut(250);  
            }
        });

        //hide clearSearch button in default
        $('.clearSearch').hide();

        //show clear button in text focus
        $('input[type="text"].txt').focus(function(){
            $('.clearSearch').show();
            $('.submitSearch').css({
                "color": "#777777"
            });
        });

        $('input[type="text"].txt').focusout(function(){
            $('.submitSearch').css({
                "color": "#BEBEBE"
            });
        });

        //hide clearSearch button after click
        $('.clearSearch').on("click", function(){
            $(this).hide();
        });
    //==

    /*****************************************************************
     *                   NiceScroll.js w/ Chrome                     *
     *****************************************************************/
    //== 
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

        if(isChrome)
        {            
            var nice = false;
                nice = $("html").niceScroll({
                    zindex: 2700
                });
                          
            $(".writeMessage, .about-info").niceScroll(); 
        }          
        
        // Other Browsers
        $(".writeMessage, .about-info").niceScroll(); 
    //==

    /*****************************************************************
     *                      Colorbox [Lightbox]                      *
     *****************************************************************/
    //==
        $(".recent-photos").colorbox({rel:'recent-photos'});
        $(".img-upload").colorbox({rel:'img-upload'});
        $(".intro-aboutus").colorbox({rel:'intro-aboutus'});
    //==

    /*****************************************************************
     *                    owlCarousel [SJSM Team]                    *
     *****************************************************************/
    //==  
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop:true,
            nav:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },            
                960:{
                    items:3
                },
                1200:{
                    items:4
                }
            }
        });
        
        //Remove owl-dots
        $('.owl-dots').remove();

        //Remove Text inside an element
        $('.owl-prev').contents().filter(function(){ return this.nodeType != 1; }).remove();
        $('.owl-next').contents().filter(function(){ return this.nodeType != 1; }).remove();
        
        //Append New Nav Buttons
        $('.owl-prev').append('<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>');
        $('.owl-next').append('<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>');       
    //==

    /*****************************************************************
     *                         opacity                               *
     *****************************************************************/
    //==
        /*inject .hideme class in every div*/
        /******************************************
        $("div").addClass( "hideme" );

        /* Every time the window is scrolled ... */
        /******************************************
        $(window).scroll( function(){
        
            /* Check the location of each desired element */
            /******************************************
            $('.hideme').each( function(i){
                
                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                /* If the object is completely visible in the window, fade it it */
                /******************************************
                if( bottom_of_window > bottom_of_object ){
                    
                    $(this).animate({'opacity':'1'}, 500);
                        
                }
                
            }); 
        
        });*/
    //==

    /*****************************************************************
     *                     The Events Calendar                       *
     *****************************************************************/
    //==
        // Remove Elements
        $('.tribe-bar-filters').remove();
        $('.tribe-events-cal-links').remove();
        $('.tribe-events-ical').remove();
        $('#tribe-events-bar').remove();
        $('#legend_box').remove();

        // Modify Inner HTML
        $(".tribe-list-widget").removeAttr("class").addClass("list-group");
        $(".list-group > li").removeAttr("class").addClass("list-group-item");

        // Add Class
        $('.tribe-events-widget-link > a').addClass("alert alert-warning");
    //==

    //[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
    //[]                           BLOG jQuery                            []
    //[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]

        /*****************************************************************
         *                                                               *
         *****************************************************************/
        //==
            // Adding class img-responsive
            $('.wp-post-image').removeAttr("width").removeAttr("height").addClass("img-responsive");

            //addClass for Select Menu (Archive)
            $('[name="archive-dropdown"]').attr("data-width","auto").addClass("selectpicker");

            //Reset Animate.css 
            function reset($elem) {
                $elem.before($elem.clone(true));
                var $newElem = $elem.prev();
                $elem.remove();
                return $newElem;
            } // end reset()
            
            //
            $(".index-recent-post-wrapper").mouseout(function () {
                var $this = $(this);
                $this.removeClass();
                $this = reset($this);
                $this.addClass("index-recent-post-wrapper animated pulse");
            });
            
            //
            $('.archive-description').remove();

            //$('.blog-posts > article').addClass("hideme");
        //==

         /*****************************************************************
         *                       Bootstrap menu magic                    *
         *****************************************************************/
        //==            
            $(window).resize(function() {
                if ($(window).width() < 768) {
                    $(".dropdown-toggle").attr('data-toggle', 'dropdown');
                } else {
                    $(".dropdown-toggle").removeAttr('data-toggle dropdown');
                }
            });
            
            if($(window).width() < 767) {
                    $(".dropdown-toggle").attr('data-toggle', 'dropdown');
                    $('.dropdown').on('show.bs.dropdown', function () {
                    $(this).siblings('.open').removeClass('open').find('a.dropdown-toggle').attr('data-toggle', 'dropdown');
                    $(this).find('a.dropdown-toggle').removeAttr('data-toggle');
                });
            }
        //==        

    //[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
    //                           DISCONTINUED!!!                       
    //[][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][][]
    //==
        //=====Grid Loading Effects=======
        /*
        new AnimOnScroll(document.getElementById('grid'), {
            minDuration : 0.4,
            maxDuration : 0.6,
            viewportFactor : 0.2
        });
        */
        
        //====viewportChecker    
        //$('main section > div.container').addClass("hidden_me").viewportChecker({
        // classToAdd: 'visible animated fadeInUp',// Class to add to the elements when they are visible
            //offset: 100    
        //});    
        
        //=======AOS.js 
        /*
        $('main section > div.container').attr('data-aos', 'fade-up');
        
        AOS.init({
            easing: 'ease-in-out-sine'
        });
        */

        /*
            var offset = 80;

            $('.navbar li a').click(function(event) {
                event.preventDefault();
                $($(this).attr('href'))[0].scrollIntoView();
                scrollBy(0, -offset);
            });
        */
    //==     
})(jQuery); // End of use strict