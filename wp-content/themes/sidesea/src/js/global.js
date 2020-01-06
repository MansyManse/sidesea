// Custom global scripts
jQuery(document).ready(function($) {
    'use strict';

    // Foundation Init
    $(document).foundation();

    $(function() {

        //onload: show the banners
        $("body").removeClass("sticky-shrinknav-wrapper");

        $(window).scroll(function() {
            if (window.innerWidth > 640) {
                let winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $("body").addClass("sticky-shrinknav-wrapper");
                } else {
                    $("body").removeClass("sticky-shrinknav-wrapper");
                }
            } else {
                $("body").removeClass("sticky-shrinknav-wrapper");
            }

        });

        $(window).resize(function() {
            if (window.innerWidth < 640) {
                $("body").removeClass("sticky-shrinknav-wrapper");
            }
        });
    });



    $('.overlay-nav-menu-toggle, .overlay-nav-menu a').on("click", function() {

        $("#overlay-nav-menu").toggleClass("is-open");
    });

}(jQuery));