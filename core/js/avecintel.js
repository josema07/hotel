/*

Style   : MobApp Script JS
Version : 1.0
Author  : Surjith S M
URI     : https://surjithctly.in/

Copyright © All rights Reserved 

*/

$(function() {
    "use strict";

    /*-----------------------------------
     * FIXED  MENU - HEADER
     *-----------------------------------*/
    function menuscroll() {
        var $navegadormenu = $('.navegador-menu');
        if ($(window).scrollTop() > 50) {
            $navegadormenu.addClass('is-scrolling');
        } else {
            $navegadormenu.removeClass("is-scrolling");
        }
    }
    menuscroll();
    $(window).on('scroll', function() {
        menuscroll();
    });
    /*-----------------------------------
     * navegadorBAR CLOSE ON CLICK
     *-----------------------------------*/

    $('.navegadorbar-navegador > li:not(.dropdown) > a').on('click', function() {
        $('.navegadorbar-collapse').collapse('hide');
    });
    /* 
     * navegadorBAR TOGGLE BG
     *-----------------*/
    var sitenavegador = $('#navegadorbar');
    sitenavegador.on('show.bs.collapse', function(e) {
        $(this).parents('.navegador-menu').addClass('menu-is-open');
    })
    sitenavegador.on('hide.bs.collapse', function(e) {
        $(this).parents('.navegador-menu').removeClass('menu-is-open');
    })

    /*-----------------------------------
     * ONE PAGE SCROLLING
     *-----------------------------------*/
    // Select all links with hashes
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[data-toggle="tab"]').on('click', function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

}); /* End Fn */

