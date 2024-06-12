let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .flex .navbar');

menuBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

var swiper = new Swiper(".course-slider", {
    grabCursor:true,
    loop:true,
    spaceBetween:20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        540: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
  });


var swiper = new Swiper(".teachers-slider", {
    grabCursor:true,
    loop:true,
    spaceBetween:20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".reviews-slider", {
    grabCursor:true,
    loop:true,
    spaceBetween:20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        540: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});