jQuery(document).ready(function ($) {
    $("nav").find(".nav-link.scroll").click(function (e) {
        e.preventDefault();
        var section = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section).offset().top
        }, 800);
    });
});