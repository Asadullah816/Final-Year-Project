"use strict";
let navbar = document.querySelector('.header .navbar-custom');

document.querySelector('#menu-btn').onclick = () => {
  navbar.classList.toggle('active');
  loginForm.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
  loginForm.classList.toggle('active');
  navbar.classList.remove('active');
}

window.onscroll = () => {
  // navbar.classList.remove('active');
  loginForm.classList.remove('active');
}

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  grabCursor: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});

// scroll to top
document.querySelector('.scroll-top').onclick = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

// if window scroll is greater than halft of the height of the window, show the scroll to top button
window.onscroll = () => {
  document.querySelector('.scroll-top').classList.toggle('active', window.scrollY > window.innerHeight / 2);
}

