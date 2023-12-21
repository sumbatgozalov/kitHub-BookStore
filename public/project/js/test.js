var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  loop: true,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 3,
  loop: true,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const calcscrollValue =  () =>{
  const scrollProgress =document.querySelector(".progress");


  const pos = document.documentElement.scrollTop;

  const calcHeight = document.documentElement.scrollHeight-document.documentElement.clientHeight;

  const scrollValue = ((pos *100)/calcHeight);

  scrollProgress.addEventListener("click",()=>{
      document.documentElement.scrollTop=0;
  })
  scrollProgress.style.background = `conic-gradient(rgb(80, 43, 70) ${scrollValue}%, rgb(250, 230, 255) ${scrollValue}%)`
  window.addEventListener("scroll",()=>{
  scrollProgress.classList.toggle('active', window.scrollY>200)
})
}

window.onscroll=calcscrollValue;