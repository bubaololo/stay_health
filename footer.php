<footer class="footer">


    <div class="hystmodal" id="myModal" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close" id="main_form_close">Close</button>
                <section class="form">
                    <div class="container">
                        <div class="form__wrapper">
                            <form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
                                <div class="form__top">
                                    <h2 class="form__title title">
                                        Envía tu solicitud
                                    </h2>
                                    <div class="form__input_wrapper">
                                        <div class="form__item">
                                            <label for="name" class="form_label">¿Como te llamas?</label>
                                            <input id="name" type="text" name="name" class="form_input">
                                        </div>

                                        <div class="form__item">
                                            <label for="phone" class="form_label ">Tu número de teléfono</label>
                                            <input id="phone" type="tel" name="phone" class="form_input _req">
                                        </div>

                                        <div class="form__item">
                                            <label for="email" class="form_label">Tu correo electrónico*</label>
                                            <input id="email" type="email" name="email" required class="form_input _req">
                                        </div>

                                        <div class="form__item">
                                            <label for="site" class="form_label">El sitio de la empresa</label>
                                            <input id="site" type="text" name="site" class="form_input">
                                        </div>

                                        <div class="form__item">
                                            <label for="message" class="form_label">Descripción</label>
                                            <textarea id="message" name="message" class="form_input"></textarea>
                                        </div>
                                    </div>


                                </div>
                        </div>
                        <div class="form__bottom">
                            <div class="form__send">
                                <div class="form__send_button">
                                    <div class="form_submit">
                                        Enviar mensaje
                                        <svg class="img-arrow-form">
                                            <path fill="##4A4A4A" d="M29.7204 7.07638C30.0456 6.75118 30.0456 6.22392 29.7204 5.89871L24.4208 0.599184C24.0956 0.273979 23.5684 0.273979 23.2432 0.599184C22.918 0.924389 22.918 1.45165 23.2432 1.77686L27.9539 6.48755L23.2432 11.1982C22.918 11.5234 22.918 12.0507 23.2432 12.3759C23.5684 12.7011 24.0956 12.7011 24.4208 12.3759L29.7204 7.07638ZM0.818359 7.32029L29.1315 7.32029L29.1315 5.65481L0.818359 5.65481L0.818359 7.32029Z"></path>
                                        </svg>
                                    </div>
                                    <input type="submit" class="submit_button">
                                </div>
                                <div class="form__send_disclaimer">
                                    Al hacer clic en el botón, acepta el procesamiento de datos personales.
                                </div>
                            </div>
                            <div class="form__logo">
                                <img id="form_logo" src="/img/logo.svg" alt="logo">
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    <div class="hystmodal" id="confirm" aria-hidden="true">
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
    </div>