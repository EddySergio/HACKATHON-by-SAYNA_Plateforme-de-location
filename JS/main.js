const MenuToogle = document.querySelector(".MenuToogle");
const NavMenu = document.querySelector(".NavMenu");
const linkLogin = document.querySelector(".linkLogin");
MenuToogle.addEventListener("click", () => {
    NavMenu.classList.toggle("active");
    linkLogin.classList.toggle("active");
});
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");
const categList = document.querySelector(".CategList");

leftArrow.addEventListener("click", () => {
  categList.insertBefore(categList.lastElementChild, categList.firstElementChild);
});

rightArrow.addEventListener("click", () => {
  categList.appendChild(categList.firstElementChild);
});
