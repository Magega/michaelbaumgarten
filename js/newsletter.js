const newsBut = document.getElementById("news")
const newsletter = document.getElementById("newsletter")
const newsletterCloseBtn = document.getElementById("newsletter-close")

newsBut.addEventListener('click', function() {
    newsletter.classList.add("pop-up-active")
    newsletter.style.opacity = 0;
    setTimeout(() => { newsletter.style.opacity = 1; }, this.animationDelay + 10); 
})
newsletterCloseBtn.addEventListener('click', function() {
    newsletter.style.opacity = 1;
    setTimeout(() => { newsletter.style.opacity = 0; }, this.animationDelay + 10);
    setTimeout(() => {
      newsletter.classList.remove("pop-up-active")
    }, 1000)
  })

const emailInput = document.querySelector("#email");
      const errorDiv = document.querySelector("#error");
      const good = document.querySelector("#mce-success-response");

      emailInput.addEventListener("input", function() {
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(emailInput.value)) {
          errorDiv.textContent = "Please enter a valid email address!";
          good.style.cssText = 'display:none !important';
        } else {
          errorDiv.textContent = "";
        }
      });