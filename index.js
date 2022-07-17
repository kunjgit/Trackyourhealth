let timVine = document.getElementById("tim-vine");
let navbar = document.getElementById("main-nav");
let navtext = document.getElementsByClassName("nav-text");

let navPos = navbar.getBoundingClientRect().top;

window.addEventListener("scroll", e => {
  let scrollPos = window.scrollY;
  if (scrollPos > navPos) {
    navbar.classList.add('sticky');
    header.classList.add('navbarOffsetMargin');
    navtext.classList.add('new-color');
  } else {
    navbar.classList.remove('sticky');
    header.classList.remove('navbarOffsetMargin');
    navtext.classList.remove('new-color');

  }
});