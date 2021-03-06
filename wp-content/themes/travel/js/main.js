jQuery( function( $ ) {
    $(document).ready(function () {

        // Mobile munu
        $('.btn-menu').on('click', function(event) {
            event.preventDefault();
            if ($(this).hasClass('menu-open')) {
                $(this).removeClass('menu-open').addClass('menu-closed');
                $('.menu-mob').slideUp();
            } else {
                $(this).removeClass('menu-closed').addClass('menu-open');
                $('.menu-mob').slideDown();
            };
        });

        //Tabs
        $(function() {
            $( "#tabs" ).tabs();
        });

        /// View post content with Slider

        $(".terrr a").click(function () {
            $('.block_content #tabs').css('display', 'none');
            $("a.wc-forward").remove();
            $(".button-add-to-cart a").remove();
            var attr = $(this).siblings('.content').html();
            var title = $(this).find(".nazv_nazv").text();
            var id = $(this).siblings(".content").attr('atr');
            var tab = $(this).siblings(".content").find(".tab-main").html();

            $('.block_content .wrap').css('display', 'block').attr('id', id);
            if (tab){
                var titleFirst = $(this).siblings(".content").find(".tab-main .first_title").html();
                var titleTwo = $(this).siblings(".content").find(".tab-main .two_title").html();
                var textFirst = $(this).siblings(".content").find(".tab-main .tab1-text").html();
                var textTwo = $(this).siblings(".content").find(".tab-main .tab2-text").html();
                $('.block_content #tabs #first_title').html(titleFirst);
                $('.block_content #tabs #two_title').html(titleTwo);

                $('.block_content #tabs #tabs-1').html(textFirst);
                $('.block_content #tabs #tabs-2').html(textTwo);

                $('.block_content #tabs').css('display', 'block');

            }
            $('.viaje').css('margin-top', '120px');
            $('.block_content').attr('id', id);
            $('.block_content .btnb').attr('data-object_id', id);
            $('.block_content .text_sleder').html(attr);
            $('.block_content h3').text(title);
            $(".block_content .wc-forward").remove();
            $(".block_content .text_product .button-add-to-cart").append('<a>I want it!</a>');
            $(".block_content .button-add-to-cart a").attr('class', 'btn_bottom_content' +
                ' button btnb product_type_simple add_to_cart_button ajax_add_to_cart');
            $('.block_content .button-add-to-cart a').attr('href', '?add-to-cart='+id);
            $('.block_content .button-add-to-cart a').attr('data-quantity', '1');
            $('.block_content .button-add-to-cart a').attr('data-product_id', id);

        });
        // Smooth scrolling
        $('.terrr a[href^="#"]').click(function () {
            var el = $(this).attr('href');
            $('body').animate({
                scrollTop: $(el).offset().top
            }, 1000);
            return false;
        });
        // View search form
        $(".close_nav").click(function () {
            $(".et-search-form").slideUp(300);
            $(".close_nav").slideUp(300);

            $(".seach_ico").css('display: block');
            $(".menu-header").css('display: block');

            $(".seach_ico").slideDown(300);
            $(".gdl-navigation-wrapper").slideDown(300);
            $(".menu-header").slideDown(300);


        });
        $(".search").click(function () {
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
            items: 1,
            margin: 0,
            nav: false,
            autoplay: true,
            dots: false,
            loop: true,
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            items: 1,
            autoplayTimeout: 4500,
            smartSpeed: 250,
            fluidSpeed: 250,
            autoplaySpeed: 2500

        });
        $(".owl-prev").text('');
        $(".owl-next").text('');

        var icons = {
            header: "ui-icon-circle-arrow-e",
            activeHeader: "ui-icon-circle-arrow-s"
        };
        $("#accordion").accordion({
            icons: icons,
            heightStyle: "content"
        });

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

});
