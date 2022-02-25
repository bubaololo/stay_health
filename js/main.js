// BURGER________________________________

document.querySelector('.menu__icon').addEventListener('click', event => {
    document.querySelectorAll('.line, .header__menu').forEach(element => element.classList.toggle('active'));
    document.querySelector('body').classList.toggle('lock');
});

document.querySelectorAll('.header__link').forEach(element => element.addEventListener('click', event => {
        document.querySelectorAll('.line, .header__menu').forEach(element => element.classList.remove('active'));
        document.querySelector('body').classList.remove('lock');
    })

);





// CONTACT FORM MODAL WINDOW__________________________________

const myModal = new HystModal({
    linkAttributeName: "data-hystmodal",
});
// HEADER PANEL________________________________

document.querySelector('.services_item').addEventListener('click', event => {
    document.querySelector('.header__panel').classList.toggle('active')
})





$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: false,
        center: false,
        margin: 0,
        URLhashListener: true,
        startPosition: '#_1',
        mouseDrag: false,
        touchDrag: false,
        animateOut: 'fadeOut',
        dots: false,




    });
});


// FAQ ACCORDEON________________________________________

const faqTitles = document.querySelectorAll(".faq__item_wrapper");

faqTitles.forEach(item => item.addEventListener('click', toggleAccordion));

function toggleAccordion() {
    const faqText = this.querySelector('.faq__item_text');


    faqText.classList.toggle('closed');

}



// __________________________________________________________________________

// new Glider(document.querySelector('.glider__top'), {
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     duration: 15,
//     draggable: true,
//     dots: '.dots',
//     arrows: {
//         prev: '.glider-prev',
//         next: '.glider-next'
//     }
// });

// new Glider(document.querySelector('.glider__bottom'), {
//     slidesToShow: 2,
//     scrollLock: true,
//     duration: 5,
//     draggable: true,
//     rewind: true,

//     arrows: {
//         prev: '.glider__bottom-prev',
//         next: '.glider__bottom-next'
//     }
// });