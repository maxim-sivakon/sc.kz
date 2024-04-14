// modal location
function initLocation() {
    var selectGeoLocationPc = document.getElementById("select-geo-location-pc");
    var modalLocationCloseBtn = document.getElementById("modal-location-close-btn");
    var btnLocationClose = document.getElementById("modal-location-close");
    var modalLocation = document.getElementById("modal-location");
    var modalLocationBlur = document.querySelector('#modal-location > .body-blur');

    selectGeoLocationPc.onclick = function () {
        modalLocation.style.display = 'block';
    }
    btnLocationClose.onclick = function () {
        modalLocation.style.display = 'none';
    }
    modalLocationCloseBtn.onclick = function () {
        modalLocation.style.display = 'none';
    }
    modalLocationBlur.onclick = function () {
        modalLocation.style.display = 'none';
    }
}

document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {
        initLocation();
    }
});