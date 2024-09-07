document.addEventListener("DOMContentLoaded", function(event) {
    var btn_pageUp = document.getElementById("btn_pageUp");
    btn_pageUp.addEventListener("click", pageScroll, false);
});

    function pageScroll(pageX = 0, pageY = 0) {
        window.scroll({
            top: pageX,
            left: pageY,
            behavior: 'smooth'
        });
    }

    window.onscroll = function() {
        checkMarginToTop();
    };

    var header = document.getElementById("header");
    var sticky = 177;

    function checkMarginToTop() {
        if (window.pageYOffset > sticky) {
            btn_pageUp.classList.add("active");
            header.classList.add("mini");
        } else {
            btn_pageUp.classList.remove("active");
            header.classList.remove("mini");
        }
    }
