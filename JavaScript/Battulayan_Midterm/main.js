let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
let searchIcon = document.querySelector('search-icon');
let searchForm = document.querySelector('search-form');

menu.onclick = () => {
    navbar.classList.toggle('active');
    
};

searchIcon.onclick = () => {
    searchForm.classList.toggle('active');
};
