import jquery from 'jquery';
import Flickity from 'flickity';
window.jQuery = window.$ = jquery;
import 'flickity/dist/flickity.css';
require('paroller.js');

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
            menu.css('display', 'flex')
        }
    });


    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parent().addClass('in-focus');
        } else {
            $(this).parent().removeClass('in-focus');
        }
    });

    /**
     * Menu fixed
     */
    var windowHeight = $(window).height();

    $(window).on('scroll', function () {
        if ($(this).scrollTop() >= 900) {
            $('#app-header').addClass('is-fixed');
        } else {
            $('#app-header').removeClass('is-fixed');
        }
    })

    /**
     * Parallax
     */
    $('.parallax-item').paroller();

    /**
     * Tabs
     */
    $('ul.presentation-tabs-list').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('section#presentation').find('div.presentation-tabs-content-item').removeClass('active').eq($(this).index()).addClass('active');
    });

    /**
     * Card 
     */
    $('.catalog-item-btn__more-info').hover(function () {
        $(this).siblings().addClass("hover");
    }, function () {
        $(this).siblings().removeClass("hover");
    });

    $('.catalog-item-btn__sale').hover(function () {
        $(this).siblings().addClass("hover");
    }, function () {
        $(this).siblings().removeClass("hover");
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = $(id).offset().top;

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
    });

    /**
     * Slider
     */
    if ($('.header-banner-slider')) {

        var elem1 = document.querySelector('.header-banner-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                cellAlign: 'left',
                cellSelector: '.header-banner-slider-item',
                contain: true,
                draggable: false,
            });


            var prevArrowHeader = document.querySelector('.slider-nav-arrow-prev--header-banner');
            var headerSliderIndex = document.querySelector('.slider-nav-num-item--index');

            headerSliderIndex.innerText = flkty1.selectedIndex + 1;

            prevArrowHeader.addEventListener('click', function () {
                flkty1.previous(false, false);
                headerSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var nextArrowHeader = document.querySelector('.slider-nav-arrow-next--header-banner');

            nextArrowHeader.addEventListener('click', function () {
                flkty1.next(false, false);
                headerSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var headerSliderlast = document.querySelector('.slider-nav-num-item--last');

            headerSliderlast.innerText = flkty1.getCellElements().length;
        }
    }

    //Reviews

    if ($('.reviews-slider')) {

        var elem2 = document.querySelector('.reviews-slider');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: true,
                wrapAround: true,
            });

        }
    }

})(jQuery)