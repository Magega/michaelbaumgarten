$(document).ready(function() {
  // scroll-up btn show
  var targetItem = $('.intro__scroll-up');
  var scrollShow = 600;
  var dots = $('.dots')
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= scrollShow) {
      targetItem.removeClass('is-hidden');
    } else {
      targetItem.addClass('is-hidden');
    }
  });

  // scroll target
  $('.js-scroll-target').on('click', function (event){
    event.preventDefault();

    var scrollId = $(this).attr('href');
    var scrollHeightTop = $(scrollId).offset().top;
    $('body, html').animate({scrollTop: scrollHeightTop}, 650);
  });

  // scroll target
  $('.js-link-moore').on('click', function (event){
    event.preventDefault();
    $(this).toggleClass('is-active');
    $('.project-about__text-moore').slideToggle(450);
    dots[0].classList.toggle('hide-dots');
  });
});

const btnNav = document.querySelector('.js-btn-nav');
const headerDropdown = document.querySelector('.header__dropdown');
const bodyNav = document.querySelector('body');

btnNav.addEventListener('click', function() {
  bodyNav.classList.toggle('is-menu-opened');
  btnNav.classList.toggle('is-active');
  headerDropdown.classList.toggle('is-show');
});

// project card
function clickHere(element){
  const containerOfProjectsComponent = element.getElementsByClassName('project-card__container')
  const shadow = element.getElementsByClassName('shadow')

  const delayTwo = async (ks) => await new Promise(resolve => setTimeout(resolve, ks));
  const actionWithDelayTwo = async () => {
    await delayTwo(50);
    containerOfProjectsComponent[0].scrollIntoView({ block: 'start', behavior: 'smooth'})
    containerOfProjectsComponent[0].classList.toggle('is-opened')
  }
  actionWithDelayTwo()
  shadow[0].classList.toggle('shadow-active')
}

