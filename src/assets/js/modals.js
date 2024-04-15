// modal location
function initLocation() {
    var selectGeoLocationPc = document.getElementById("select-geo-location-pc");
    var modalLocationCloseBtn = document.getElementById("modal-location-close-btn");
    var mainLocation = document.getElementById("main-location");
    var mainLocationBlur = document.querySelector('#main-location > .body-blur');

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