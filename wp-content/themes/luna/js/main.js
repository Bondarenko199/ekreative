/**
 * Created by german on 10.07.17.
 */

jQuery(function($){
    $(document).ready(function(){
        $('.navbar-toggler').on("click", function(){
            $('.navbar-toggler-icon').toggleClass("change");
        });
        $('#owl').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            stagePadding: 0,
            startPosition: 1,
            nav: false,
            dots: false,
            dotsEach: false,
            navText: [],
            smartSpeed: 1000
        });

        $('#owl_2').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            stagePadding: 0,
            startPosition: 1,
            nav: false,
            dots: false,
            dotsEach: false,
            navText: [],
            smartSpeed: 1000
        });

        $("#scroll").click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
            return false;
        });
    });
});