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



// PHP_MAILER______________________

function send(event, php) {
    // console.log("Отправка запроса");
    event.preventDefault ? event.preventDefault() : event.returnValue = false;
    var req = new XMLHttpRequest();
    req.open('POST', php, true);
    req.onload = function() {
        if (req.status >= 200 && req.status < 400) {
            json = JSON.parse(this.response); // Ебанный internet explorer 11


            // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
            if (json.result == "success") {
                // Если сообщение отправлено
                document.getElementById("form").reset();
                document.getElementById("main_form_close").click()
                myModal.open('#confirm');
            } else {
                // Если произошла ошибка
                alert("Ошибка. Сообщение не отправлено");
            }
            // Если не удалось связаться с php файлом
        } else { alert("Ошибка сервера. Номер: " + req.status); }
    };

    // Если не удалось отправить запрос. Стоит блок на хостинге
    req.onerror = function() { alert("Ошибка отправки запроса"); };
    req.send(new FormData(event.target));
};
var typed = new Typed("#typed", {
    stringsElement: '#typed-strings',
    typeSpeed: 50,
    backSpeed: 15,
    backDelay: 500,
    startDelay: 1000,
    loop: true,
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