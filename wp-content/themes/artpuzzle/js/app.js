$(document).ready(function(){
    init();
    if(isMobile.any()){
        initForMobile();
    }else{
        initForDesktop();
    }
})



function init(){
    //binding tooltip event
    $('[data-toggle="tooltip"]').tooltip();
    //binding sidebar event for mobile
    $("#sidebar").sidr();
    //binding scroll to top event
    scrollToTop();
    //binding display form search
    displaySearchMenu();

    $("[data-item=nav-tab] a").click(function(e){
        e.preventDefault()
        $(this).tab('show')
    });

    $("[data-button=compare-product]").click(function(){
        
        $("#coming-soon").modal('show');
        return false;
    });
    
    if($("#slider-art-mobile").length > 0){
        var jssor_1_SlideshowTransitions = [
          {$Duration:1200,$Opacity:2}
        ];
        var options = { 
            $AutoPlay: true,
            //$SlideshowOptions: {
            //    $Class: $JssorSlideshowRunner$,
            //    $Transitions: jssor_1_SlideshowTransitions,
            //    $TransitionsOrder: 1
            //},
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };
        var jssor_slider = new $JssorSlider$('slider-art-mobile', options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var refSize = jssor_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 600);
                jssor_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
    }
}

function displaySearchMenu(){
    $("#btn-search-menu").click(function(){
        $(".search-menu-wrapper").toggle();
        if($(".search-menu-wrapper").is(":visible")){
            $(".search-menu-wrapper input[type=search]").focus();
        }
        
        return false;
    });
}

function initForDesktop(){
    $(".product").mouseenter(function(){
        $(this).find('.sub-content').fadeIn(200);
    });

    $(".product").mouseleave(function(){
        $(this).find('.sub-content').fadeOut(200);
    });
    
    $(".fancybox").fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic',
        arrows : true,
    });
    /*
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        calculateHeight:true,
    });
    */

    $('a.more[href="#product-description"]').click(function(e){
        e.preventDefault();
        $('a[data-toggle="tab"][href="#product-description"]').trigger('click');
        scrollAnimate(this);
    });
}

function initForMobile(){
    
}

function scrollToTop(){
    var offset=250, // At what pixels show Back to Top Button
    scrollDuration=300; // Duration of scrolling to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
                $('.scroll-top').fadeIn(500); // Time(in Milliseconds) of appearing of the Button when scrolling down.
            } else {
        $('.scroll-top').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
    }
    });

    // Smooth animation when scrolling
    $('.scroll-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0}, scrollDuration);
    })

    // Smooth animation when scrolling to any object
    $('[data-scroll-top=true]').on('click',function (e) {
        e.preventDefault();

        scrollAnimate(this);
    });
}

function scrollAnimate(object){
    var target = object.hash;
    var $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
}

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};