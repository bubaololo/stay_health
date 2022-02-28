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


// MAIN PAGE DOCTORS SLIDER

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


// ABOUT PAGE SLIDER

$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            // titleSrc: function(item) {
            //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            // }
        }
    });
});

$(document).ready(function() {
    $('.popup-gallery').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        speed: 500,
        waitForAnimate: false,
        centerPadding: '85px',
        prevArrow: $('.prev_arrow'),
        nextArrow: $('.next_arrow'),
        // responsive: [{
        //         breakpoint: 1900,
        //         settings: {
        //             slidesToShow: 6,

        //         }
        //     },
        //     {
        //         breakpoint: 1500,
        //         settings: {
        //             slidesToShow: 5,


        //         }
        //     },
        //     {
        //         breakpoint: 1300,
        //         settings: {
        //             slidesToShow: 4,


        //         }
        //     },
        //     {
        //         breakpoint: 1000,
        //         settings: {
        //             slidesToShow: 2,


        //         }
        //     },
        //     {
        //         breakpoint: 500,
        //         settings: {
        //             slidesToShow: 1,

        //         }
        //     },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        //  ]

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