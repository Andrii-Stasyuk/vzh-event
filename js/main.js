 $(window).on("load", function(){
 $('#header').vide('libs/video/vzh',{

 })
 });


 if(location.pathname.includes('portfolio')){
  var galleryThumbs = new Swiper('.gallery-thumbs', {
   spaceBetween: 10,
   loop: true,
   slidesPerView: 4,
   freeMode: true,
   watchSlidesVisibility: true,
   watchSlidesProgress: true,
   breakpoints: {
    320: {
      slidesPerView: 1
    },
    380: {
      slidesPerView: 2
    },
    640: {
        slidesPerView: 3
    },
    1000: {
        slidesPerView: 4
    }
  }
  });
  var galleryTop = new Swiper('.gallery-top', {
   spaceBetween: 10,
   loop: true,
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
   },
   thumbs: {
    swiper: galleryThumbs
   }
  });
 }
 document.addEventListener("click",function (e){
  if(e.target.classList.contains("register-button")){
   document.querySelector('.form-popap').classList.add("form-popap-active")

  }
  if(e.target.classList.contains("login-user-button")){
    document.querySelector('.form-user-login-popap').classList.add("form-user-login-popap-active")
    console.log(1)
   }
   if(e.target.classList.contains("register-user-button")){
    document.querySelector('.form-user-popap').classList.add("form-user-popap-active")
    console.log(1)
   }
   if(e.target.classList.contains("register-close")){
    document.querySelector('.form-user-popap').classList.remove("form-user-popap-active")
    console.log(1)
   }
   if(e.target.classList.contains("fa-times")){
    document.querySelector('.form-popap').classList.remove("form-popap-active")
   }
   if(e.target.classList.contains("login-close")){
    document.querySelector('.form-user-login-popap').classList.remove("form-user-login-popap-active")
    console.log(1)
   }
  if(e.target.classList.contains("form-popap")){
   document.querySelector('.form-popap').classList.remove("form-popap-active")
  }
 } )
const burgerMenu = document.querySelector('.fa-bars'),
      registerButtons = document.querySelector('.register_buttons');

burgerMenu.addEventListener('click', ()=>{
  console.log(1);
  registerButtons.classList.toggle('register-active-buttons');
})
 // document.addEventListener("scroll", function(e){
 //     if(document.documentElement.scrollTop > 500){
 //         console.log(1)
 //     }
 // })
 AOS.init({
  once : true
 });