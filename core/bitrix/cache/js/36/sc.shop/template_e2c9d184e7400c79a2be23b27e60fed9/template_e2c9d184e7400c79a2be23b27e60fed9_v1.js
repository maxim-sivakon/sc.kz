
; /* Start:"a:4:{s:4:"full";s:59:"/local/templates/sc.shop/assets/js/header.js?17287331553004";s:6:"source";s:44:"/local/templates/sc.shop/assets/js/header.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
//  header up
window.addEventListener('scroll', function () {
    if (window.innerWidth >= 1024) {
        let header = document.getElementById('header');
        if (window.pageYOffset > 0) {
            header.classList.add('-top-11');
        } else {
            header.classList.remove('-top-11');
        }
    }
});

// page up
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        let pageTop = document.getElementById('page-top');
        pageTop.onclick = function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    }
});

// show scroll top
window.addEventListener('scroll', function () {
    let pageTop = document.getElementById('page-top');
    if (window.pageYOffset > 0) {
        pageTop.classList.add('!block');
    } else {
        pageTop.classList.remove('!block');
    }
});

// search line
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        var controlSearchMb = document.getElementById("control-search-mb");
        var controlSearchPc = document.getElementById("control-search-pc");
        var btnSearchActionClose = document.getElementById("btn-search-action-close");
        var mainSearch = document.getElementById("main-search");
        var mainSearchBlur = document.querySelector('#main-search > .body-blur');

        controlSearchMb.onclick = function () {
            mainSearch.style.display = 'block';
        }
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
});

// mobile menu
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        var mainMobileMenuOpen = document.getElementById("main-mobile-menu-open");
        var mobileMenuClose = document.getElementById("mobile-menu-close");
        var mainMobileMenuBar = document.getElementById("main-mobile-menu-bar");
        var mainMobileMenuBarBlur = document.getElementById("main-mobile-menu-bar-blur");

        mainMobileMenuOpen.onclick = function () {
            mainMobileMenuBar.style.display = 'block';
        }
        mobileMenuClose.onclick = function () {
            mainMobileMenuBar.style.display = 'none';
        }
        mainMobileMenuBarBlur.onclick = function () {
            mainMobileMenuBar.style.display = 'none';
        }
    }
});

// show mobile menu level
document.addEventListener('click', function () {
    if (document.readyState === "complete") {
        let menuMobileLevel = document.getElementById("menu-mobile-level");
        menuMobileLevel.onclick = function () {
            menuMobileLevel.classList.toggle('active-level-menu');
        }
    }
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:58:"/local/templates/sc.shop/assets/js/modals.js?1728733155978";s:6:"source";s:44:"/local/templates/sc.shop/assets/js/modals.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
// modal location
function initLocation() {
    var selectGeoLocationMb = document.getElementById("select-geo-location-mb");
    var selectGeoLocationPc = document.getElementById("select-geo-location-pc");
    var modalLocationCloseBtn = document.getElementById("modal-location-close-btn");
    var mainLocation = document.getElementById("main-location");
    var mainLocationBlur = document.querySelector('#main-location > .body-blur');

    selectGeoLocationMb.onclick = function () {
        mainLocation.style.display = 'block';
    }
    selectGeoLocationPc.onclick = function () {
        mainLocation.style.display = 'block';
    }
    modalLocationCloseBtn.onclick = function () {
        mainLocation.style.display = 'none';
    }
    mainLocationBlur.onclick = function () {
        mainLocation.style.display = 'none';
    }
}

document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        initLocation();
    }
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:71:"/local/templates/sc.shop/assets/js/category-slide-item.js?1728733155906";s:6:"source";s:57:"/local/templates/sc.shop/assets/js/category-slide-item.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        document.querySelectorAll('.category-slide-item').forEach(el =>
            el.addEventListener('click', function (elo) {
                var item = document.getElementsByClassName('category-slide-item-menu');
                var itemMenu = document.getElementsByClassName('category-slide-item');
                for (var i = 0; i < item.length; i++) {
                    if (item[i].getAttribute('data-id') === this.getAttribute('data-id')) {
                        item[i].classList.add('active');
                        itemMenu[i].classList.add('active');
                    } else {
                        item[i].classList.remove('active');
                        itemMenu[i].classList.remove('active');
                    }
                }
            })
        );
    }
});

/* End */
;; /* /local/templates/sc.shop/assets/js/header.js?17287331553004*/
; /* /local/templates/sc.shop/assets/js/modals.js?1728733155978*/
; /* /local/templates/sc.shop/assets/js/category-slide-item.js?1728733155906*/
