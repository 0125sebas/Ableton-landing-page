var navbarContainer = document.getElementById("navbar-container");
var dropdownMenuContainer = document.getElementById("dropdown-menu-container");
var menuOpenIcon = document.getElementById("menu-open-icon");
var menuCloseIcon = document.getElementById("menu-close-icon");
// show dropdown menu
menuOpenIcon.addEventListener("click", function () {
    menuOpenIcon.style.display = "none";
    menuCloseIcon.style.display = "flex";
    dropdownMenuContainer.style.display = "flex";
})
// hidden dropdown menu
menuCloseIcon.addEventListener("click", function () {
    menuCloseIcon.style.display = "none";
    menuOpenIcon.style.display = "flex";
    dropdownMenuContainer.style.display = "none";
})

