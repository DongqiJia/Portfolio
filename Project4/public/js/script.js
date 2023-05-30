//* Hamburger menu variables
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

//* Display mobile menu
const mobileMenu = () => {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
};

//* This line of code listens to when the hamburger-button is pressed.
//* When it is, it will execute the mobileMenu function.
menu.addEventListener('click', mobileMenu);