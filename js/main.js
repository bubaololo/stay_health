// Выполняй весь JS после того, как загрузится DOM. Иначе будут проблеми при неправильно подключении скриптов или использовании кеширования. Событие - DOMContentLoaded

$(function(){
	$("#datepicker").datepicker();
});
/* Локализация datepicker */
$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: 'Предыдущий',
	nextText: 'Следующий',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);

// BURGER________________________________

// Стрелочные функции все еще довольно рисково использовать прямо вот так. Учитывая, что это медицинский сайт, есть большая вероятность, что зайдет какая-нибудь бабушка из под Opera, которую внук обновил пять лет назад, и у нее этот код работать не будет. В тот же вебпак можно засунуть бабель, который будет преобразоыввать код в более универсальный формат
document.querySelector('.menu__icon').addEventListener('click', event => {
    document.querySelectorAll('.line, .header__panel').forEach(element => element.classList.toggle('active'));
    document.querySelector('html').classList.toggle('lock');
});

// Я бы разбил все на отделные функции, наприемр - initFooterAccordeon(). Тут ну нужны комментарии, потому что все понятно
// ___________________FOOTER ACCORDEON
if (window.matchMedia("(max-width: 1150px)").matches) {
    
        const footerTitles = document.querySelectorAll(".footer__title");
        
        footerTitles.forEach(item => item.addEventListener('click', toggleMain));
        
        function toggleMain(evt) {
            evt.preventDefault();
            const accContent = this.nextElementSibling;
        this.classList.toggle('closed');
            accContent.classList.toggle('closed');
        
        }
    
      }

      // ___________________MAIN PAGE MOBILE SLIDER
if (window.matchMedia("(max-width: 640px)").matches) {
    $('.mobile__cards').owlCarousel({
        
        loop:true,
        margin:200,
        nav:false,
        dots:false,
        item: 1,
        center: false
    })

      }



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
// REVIEWS PAGE MODAL WINDOW__________________________________

const reviewModal = new HystModal({
    linkAttributeName: "data-hystmodal",
});

// HEADER PANEL________________________________

let panelHandler = document.querySelector('.services_item');

let headerPanel = document.querySelector('.header__panel')

panelHandler.addEventListener('click', hidePanel);



function hidePanel() {
    headerPanel.classList.toggle('active');
}

if (window.matchMedia("(max-width: 640px)").matches) {

    headerPanel.addEventListener('mouseout', hidePanel);
}
// window.addEventListener('resize', function(){

// }, true);

// let date = document.querySelector('.input_date');

// date.addEventListener('focusin', () => {date.type='date';});
// date.addEventListener('focusout', () => {date.type='text';});


{/* <input placeholder="Планируемая дата" class="form_input input_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"> */}



// MAIN PAGE DOCTORS SLIDER

$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: false,
        center: false,
        margin: 10,
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

$(document).ready(function(){
    
    $('.popup-gallery').owlCarousel({
        loop:true,
        
        nav:false,
        dots: true,
        center: false,
        items:1,
        margin:25,

        responsive:{

            640:{
                center: true,
                dots:false,
                nav: true
            },
            1280:{
                margin:825,
                items:2,
                center: false,
                dots:false,
                nav: true
            },
        }
    })
  });
  
// CONTACTS PHOTO LIGHTBOX

$(document).ready(function() {

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

});

// LICENSES LIGHTBOX
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

if (window.matchMedia("(min-width: 640px)").matches) {
    

    $(document).ready(function(){
    
        $('.news__page_slider').owlCarousel({
            loop:true,
            nav:true,
            dots: false,
            center: true,
            items:4,
            margin:25,
    
        })
      });

  }



// ___________________________FORM VALIDATION

  let registerForm = document.getElementById('form');


let nameInput = document.getElementById('name');
let dateInput = document.getElementById('datepicker');
let timeInput = document.getElementById('time');
let telInput = document.getElementById('phone');
let serviceInput = document.getElementById('service_type');
let requiredInputs = [nameInput, dateInput, timeInput, telInput, serviceInput];

let submitButton = document.querySelector('.submit_button');
    
    registerForm.addEventListener('submit', event => {

        requiredInputs.forEach((input) => {

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

      requiredInputs.forEach((input) => {

        input.addEventListener('input', () => {
            
           let validateStatus = requiredInputs.some(input => input.value == '');
           
           if(!validateStatus) {
               submitButton.classList.remove('blue_button');
           }

        }, false);

    });

// console.log(timeInput.value);




// SELECT INPUTS GRAY __________________________________


      let selects  = document.querySelectorAll('.gray_select');

      selects.forEach((select) => {


        select.addEventListener("change", () => {


            if (select.classList.contains('gray') && select.value !=="") {
                select.classList.remove('gray');
            } else {select.classList.add('gray');}
     
         
           }, false);


    });




      let callRegisterForm = document.getElementById('call__form');

    callRegisterForm.addEventListener('submit', event => {

        let callNameinput = document.getElementById('call__name');
        let callTelinput = document.getElementById('call__phone');
        let specInput = document.getElementById('spec__name');
        let addrInput = document.getElementById('call__adress');
    
        let callRequiredinputs = [callNameinput, callTelinput, specInput, addrInput];

        callRequiredinputs.forEach((input) => {

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






