// "Go up" pogas funkcija
window.onscroll = function() {scroll()};

function scroll() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        document.getElementById("go-up").style.display = "block";
    } else {
        document.getElementById("go-up").style.display = "none";
    }
}             

function scrollUp() {
    document.body.scrollTop = 0;  // body - Safari
    document.documentElement.scrollTop = 0;  // document.Element - Chrome, Firefox, IE and Opera
}

//  navigācijas pogas
function openNav() {
    document.getElementById("overlay-navigation").style.height = "100%";
    document.getElementById("go-up").style.zIndex = "-1";
    document.getElementById("close-nav").style.display = "block";
    document.getElementById("main-logo").style.position = "fixed";
}

function closeNav() {
    document.getElementById("overlay-navigation").style.height = "0%";
    document.getElementById("go-up").style.zIndex = "2";
    document.getElementById("close-nav").style.display = "none";
    document.getElementById("main-logo").style.position = "absolute";
}