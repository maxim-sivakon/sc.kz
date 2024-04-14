window.addEventListener('scroll', trackscroll);

function trackscroll() {
    let header = document.getElementById('header');
    if (window.pageYOffset > 0) {
        header.classList.add('-top-11');
    } else {
        header.classList.remove('-top-11');
    }
}

// search line
function initSearch() {
    var controlSearchPc = document.getElementById("control-search-pc");
    var btnSearchActionClose = document.getElementById("btn-search-action-close");
    var mainSearch = document.getElementById("main-search");
    var mainSearchBlur = document.querySelector('#main-search > .body-blur');

    controlSearchPc.onclick = function () {
        mainSearch.style.display = 'block';
    }
    btnSearchActionClose.onclick = function () {
        mainSearch.style.display = 'none';
    }
    mainSearchBlur.onclick = function () {
        mainSearch.style.display = 'none';
    }
}

document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        initSearch();
    }
});