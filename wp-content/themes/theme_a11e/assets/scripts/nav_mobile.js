let menuButton = document.getElementsByClassName("menu_button")[0];
let cross = document.getElementsByClassName("cross")[0];
let hamburger = document.getElementsByClassName("hamburger")[0];
let menuMobile = document.getElementsByClassName("menu_mobile")[0];



menuButton.addEventListener('click', function (){
    hamburger.classList.toggle("hide");
    cross.classList.toggle("see");
    menuMobile.classList.toggle("see")
});


