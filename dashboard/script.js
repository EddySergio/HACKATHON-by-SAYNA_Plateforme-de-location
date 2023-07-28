let loadingPage = document.querySelector(".loadingPage");
let chargement = document.querySelector(".chargement");
let navigationIconLlist = document.querySelectorAll(".navigationIcon");
let navigation1 = document.querySelectorAll(".navigation");
let componentV = document.querySelectorAll(".componentV");
let divScroll = document.querySelector(".favoryProduct");
let btnAjouterProduit = document.querySelector(".ajouterProduit");
let addProduct = document.querySelector(".addProduct");
let next = document.querySelector("#next");
let next2 = document.querySelector("#next2");
let elementScroll = document.querySelector(".elementScroll");
let main = document.querySelectorAll(".main");
let notification = document.querySelectorAll(".notification");
let iconFermer = document.querySelector(".fermer");
const navigation = (element) => {
  fermer()
  for (let index = 0; index < navigationIconLlist.length; index++) {
    navigationIconLlist[index].classList.add("nonActive");
  }
  element.classList.remove("nonActive");
  element.classList.add("active");
  let number;
  for (let index = 0; index < navigationIconLlist.length; index++) {
    if (navigationIconLlist[index] == element) {
      number = index;
    }
  }
  for (let index = 0; index < componentV.length; index++) {
    componentV[index].style.display='none'
  }
  componentV[number].style.display='flex'
  componentV[number].style.display='flex'
};
navigationIconLlist.forEach((element) => {
  element.addEventListener("click", () => {
    navigation(element);
  });
});


for (let index = 0; index < componentV.length; index++) {
  componentV[index].style.display='none'
}
componentV[1].style.display='flex'
componentV[1].style.display='flex'

const mouvement = (test) => {
  test == "one"
    ? (divScroll.scrollLeft += elementScroll.clientWidth * 2)
    : (divScroll.scrollLeft -= elementScroll.clientWidth * 2);
};

next.addEventListener("click", () => {
  mouvement("one");
});
next2.addEventListener("click", () => {
  mouvement("deux");
});

btnAjouterProduit.addEventListener('click',()=>{
   addProduct.style.display='flex'
})

iconFermer.addEventListener('click',()=>{
  fermer()
})

const fermer=()=>{
    addProduct.style.display='none'
}


notification.forEach(element=>{
element.addEventListener('click',()=>{
  element.children[2].style.display=='flex'?element.children[2].style.display='none':element.children[2].style.display='flex'
})
}) 

document.addEventListener('DOMContentLoaded',()=>{
loadingPage.style.display='none'
})
