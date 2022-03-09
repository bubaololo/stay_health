<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>



<div class="bubbles__blue bubbles">
    <div class="big__bubble blue_bubble"></div>
    <div class="small__bubble blue_bubble"></div>
    <div class="container">
        <div class="bubbles__wrapper">

            <div class="bubbles__content">
                <div class="bubbles__paginate">
                    <a href="/" class="paginate__link root">
                        Главная
                    </a>
                    <a href="/" class="paginate__link child">
                        Отзывы
                    </a>
                </div>
                <div class="bubbles__title">
                    Отзывы
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reviews">
    <div class="container">
        <div class="reviews__wrapper">
            <div class="reviews__items">
                <!-- ___________________REVIEW ITEM________________________ -->
                <div class="review__item">
                    <div class="review__item_top">
                        <div class="review__item_title">
                            Светлана
                        </div>
                        <div class="review__item_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero adipiscing adipiscing odio
                            tortor sit morbi odio mattis. Arcu in iaculis pharetra ullamcorper. Vitae semper velit
                            aliquam urna tortor. Bibendum mattis et ornare risus nisi, morbi.
                        </div>
                        <div class="review__item_date">
                            06.12.20
                        </div>
                    </div>
                    <div class="review__item_bottom">

                        <div class="review__item_service">
                            <div class="review__item_bottom_title">
                                Услуга
                            </div>
                            <div class="review__item_bottom_text">
                                Прием педиатра
                            </div>
                        </div>
                        <div class="review__item_spec">
                            <div class="review__item_bottom_title">
                                Специалист
                            </div>
                            <div class="review__item_bottom_text">
                                Верещагин Андрей Вкиторович
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ___________________REVIEW ITEM________________________ -->
                <div class="review__item">
                    <div class="review__item_top">
                        <div class="review__item_title">
                            Светлана
                        </div>
                        <div class="review__item_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero adipiscing adipiscing odio
                            tortor sit morbi odio mattis. Arcu in iaculis pharetra ullamcorper. Vitae semper velit
                            aliquam urna tortor. Bibendum mattis et ornare risus nisi, morbi.
                        </div>
                        <div class="review__item_date">
                            06.12.20
                        </div>
                    </div>
                    <div class="review__item_bottom">

                        <div class="review__item_service">
                            <div class="review__item_bottom_title">
                                Услуга
                            </div>
                            <div class="review__item_bottom_text">
                                Прием педиатра
                            </div>
                        </div>
                        <div class="review__item_spec">
                            <div class="review__item_bottom_title">
                                Специалист
                            </div>
                            <div class="review__item_bottom_text">
                                Верещагин Андрей Вкиторович
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ___________________REVIEW ITEM________________________ -->
                <div class="review__item">
                    <div class="review__item_top">
                        <div class="review__item_title">
                            Светлана
                        </div>
                        <div class="review__item_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero adipiscing adipiscing odio
                            tortor sit morbi odio mattis. Arcu in iaculis pharetra ullamcorper. Vitae semper velit
                            aliquam urna tortor. Bibendum mattis et ornare risus nisi, morbi.
                        </div>
                        <div class="review__item_date">
                            06.12.20
                        </div>
                    </div>
                    <div class="review__item_bottom">

                        <div class="review__item_service">
                            <div class="review__item_bottom_title">
                                Услуга
                            </div>
                            <div class="review__item_bottom_text">
                                Прием педиатра
                            </div>
                        </div>
                        <div class="review__item_spec">
                            <div class="review__item_bottom_title">
                                Специалист
                            </div>
                            <div class="review__item_bottom_text">
                                Верещагин Андрей Вкиторович
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ___________________REVIEW ITEM________________________ -->
                <div class="review__item">
                    <div class="review__item_top">
                        <div class="review__item_title">
                            Светлана
                        </div>
                        <div class="review__item_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero adipiscing adipiscing odio
                            tortor sit morbi odio mattis. Arcu in iaculis pharetra ullamcorper. Vitae semper velit
                            aliquam urna tortor. Bibendum mattis et ornare risus nisi, morbi.
                        </div>
                        <div class="review__item_date">
                            06.12.20
                        </div>
                    </div>
                    <div class="review__item_bottom">

                        <div class="review__item_service">
                            <div class="review__item_bottom_title">
                                Услуга
                            </div>
                            <div class="review__item_bottom_text">
                                Прием педиатра
                            </div>
                        </div>
                        <div class="review__item_spec">
                            <div class="review__item_bottom_title">
                                Специалист
                            </div>
                            <div class="review__item_bottom_text">
                                Верещагин Андрей Вкиторович
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="reviews__form">
                <div class="form__wrapper">
                    <form enctype="multipart/form-data" method="post" id="review_form"
                        onsubmit="send(event, 'send.php')">

                        <h2 class="form__title">
                            Оставить отзыв
                        </h2>

                        <div class="reviews__form_top_inputs">
                            <input id="name" type="text" name="name" class="form_input input_review_name"
                                placeholder="Имя">


                            <input id="email" type="email" name="email" class="form_input input_email"
                                placeholder="E-mail">

                        </div>




                        <select required name="review_service_type" id="review_service_type"
                            class="form_input review_service">
                            <option value="" disabled selected>Услуга, которую вам оказали</option>
                            <option value="service_items1">Массаж</option>
                            <option value="service_items2">Косметолог</option>
                            <option value="service_items3">Оториноларинголог</option>
                        </select>
                        <select required name="review_spec" id="review_spec" class="form_input review_spec">
                            <option value="" disabled selected>Фио специалиста</option>
                            <option value="service_items1">Верещагин Андрей Николаевич</option>
                            <option value="service_items2">Олишевская Анна Александровна</option>
                            <option value="service_items3">Канц Алёна Петровна</option>
                        </select>




                        <textarea id="review_text" name="review_text" class="form_input review_text"
                            placeholder="Комментарий к записи"></textarea>






                        <div class="checkbox__wrapper">
                            <label class="check option">
                                <input type="checkbox" id="review_check" name="review_check" required
                                    class="check__input">
                                <span class="check__box"></span>
                            </label>

                            <div class="checkbox__disclaimer">
                                Я согласен с правилами обработки персональных данных и ознакомлен с <a
                                    href="#">Политикой конфидециальности</a>
                            </div>
                        </div>
                        <div class="form__send_button">
                            <button class="submit_button button ">Отправить отзыв</button>
                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="paginate">
        <div class="paginate__item">
            
                <img src="img/paginate_rr.svg" class="paginate_first paginate__content" alt="arrow">
            
        </div>
        <div class="paginate__item">
            
                <img src="img/paginate_r.svg" class="paginate_prev paginate__content" alt="arrow">
            
        </div>
        <div class="paginate__item paginate_active">
            <div class="paginate__content paginate_digit ">
                1
            </div>
        </div>
        <div class="paginate__item">
            <div class="paginate__content paginate_digit">
                2
            </div>
        </div>
        <div class="paginate__item">
            <div class="paginate__content paginate_digit">
                3
            </div>
        </div>
        <div class="paginate__item">
            <div class="paginate__content paginate_digit">
                4
            </div>
        </div>
        <div class="paginate__item">
            <div class="paginate__content paginate_dots">
                ...
            </div>
        </div>
        <div class="paginate__item">
            <div class="paginate__content paginate_digit_last">
                10
            </div>
        </div>

    <div class="paginate__item">
        
            <img src="img/paginate_r.svg" class="paginate_next paginate__content" alt="arrow">
        
    </div>
    <div class="paginate__item">
            
        <img src="img/paginate_rr.svg" class="paginate_last paginate__content" alt="arrow">
    
</div>
    </div>
</div>
</div>


<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
    ?>