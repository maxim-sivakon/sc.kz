jQuery(($) => {
    $(".select__input").val($(".select__item").first().text());
    $(".select__head").text($(".select__item").first().text());

    $(".select").on("click", ".select__head", function () {
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(this).next().fadeOut();
        } else {
            $(".select__head").removeClass("open");
            $(".select__list").fadeOut();
            $(this).addClass("open");
            $(this).next().fadeIn();
        }
    });

    $(".select").on("click", ".select__item", function () {
        $(".select__head").removeClass("open");
        $(this).parent().fadeOut();
        $(this).parent().prev().text($(this).text());
        $(this).parent().prev().prev().val($(this).text());
    });

    $(document).click(function (e) {
        if (!$(e.target).closest(".select").length) {
            $(".select__head").removeClass("open");
            $(".select__list").fadeOut();
        }
    });
});

//https://only-to-top.ru/blog/coding/2018-11-17-stilizaciya-select.html