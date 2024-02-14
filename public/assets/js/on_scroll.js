/*Mantem menu em navbar fixo no topo, conforme scroll scroll é ativado*/

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var header = document.querySelector('header');
    var menuNav = document.getElementById('menuNav');

    if (document.body.scrollTop > header.offsetHeight || document.documentElement.scrollTop > header.offsetHeight) {
        menuNav.classList.add("fixed-top");
    } else {
        menuNav.classList.remove("fixed-top");
    }
}