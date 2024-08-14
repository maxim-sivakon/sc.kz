// open select city
document.addEventListener('DOMContentLoaded', function(event) {
    var open_select_city = document.getElementById('open_select_city');
    var close_select_city = document.getElementById('close_select_city');

    open_select_city.addEventListener('click', openSelectCity, false);
    close_select_city.addEventListener('click', closeSelectCity, false);
});
document.addEventListener('keydown', function(e) {
    closeSelectCity(e);
});

function openSelectCity() {
    document.getElementById('block_select_city').classList.add('_active');
}

function closeSelectCity(e) {

    if (e.keyCode == 27) {
        document.getElementById('block_select_city').classList.remove('_active');
    } else {
        document.getElementById('block_select_city').classList.remove('_active');
    }

}
/*
const div = document.querySelector('#select_city');

document.addEventListener('click', (e) => {
    const withinBoundaries = e.composedPath().includes(div);
    if (!withinBoundaries && document.getElementById('block_select_city').classList.contains('_active')) {
        closeSelectCity(e);
    }
});
*/

// open search line
document.addEventListener('DOMContentLoaded', function(event) {
    var btnSearch = document.getElementById('btnSearch');
    var searchBack = document.getElementById("searchBack");
    btnSearch.addEventListener("click", openSearchLine, false);
});

function openSearchLine() {
    searchBack.classList.toggle("_active");
}





