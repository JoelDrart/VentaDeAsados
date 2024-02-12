var swiper = new Swiper(".mySwiper-1",{
    slidesPerView:1,
    spaceBetween: 30,
    loop:true,
    pagination: {
        el:".swiper-pagination",
        clickable:true,
    },
    navigation:{
        nextEl:".swiper-button-next",
        prevtEl:".swiper-button-prev",
    }
});

var swiper = new Swiper(".mySwiper-2",{
    slidesPerView: 3,
    spaceBetween: 20,
    loop:true,
    loopfillGroupWithBlank: true,
    navigation:{
        nextEl:".swiper-button-next",
        prevtEl:".swiper-button-prev",
    },
    breakpoints :{
        0:{
            slidesPerView: 1,
        },
        520:{
            slidesPerView: 2,
        },
        950:{
            slidesPerView: 3,
        }
    }
});

let tabInputs = document.querySelectorAll(".tabInput");

tabInputs.forEach(function(input){
    input.addEvenListener('change',function(){
        let id = input.ariaValueMax;
        letthisSwiper = document.getElementById('swiper' +id);
        thisSwiper.swiper.update();
    })
});