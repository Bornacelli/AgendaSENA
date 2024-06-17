const body = document.querySelector('body');
const loader = document.getElementById('loader');

window.addEventListener('load', ()=>{
  document.documentElement.scrollTop = 0;
  setTimeout(() => {
    body.classList.remove('overflow-hidden');
    loader.style.visibility = 'hidden'
    loader.style.opacity = '0'
    console.log("hola");
  }, 500);
})

// Button Scroll hacia arriba

const btn = document.getElementById('btn-go-top');

window.addEventListener('scroll', ()=>{
    if(document.documentElement.scrollTop > 150){
        btn.classList.add('fixed');
    }else{
        btn.classList.remove('fixed');
    }
})

btn.addEventListener('click', ()=>{
  document.documentElement.scrollTop = 0;
})

const btnOpenMenu = document.getElementById("btn-open-menu");
const btnCloseMenu = document.getElementById("btn-close-menu");
const menuItem = document.querySelectorAll(".menu-item");
const sectionMenu = document.getElementById("section-menu");

btnOpenMenu.addEventListener("click", () => {
  sectionMenu.classList.remove("-translate-y-full");
  document.body.classList.add("overflow-hidden");
});

btnCloseMenu.addEventListener("click", () => {
  sectionMenu.classList.add("-translate-y-full");
  document.body.classList.remove("overflow-hidden");
});

menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    sectionMenu.classList.add("-translate-y-full");
    document.body.classList.remove("overflow-hidden");
  });
});

//Slider con swiper

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

// Mapa con Leaflet

var map = L.map("map").setView([10.941526315444325, -74.78253776105232], 30);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {}).addTo(map);

L.marker([10.941526315444325, -74.78253776105232])
  .addTo(map)
  .bindPopup("SENA Colombo Alemán")
  .openPopup();