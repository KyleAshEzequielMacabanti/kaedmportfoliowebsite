const menuIcon = document.querySelector(".menuIcon");
const navbar = document.querySelector(".navbar");
const navUl = document.querySelector(".navul");


menuIcon.addEventListener("click", function(){    
    if(navUl.classList.contains("navul")){
        navUl.classList.remove("navul");
   } else{
         navUl.classList.add("navul")
     }
 })


