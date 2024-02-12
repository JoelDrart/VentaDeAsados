var swiper = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev", 
    }
});

var swiper = new Swiper(".mySwiper-2", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    loopFillGroupWithBlank: true, 
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev", 
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        }
    }
});

let tabInputs = document.querySelectorAll(".tabInput");

tabInputs.forEach(function(input) {
    input.addEventListener('change', function() {
        let id = input.ariaValueMax;
        let thisSwiper = document.getElementById('swiper' + id);
        thisSwiper.swiper.update(); 
    })
});


// Esperar a que el documento esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Obtener el enlace "Menu" dentro de la sección de "Carne"
    var menuLinkCarne = document.querySelector(".products #tab3 .botones .btn-1[href='#cortes-section']");

    // Agregar un evento de clic al enlace "Menu" en la sección de "Carne"
    menuLinkCarne.addEventListener("click", function(event) {
        // Prevenir el comportamiento predeterminado del enlace
        event.preventDefault();

        // Obtener la posición vertical de la sección "cortes-section"
        var cortesSection = document.getElementById("cortes-section");
        var cortesSectionPosition = cortesSection.offsetTop;

        // Desplazar la página hacia la posición de la sección "cortes-section"
        window.scrollTo({
            top: cortesSectionPosition,
            behavior: "smooth"  // Desplazamiento suave
        });
    });
});
