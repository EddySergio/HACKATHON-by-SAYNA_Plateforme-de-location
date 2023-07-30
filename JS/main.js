const MenuToogle = document.querySelector(".MenuToogle");
const NavMenu = document.querySelector(".NavMenu");
const linkLogin = document.querySelector(".linkLogin");
MenuToogle.addEventListener("click", () => {
    NavMenu.classList.toggle("active");
    linkLogin.classList.toggle("active");
});