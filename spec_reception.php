<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>
    <div class="spec__reception">
        <div class="bubbles__green bubbles">
            <div class="big__bubble green_bubble"></div>
            <div class="small__bubble green_bubble"></div>
            <div class="container">
                <div class="bubbles__wrapper">
                    <img src="img/icon_spec_recipe.svg" alt="icon" class="bubbles__reception_icon">
                    <div class="bubbles__content">
                        <div class="bubbles__paginate">
                            <a href="/" class="paginate__link">
                                    Главная
                                </a>
                            <a href="/" class="paginate__link">
                                    Услуги
                                </a>
                            <a href="/" class="paginate__link">
                                    Приём специалистов
                                </a>
                        </div>
                        <div class="bubbles__title">
                            Приём специалистов
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services__page_text">
            <div class="container">
                <div class="services__page_text_wrapper">
                    Клиника специализируется на оказании амбулаторно-поликлинической и лечебно-диагностической помощи. В клинике ведут прием следующие специалисты: педиатр, терапевт, невролог, кардиолог, офтальмолог, врач ультразвуковой диагностики. В нашей клинике можно
                    сдать любые анализы, воспользоваться услугами процедурного кабинета, поставить прививки детям и взрослым, сделать ЭКГ, холтер ЭКГ и СМАД. Также у нас возможно оформление и выдачи медицинской документации, в том числе и листков временной
                    нетрудоспособности. Мы создали условия для комфортного обследования и эффективного лечения.
                </div>
            </div>
        </div>
        <div class="services__page_services">
            <div class="container">
                <div class="cards">
                    <div class="card">
                        <img class="card__icon" src="img/icon_recipe_embryo.svg" alt="icon">
                        <div class="card__title">
                            Педиатр
                        </div>
                        <div class="card__text">
                            Оказывает широкий спектр услуг от одноразовой консультации до полноценного медицинского сопровождения детей
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/icon_recipe_steto.svg" alt="icon">
                        <div class="card__title">
                            Терапевт
                        </div>
                        <div class="card__text">
                            Специалист широкого профиля, который осуществляет первичную диагностику, координирует, выписывает направления
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/icon_recipe_brain.svg" alt="icon">
                        <div class="card__title">
                            Невролог
                        </div>
                        <div class="card__text">
                            Занимается лечением, диагностикой и профилактикой заболеваний неврологического характера
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/icon_recipe_dna.svg" alt="icon">
                        <div class="card__title">
                            Эндокринолог
                        </div>
                        <div class="card__text">
                            Врач, который специализируется на заболеваниях связанных с эндокринной системой, то есть с обменом веществ, и гормональных нарушениях
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                    <div class="card">
                        <img class="card__icon" src="img/icon_recipe_lips.svg" alt="icon">
                        <div class="card__title">
                            Логопед
                        </div>
                        <div class="card__text">
                            Специалист, который занимается устранением и корректировкой речевых нарушений у детей
                        </div>
                        <a href="#" class="card__link">
                            подробнее
                        </a>
                    </div>
                </div>
            </div>
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