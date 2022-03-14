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


// FORM SELECT HANDLER________________________________
let services1 = document.getElementById('service_items1');
let services2 = document.getElementById('service_items2');

let serviceSelector = document.getElementById('service_type');

serviceSelector.onchange = function() {

    let selectName = serviceSelector.value;

    let selectedItem = document.getElementById(selectName);
    selectedItem.classList.remove('hide');
    let hiddenItems = document.querySelectorAll(`.custom__services select:not(#${selectName})`);
    hiddenItems.forEach((item) => {
        item.classList.add('hide');
    })

}


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

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        //  ]

    });
});

// CONTACTS PHOTO

$(document).ready(function() {

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

});
// licenses
$(document).ready(function() {
    $('.licence__pics_wrapper').magnificPopup({
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

// FAQ ACCORDEON________________________________________

const accTitles = document.querySelectorAll(".accordeon__section_title");

accTitles.forEach(item => item.addEventListener('click', toggleMain));

function toggleMain() {
    const accContent = this.nextElementSibling;
this.classList.toggle('closed');
    

    accContent.classList.toggle('closed');

}
const accItemtitles = document.querySelectorAll(".accordeon__item_title");

accItemtitles.forEach(item => item.addEventListener('click', toggleNest));

function toggleNest() {
    const accListcontent = this.nextElementSibling;
    this.classList.toggle('closed');
    

    accListcontent.classList.toggle('closed');

}

// NEWS PAGE SLIDER________________________________________


$(document).ready(function() {
    $('.news__page_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        speed: 500,
        waitForAnimate: false,
        centerPadding: '137px',
        prevArrow: $('.prev_arrow'),
        nextArrow: $('.next_arrow'),
        // responsive: [{
        //         breakpoint: 1900,
        //         settings: {
        //             slidesToShow: 6,
        //         }
        //     },

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        //  ]

    });
});

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

// PHP_MAILER______________________

// function send(event, php) {
//     // console.log("Отправка запроса");
//     event.preventDefault ? event.preventDefault() : event.returnValue = false;
//     var req = new XMLHttpRequest();
//     req.open('POST', php, true);
//     req.onload = function() {
//         if (req.status >= 200 && req.status < 400) {
//             json = JSON.parse(this.response); // Ебанный internet explorer 11
            

//             // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
//             if (json.result == "success") {
//                 // Если сообщение отправлено
//                 document.getElementById("form").reset();
//                 document.getElementById("main_form_close").click()
//                 myModal.open('#confirm');
//             } else {
//                 // Если произошла ошибка
//                 alert("Ошибка. Сообщение не отправлено");
//             }
//             // Если не удалось связаться с php файлом
//         } else { alert("Ошибка сервера. Номер: " + req.status); }
//     };

//     // Если не удалось отправить запрос. Стоит блок на хостинге
//     req.onerror = function() { alert("Ошибка отправки запроса"); };
//     req.send(new FormData(event.target));
// };



  let registerForm = document.getElementById('form');
    let registerButton = document.getElementById('register_submit');
    let nameInput = document.getElementById('name');
    let dateInput = document.getElementById('date');
    let timeInput = document.getElementById('time');
    let telInput = document.getElementById('phone');
    let serviceInput = document.getElementById('service_type');

    let requiredInputs = [nameInput, dateInput, timeInput, telInput, serviceInput];

    // console.log(requiredInputs);



 

    registerForm.addEventListener('submit', event => {
    
        requiredInputs.forEach((input) => {
            // console.log(input.value)
            // event.preventDefault();
            // input.classList.add('error');
            if (input.value=="") {
                event.preventDefault();
                input.classList.add('error');
                setTimeout(removeRed,2000);
                function removeRed(){
                    
                    input.classList.remove('error');
                }
            }

        });
  
        
    
      });



//   registerForm.addEventListener('submit', event => {
    
    
//     if (nameInput.value=="") {
//         event.preventDefault();
//         nameInput.classList.add('error');
//         setTimeout(test,1300);
//     } else if (dateInput.value=="") {
//         event.preventDefault();
//         dateInput.classList.add('error');
        
//     }
    

//   });