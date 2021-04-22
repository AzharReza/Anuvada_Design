$.noConflict();
jQuery(document).ready(function ($) {
    "use strict";
    [].slice.call(document.querySelectorAll("select.cs-select")).forEach(function (el) {
        new SelectFx(el);
    });
    jQuery(".selectpicker").selectpicker;
    $(".search-trigger").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(".search-trigger").parent(".header-left").addClass("open");
    });
    $(".search-close").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(".search-trigger").parent(".header-left").removeClass("open");
    });
    /*$(".equal-height").matchHeight({ property: "max-height" });*/
    $(".count").each(function () {
        $(this)
            .prop("Counter", 0)
            .animate(
                { Counter: $(this).text() },
                {
                    duration: 3000,
                    easing: "swing",
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    },
                }
            );
    });

    $("#menuToggle").on("click", function (event) {
        var windowWidth = $(window).width();
        if (windowWidth < 1022) {
            $("body").removeClass("open");
            if (windowWidth < 319) {
                $("#left-panel").slideToggle();
            } else {
                $("#left-panel").toggleClass("open-menu");
            }
        } else {
            $("body").toggleClass("open");
            $("#left-panel").removeClass("open-menu");
        }
    });
    $(".menu-item-has-children.dropdown").each(function () {
        $(this).on("click", function () {
            var $temp_text = $(this).children(".dropdown-toggle").html();
            $(this)
                .children(".sub-menu")
                .prepend('<li class="subtitle">' + $temp_text + "</li>");
        });
    });
    $(window).on("load resize", function (event) {
        var windowWidth = $(window).width();
        if (windowWidth < 1022) {
            $("body").addClass("small-device");
        } else {
            $("body").removeClass("small-device");
        }
    });

    $(".item-qty .fa-minus").click(function(){
          var span = $(this).next("span").text();
          if(span>0){
            span--;
            $(this).next("span").text(span);
          }
       });

       $(".item-qty .fa-plus").click(function(){
          var span = $(this).prev("span").text();
           console.log(span);
            span++;
            $(this).prev("span").text(span);
       });
       $("h5.price i.fa-times").click(function(){
           $(this).closest(".order-list").remove();
       });
       $(".btn-toggle").click(function(){
           var current = $(this);
           $(".btn-toggle").not(current).removeClass("active");
           $(".popup-box .dropdown-menu").hide();
           if($(this).hasClass("active")){
              $(this).removeClas("active");
              $(this).next(".dropdown-menu").hide();
           }else{
              $(this).addClass("active");
              $(this).next(".dropdown-menu").show();
           }
        });

});
