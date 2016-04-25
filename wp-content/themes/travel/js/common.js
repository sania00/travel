$(document).ready(function() {
    /// View post content with Slider
    $(".terrr a").click(function () {
        var attr = $(this).find(".content").text();
        var title = $(this).find(".nazv_nazv").text();
        var id = $(this).find(".content").attr('atr');
        $('.block_content .wrap').css('display','block').attr('id', id);
        $('.block_content').attr('id', id);
        $('.block_content p').text(attr);
        $('.block_content h3').text(title);
    });

    // Smooth scrolling
    $('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 1000);
        return false;
    });
    // View search form
    $(".close_nav").click(function(){
        $(".et-search-form").slideUp(300);
        $(".close_nav").slideUp(300);

        $(".seach_ico").css('display: block');
        $(".menu-header").css('display: block');

        $(".seach_ico").slideDown(300);
        $(".gdl-navigation-wrapper").slideDown(300);
        $(".menu-header").slideDown(300);


    });
    $(".search").click(function(){
        $(".seach_ico").slideUp(300);
        $(".gdl-navigation-wrapper").slideUp(1);
        $(".menu-header").slideUp(300);

        $(".et-search-form").css('display: block');
        $(".close_nav").css('display: block');

        $(".et-search-form").slideDown(300);
        $(".close_nav").slideDown(300);
        $('.et-search-form input').focus();
    });

    // Slider
    $('.owl-carousel2').owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items:1,
        margin:0,
        nav:false,
        autoplay:true,
        dots: false,
        loop:true,
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        items:1,
        autoplayTimeout:9000,
        smartSpeed: 250,
        fluidSpeed: 250,
        autoplaySpeed: 2500,

    });
    $(".owl-prev").text('');
    $(".owl-next").text('');


    $( "#accordion" ).accordion();

    jQuery.fn.myAddClass = function (classTitle) {
        return this.each(function() {
            var oldClass = jQuery(this).attr("class");
            oldClass = oldClass ? oldClass : '';
            jQuery(this).attr("class", (oldClass+" "+classTitle).trim());
        });
    };
    jQuery.fn.myRemoveClass = function (classTitle) {
        return this.each(function() {
            var oldClassString = ' '+jQuery(this).attr("class")+' ';
            var newClassString = oldClassString.replace(new RegExp(' '+classTitle+' ','g'), ' ').trim()
            if (!newClassString)
                jQuery(this).removeAttr("class");
            else
                jQuery(this).attr("class", newClassString);
        });
    };
    
});

// Начинаем работу когда страница полностью загружена (включая графику)
$(window).load(function () {

    /*// Получаем доступ к SVG DOM
    var svgobject = document.getElementById('imap');
    if ('contentDocument' in svgobject)
        var svgdom = svgobject.contentDocument;

    // Подсвечиваем регион на карте при наведении мыши на соотв. строку таблицы.
    $("#areas tr").hover(
        function () {
            console.log('234');
            var id = $(this).attr("id");
            $("#"+id, svgdom).myAddClass("highlight");
        },
        function () {
            var id = $(this).attr("id");
            $("#"+id, svgdom).myRemoveClass("highlight");
        }
    );
    // Подсвечиваем строку в таблице при наведении мыши на соотв. регион на карте
    $(svgdom.getElementsByClassName("area")).hover(
        function () {
            var id = $(this).attr("id");
            $("#areas #"+id).addClass("highlight");
        },
        function () {
            var id = $(this).attr("id");
            $("#areas #"+id).removeClass("highlight");
        }
    );*/

});