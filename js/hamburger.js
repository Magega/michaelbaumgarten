const hamburger = document.querySelector(".hamburger")
const hamMenu = document.querySelector(".hamMenu")
const menu = document.querySelector(".menu")

const newsHum = document.querySelectorAll("#newsHum")
const newsletterClose = document.getElementById("newsletter-close")


newsHum[0].addEventListener("click",notActiveLink)
function notActiveLink() {
    hamMenu.classList.toggle("active")
    hamburger.classList.toggle("is-active")
    menu.classList.toggle("notShadow")
    
    newsletter.classList.add("pop-up-active")
    newsletter.style.opacity = 0;
    setTimeout(() => { newsletter.style.opacity = 1; }, this.animationDelay + 10);
}

newsletterClose.addEventListener('click', function() {
    newsletter.style.opacity = 1;
    setTimeout(() => { newsletter.style.opacity = 0; }, this.animationDelay + 10);
    setTimeout(() => {
      newsletter.classList.remove("pop-up-active")
    }, 1000)
  })

hamburger.addEventListener("click",activeLink)
function activeLink() {
    hamMenu.classList.toggle("active")
    hamburger.classList.toggle("is-active")
    menu.classList.toggle("notShadow")

}
