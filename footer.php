<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top_wrapper">
                <div class="footer__column fc1">
                    <img class="footer__logo" src="/img/logo.svg" alt="logo">
                    <div class="footer__copyright">
                        © ООО “Неболейка”<br>Все права защищены 2021
                    </div>
                    <a href="#" class="footer__policy">
                        Политика конфидециальности
                    </a>
                    <a href="#" class="footer__license">
                        Лицензии
                    </a>
                </div>
                <div class="footer__column fc2">
                    <div class="footer__title">
                        Меню
                        <div class="footer__title_line"></div>
                    </div>
                    <nav>
                        <a href="#" class="footer__link">
                            Главная
                        </a>
                        <a href="#" class="footer__link">
                            О клинике
                        </a>
                        <a href="#" class="footer__link">
                            Новости
                        </a>
                        <a href="#" class="footer__link">
                            Специалисты
                        </a>
                        <a href="#" class="footer__link">
                            Отзывы
                        </a>
                        <a href="#" class="footer__link">
                            Контакты
                        </a>
                    </nav>
                </div>
                <div class="footer__column fc3">
                    <div class="footer__title">
                        Приём специалистов
                        <div class="footer__title_line"></div>
                    </div>
                    <nav>
                        <a href="#" class="footer__link">
                            Педиатр
                        </a>
                        <a href="#" class="footer__link">
                            Терапевт
                        </a>
                        <a href="#" class="footer__link">
                            Невролог
                        </a>
                        <a href="#" class="footer__link">
                            Эндокринолог
                        </a>
                        <a href="#" class="footer__link">
                            Логопед
                        </a>
                    </nav>
                </div>
                <div class="footer__column fc4">
                    <div class="footer__title">
                        Массаж
                        <div class="footer__title_line"></div>
                    </div>
                    <nav>
                        <a href="#" class="footer__link">
                            Взрослые массажи
                        </a>
                        <a href="#" class="footer__link">
                            Классические
                        </a>
                        <a href="#" class="footer__link">
                            Детский массаж
                        </a>
                        <a href="#" class="footer__link">
                            Массаж спины
                        </a>
                        <a href="#" class="footer__link">
                            Массаж ног
                        </a>
                        <a href="#" class="footer__link">
                            Лимфодренажные
                        </a>
                    </nav>
                </div>
                <div class="footer__column fc5">
                    <nav>
                        <a href="#" class="footer__link">
                            Спортивные
                        </a>
                        <a href="#" class="footer__link">
                            Мануальная терапия
                        </a>
                        <a href="#" class="footer__link">
                            Шейного отдела
                        </a>
                        <a href="#" class="footer__link">
                            Остеопатия
                        </a>
                        <a href="#" class="footer__link">
                            Антицеллюлитные
                        </a>
                        <a href="#" class="footer__link">
                            Висцеральный массаж
                        </a>
                    </nav>
                </div>

                <div class="footer__column fc6">
                    <div class="footer__right_links">
                        <a href="#" class="footer__right_bold">
                            Программы<br>с лишним весом
                        </a>
                        <a href="#" class="footer__right_bold">
                            Процедурный кабинет с забором анализов
                        </a>
                        <a href="#" class="footer__doc_call">
                            Вызвать врача на дом
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom_wrapper">
                <div class="header__inner">
                    <div class="header__top">
                        <a class="logo__link" href="/">
                            <div class="">Разработано</div>
                            <img src="img/diez_logo.svg" class="diez_logo" alt="">
                        </a>
                        <div class="footer__contacts contacts__wrapper">
                            <div class="contacts__adress contacts__item">
                                г. Калининград,<br> ул. Артиллерийская, 85/4
                            </div>
                            <div class="contacts__hours contacts__item">
                                <em>Пн-Пт</em> 7:30-20:00<br>
                                <em>Сб</em> 9:00-14:00
                            </div>
                            <a href="tel:+74012000000" class="contacts__phone contacts__item">
                                +7 (4012) 000-000
                            </a>
                        </div>
                        <a href="#" class="header__button button" data-hystmodal="#myModal">
                            Записаться на приём
                        </a>
                    </div>
                </div>
            </div>
        </div>
