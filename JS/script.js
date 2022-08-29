document.getElementById("icon_menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){
    document.querySelector(".menu").classList.toggle("mostrar_menu");
}

window.onscroll = function () {
    var posicion = window.pageYOffset || document.getElement.scrollTop;
    var elemento1 = document.getElementById("icon_logo");
    var elemento2 = document.getElementById("icon_lb");
    elemento1.style.bottom =  posicion * 0.1 + "px";
    elemento2.style.top = posicion * 0.1 + "px";
}