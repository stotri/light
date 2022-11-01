$(document).ready(function () {
    $('.header__menu-burger').click(function () {
        $('.header__menu-burger').toggleClass('open-menu-burger');
        $('.header__menu').toggleClass('open-menu');
    });
});
$(".mobile").click(function () {
    $(".header__mobile-servises").toggleClass("block");
});
$(document).ready(function () {
    $('.header__menu-burger, .mobile').click(function (event) {
        $('.header__menu-burger, .header__nav').toggleClass('active');
        $('body').toggleClass('fixed-page');
    });
});
$(function() {
    $('.am-container').montage({
        liquid: false, 
        fillLastRow: true,
        margin: 0,
        fixedHeight: 300
        });
    });