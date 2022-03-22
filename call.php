<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>
    <div class="call">
        <div class="bubbles__green bubbles">
            <div class="big__bubble green_bubble"></div>
            <div class="small__bubble green_bubble"></div>
            <div class="container">
                <div class="bubbles__wrapper">
                    <img src="img/icon_call_bubbles.svg" alt="icon" class="bubbles__icon">
                    <div class="bubbles__content">
                        <div class="bubbles__paginate">
                            <a href="/" class="paginate__link">
                                    Главная
                                </a>
                            <a href="/" class="paginate__link">
                                    Услуги
                                </a>
                            <a href="/" class="paginate__link">
                            Вызов врача на дом
                                </a>
                        </div>
                        <div class="bubbles__title">
                        Вызов врача на дом
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="container">
<div class="call__text">

    <div class="call__text_title">
        Медицинский центр для детей и взрослых Инпромед имеет несколько подразделений для оказания услуги вызов врача на дом. В зависимости от ситуации, времени суток и дня недели медицинскую помощь Вашему ребенку окажут разные отделения нашей клиники. Мы гарантируем, что Вы не останетесь без поддержки.
    </div>
    <img src="img/call.jpg" alt="doctor call" class="call__img">
    <div class="call__text_content">Когда мы болеем, меньше всего нам хочется выходить из дома и идти в клинику, даже если там нет очередей и максимально комфортное обслуживание. В «Семейной клинике ВЕРА» на дом выезжают педиатр и терапевт. Также не выходя из дома можно сдать анализы.

При вызове врача на дом, к Вам приедет грамотный доктор, который соберет анамнез, внимательно проведет осмотр. После этого врач установит диагноз, сделает лекарственные назначения и спланирует тактику дальнейшего ведения вас или вашего ребенка, а также подробно объяснит все нюансы.</div>
</div>
<div class="call__list">
    
        <div class="call__list_title">
            Вызвать врача на дом следует, если отмечается:
        </div>
        <ul class="call__list_content">
            <li class="call__list_item">Температура (особенно, если нет улучшения на третий день!), недомогание
            </li>
            <li class="call__list_item">Температура и головная боль
            </li>
            <li class="call__list_item">Кашель (даже без температуры, но приступообразный, одышка)
            </li>
            <li class="call__list_item">Сыпь любой локализации
            </li>
            <li class="call__list_item">Изменения стула (понос), тошнота или рвота
            </li>
            <li class="call__list_item">Боли в животе
            </li>
            <li class="call__list_item">Боли при мочеиспускании, изменения количества и/или цвета мочи
            </li>
            <li class="call__list_item">Высокое давление и др.</li>
        </ul>
    
</div>
<div class="call__list_price">
<div class="call__list_price_title">
    Цена на услуги:
</div>


    <div class="accordeon__list">
        <div class="accordeon__list_item">
            <div class="accordeon__list_item_left">
                <div class="accordeon__list_num">
                    1025023
                </div>
                <div class="accordeon__list_name">
                    Консультация врача-терапевта на дому
                </div>
            </div>
            <div class="accordeon__list_item_price">
                1000 р.
            </div>
        </div>
        <div class="accordeon__list_item">
            <div class="accordeon__list_item_left">
                <div class="accordeon__list_num">
                    1025023
                </div>
                <div class="accordeon__list_name">
                    Консультация врача-терапевта на дому
                </div>
            </div>
            <div class="accordeon__list_item_price">
                1000 р.
            </div>
        </div>
        <div class="accordeon__list_item">
            <div class="accordeon__list_item_left">
                <div class="accordeon__list_num">
                    1025023
                </div>
                <div class="accordeon__list_name">
                    Консультация врача-терапевта на дому
                </div>
            </div>
            <div class="accordeon__list_item_price">
                1000 р.
            </div>
        </div>
    </div>

</div>
</div>
<div class="main__registration">
    <div class="container">
        <div class="main__registration_wrapper">
            <div class="main__registration_inner">
                <div class="registration-circle"></div>
                <!-- <img src="img/steto.png" alt="stetoscope image" class="main__registration_steto"> -->
                <div class="main__registration_content">

                    <div class="main__registration_title">
                        Вызвать врача на дом
                    </div>
                    <div class="main__registration_text">
                        Оставьте свои данные и наш администратор свяжется с вами в ближайшее время Либо звоните по телефону <em>+7 (4012) 000-000</em>
                    </div>
                    <a href="#" class="main__docs_button button" data-hystmodal="#callModal">
                        Вызвать врача на дом
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="call__alert">
    <div class="container">
        <div class="call__alert_wrapper">
            <img src="img/icon_call_alert.svg" alt="icon" class="call__alert_icon">
            <div class="call__alert_text">
                Вызов врача на дом не является услугой экстренной медицинской помощи!<br>
В случае появления угрожающих симптомов, требующих немедленной помощи, вызывайте «Скорую помощь»!
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- //DOCTOR_CALL_______________________________________________________ -->
    <section class="call__form">
    <div class="hystmodal" id="callModal" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close" id="main_form_close">Close</button>
                <section class="form">

                    <div class="form__wrapper">
                        <form enctype="multipart/form-data" method="post" id="call__form" onsubmit="send(event, 'send.php')">
                            <div class="form__top">
                                <h2 class="form__title">
                                    Вызвать врача на дом
                                </h2>
                                <div class="form__input_wrapper">

                                    <input id="call__name" type="text" name="call__name" class="form_input call__input_name" placeholder="Имя">


                                    <input id="call__last_name" type="text" name="call__last_name" class="form_input call__input_lastname" placeholder="Фамилия">

                                    <select name="spec__name" id="spec__name" class="form_input input_spec">
                                            <option value="" disabled selected>Выберите специалиста</option>
                                            <option value="service_items1">Верещагин Андрей Николаевич</option>
                                            <option value="service_items1">Верещагина Ольга Петровна</option>
                                            <option value="service_items2">Олишевская Анна Александровна</option>
                                        </select>
                                    <input id="call__phone" type="tel" name="call__phone" class="form_input input_phone" placeholder="+7___-___-__-__">
                                </div>
                                <input id="call__adress" type="text" name="call__adress" class="form_input call__adress" placeholder="Ваш адрес">

                                <textarea id="call__comment" name="call__comment" class="form_input input_comment" placeholder="Комментарий к записи"></textarea>
                            </div>
                            <div class="form__bottom">

                                <div class="form__send_button">
                                    <!-- <a href="#" class="header__button button" data-hystmodal="#myModal">
                                        Записаться на приём
                                    </a> -->
                                    <button id="call_submit" class="submit_button button">Отправить</button>
                                </div>
                                <div class="checkbox__wrapper">
                                    <label class="check option">
                                        <input type="checkbox" id="call__check" name="call__check" required class="check__input">
                                        <span class="check__box"></span>
                                    </label>

                                    <div class="checkbox__disclaimer">
                                        Я согласен с правилами обработки персональных данных и ознакомлен с <a href="#">Политикой конфидециальности</a>
                                    </div>
                                </div>
                            </div>
                            <div class="call__form_disclaimer">
                                Вызов врача через сайт является предварительным. Наш сотрудник свяжется с Вами для подтверждения вызова специалиста
                            </div>
                        </form>
                    </div>

            </div>
            </section>
        </div>
    </div>
</section>
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
    ?>