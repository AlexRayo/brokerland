const header = document.getElementById("header");

if (window.innerWidth < 1262) {
  header.classList.add("top-bar-js");
}

window.onscroll = function() {topBar()};

function topBar() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100  || window.innerWidth < 1262) {
    header.classList.add("top-bar-js");
  } else {
    header.classList.remove("top-bar-js");
  }
}

/* MENU */
document.getElementById("icon-menu").onclick = function () { menuPhone(); };
//document.getElementsByClassName("menu-item-has-children")[0].onclick = function () { subMenu(); };

function subMenu() {
    document.getElementsByClassName("sub-menu")[0].classList.toggle("mostrar");
}
function menuPhone() {
    document.getElementById("menu").classList.toggle("mostrar");

    var line = document.getElementsByClassName("icon-line");
    line[0].classList.toggle("rotate-1");
    line[1].classList.toggle("rotate-2");
    line[2].classList.toggle("rotate-3");
}

/////////////////////