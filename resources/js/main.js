let swiper = new Swiper(".mySwiper", {
    speed: 600,
    parallax: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let nav = document.querySelector('#nav')
document.addEventListener('scroll', () => {
    //Operador ternario
    (window.scrollY > 150) ? nav.classList.add('scrollNav'): nav.classList.remove('scrollNav')
})