</footer>
<section class="register__form">
    <div class="hystmodal" id="myModal" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close" id="main_form_close">Close</button>
                <section class="form">

                    <div class="form__wrapper">
                        <form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
                            <div class="form__top">
                                <h2 class="form__title">
                                    Записаться на приём
                                </h2>
                                <div class="form__input_wrapper">

                                    <input id="name" type="text" name="name" class="form_input input_name" placeholder="Имя">


                                    <input id="last_name" type="text" name="last_name" class="form_input input_lastname" placeholder="Фамилия">


                                    <!-- <input type="date" id="date" name="date" class="form_input input_date"> -->
                                    <input placeholder="Планируемая дата" class="form_input input_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">


                                    <select required name="time" id="time" class="form_input input_time">
                                        <option value="" disabled selected>Время</option>
                                        <option value="8">8:00</option>
                                        <option value="12">12:00</option>
                                        <option value="14">14:00</option>
                                        <option value="16">16:00</option>
                                    </select>

                                    <select required name="service_type" id="service_type" class="form_input input_service">
                                            <option value="" disabled selected>Выберите тип услуги</option>
                                            <option value="service_items1">Массаж</option>
                                            <option value="service_items2">Косметолог</option>
                                            <option value="service_items3">Оториноларинголог</option>
                                        </select>
                                    <input id="phone" type="tel" name="phone" class="form_input input_phone" placeholder="+7___-___-__-__">

                                </div>
                                <div class="custom__services">
                                    <select name="service_items1" id="service_items1" class="form_input hide">
                                            <option value="" class="select_placeholder">Взрослый массаж</option>
                                            <option value="">Детский массаж</option>
                                            <option value="">Женский массаж</option>
                                        </select>
                                    <select name="service_items2" id="service_items2" class="form_input hide">
                                            <option value="" class="select_placeholder">Косметолог</option>
                                            <option value="">Прыщи</option>
                                            <option value="">Угри</option>
                                        </select>
                                    <select name="service_items2" id="service_items3" class="form_input hide">
                                            <option value="massage" class="select_placeholder">Оториноларинголог</option>
                                            <option value="">ухо</option>
                                            <option value="">горло</option>
                                            <option value="">нос</option>
                                        </select>
                                </div>
                                <textarea id="comment" name="comment" class="form_input input_comment" placeholder="Комментарий к записи"></textarea>

                            </div>

                            <div class="form__bottom">

                                <div class="form__send_button">
                                    <!-- <a href="#" class="header__button button" data-hystmodal="#myModal">
                                        Записаться на приём
                                    </a> -->

                                    <button class="submit_button button blue_button">Отправить</button>
                                </div>
                                <div class="checkbox__wrapper">
                                    <label class="check option">
                                        <input type="checkbox" id="check" name="check" required class="check__input">
                                        <span class="check__box"></span>
                                    </label>

                                    <div class="checkbox__disclaimer">
                                        Я согласен с правилами обработки персональных данных и ознакомлен с <a href="#">Политикой конфидециальности</a>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>

            </div>
            </section>
        </div>
    </div>
</section>



<!-- //DOCTOR_CALL_______________________________________________________ -->
<!-- <div class="hystmodal" id="myModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close" id="main_form_close">Close</button>
            <section class="form">
                <div class="container">
                    <div class="form__wrapper">
                        <form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
                            <div class="form__top">
                                <h2 class="form__title title">
                                    Вызвать врача на дом
                                </h2>
                                <div class="form__input_wrapper">
                                    <div class="form__item">
                                        <input id="name" type="text" name="name" class="form_input" placeholder="Имя">
                                    </div>
                                    <div class="form__item">
                                        <input id="last_name" type="text" name="last_name" class="form_input" placeholder="Фамилия">
                                    </div>
                                    <div class="form__item">
                                        <select name="spec" id="form_spec">
                                            <option value="" disabled selected>Выберите специалиста</option>
                                            <option value="dantist">Стоматолог</option>
                                            <option value="diet">Диетолог</option>
                                        </select>
                                    </div>
                                    <div class="form__item">
                                        <input id="phone" type="tel" name="phone" class="form_input _req" placeholder="+7___-___-__-__">
                                    </div>
                                    <div class="form__item">
                                        <input id="adress" type="text" name="adress" class="form_input" placeholder="Ваш адрес">
                                    </div>


                                    <div class="form__item">

                                        <textarea id="comment" name="comment" class="form_input" placeholder="Комментарий к записи"></textarea>
                                    </div>
                                </div>


                            </div>

                            <div class="form__bottom">
                                <div class="form__send">
                                    <div class="form__send_button">

                                        <input type="submit" class="submit_button button">
                                    </div>
                                    <div class="checkbox__wrapper">
                                        <input type="checkbox" required>
                                        <div class="checkbox__disclaimer">
                                            Я согласен с правилами обработки персональных данных и ознакомлен с Политикой конфидециальности
                                        </div>
                                    </div>

                                </div>
                                <div class="form__send_disclaimer">
                                    Al hacer clic en el botón, acepta el procesamiento de datos personales.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div> -->


<!-- <div class="hystmodal" id="confirm" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close">Close</button>
            <div class="confirm__wrapper">
                <div class="confirm_text">
                    Thanks for contacting seoplay <span id="notify_name"></span>, your message has been sent
                </div>
                <button data-hystclose class="confirm_ok" aria-label="0">Ok</button>
            </div>
        </div>
    </div>
</div> -->
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/hystmodal.min.js"></script>
<script src="/js/main.js"></script>

</body>

</html>