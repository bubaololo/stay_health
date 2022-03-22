<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>
    <div class="services__page">
        <div class="bubbles__green bubbles">
            <div class="big__bubble green_bubble"></div>
            <div class="small__bubble green_bubble"></div>
            <div class="container">
                <div class="bubbles__wrapper">

                    <div class="bubbles__content">
                        <div class="bubbles__paginate">
                            <a href="/" class="paginate__link root">
                                    Главная
                                </a>
                            <a href="/" class="paginate__link child">
                                    Услуги
                                </a>
                        </div>
                        <div class="bubbles__title">
                            Услуги медицинского центра “Неболейка”
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default__text">
            <div class="container">
                <div class="default__text_wrapper">
                    Клиника специализируется на оказании амбулаторно-поликлинической и лечебно-диагностической помощи.<br>В клинике ведут прием следующие специалисты: педиатр, терапевт, невролог, кардиолог, офтальмолог, врач ультразвуковой диагностики.
                    В нашей клинике можно сдать любые анализы, воспользоваться услугами процедурного кабинета, поставить прививки детям и взрослым, сделать ЭКГ, холтер ЭКГ и СМАД. Также у нас возможно оформление и выдачи медицинской документации, в том
                    числе и листков временной нетрудоспособности. Мы создали условия для комфортного обследования и эффективного лечения.
                </div>
            </div>
        </div>
        <div class="services__page_services">
            <div class="container">
                <div class="cards">
                    <div class="card">
                        <img class="card__icon" src="img/card_icon_doc.svg" alt="icon">
                        <div class="card__title">
                            Прием специалистов
                        </div>
                        <div class="card__text">
                            У нас ведут прием специалисты с больщим стажем работы
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/card_icon_back.svg" alt="icon">
                        <div class="card__title">
                            Массаж
                        </div>
                        <div class="card__text">
                            Услуги массажиста для детей и взрослых
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/card_icon_waist.svg" alt="icon">
                        <div class="card__title">
                            Программы с лишним весом
                        </div>
                        <div class="card__text">
                            Получите персональную программу похудения на основе веса, роста, возраста и привычек
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/card_icon_flask.svg" alt="icon">
                        <div class="card__title">
                            Процедурный кабинет с забором анализов
                        </div>
                        <div class="card__text">
                            Забор крови на различные исследования и анализы
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="main__services-button button">
                Смотреть все услуги
            </a>
        </div>
        <div class="services__page_registration">
            <div class="main__registration">
                <div class="container">
                    <div class="main__registration_wrapper">
                        <div class="main__registration_inner">
                            <div class="registration-circle"></div>
                            <!-- <img src="img/steto.png" alt="stetoscope image" class="main__registration_steto"> -->
                            <div class="main__registration_content">

                                <div class="main__registration_title">
                                    Записаться на приём
                                </div>
                                <div class="main__registration_text">
                                    Оставьте свои данные и наш администратор свяжется с вами в ближайшее время Либо звоните по телефону <em>+7 (4012) 000-000</em>
                                </div>
                                <a href="#" class="main__docs_button button" data-hystmodal="#myModal">
                                    Записаться на приём
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
    ?>