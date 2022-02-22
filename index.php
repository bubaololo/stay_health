<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="icon" type="image/png" href="img/favicon32.png">
    <title>Неболейка</title>
    <meta name="description" content="Медицинские услуги для всей семьи">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/hystmodal.min.css">
    <!-- <link rel="stylesheet" href="css/glider.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/media.css"> -->
</head>





<body class="page_fix">



    <?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
    ?>
        <div class="main__banner">
            <img class="main__banner-image" src="img/main_banner.jpg" alt="banner image">
            <div class="container">
                <div class="main__banner_content">
                    <div class="main__banner_text">
                        <h2>Медицинские услуги для всей семьи</h2>
                        Здоровье – это одна из главных человеческих ценностей. Хотите воспользоваться качественными медицинскими услугами для всей семьи? Обратитесь в Семейную клинику Неболейка. Здесь работают специалисты, которые обязательно помогут решить вашу проблему со
                        здоровьем, проведут грамотную диагностику и назначат эффективный курс лечения.
                    </div>
                    <a href="#" class="main__banner-button button">
                        Записаться на приём
                    </a>
                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="container">
                <h2 class="advantages__title">
                    Наши преимущества
                </h2>
                <div class="advantages__items_wrapper">
                    <div class="advantages__item">
                        <img src="img/icon_adv1.svg" alt="icon">
                        <div class="advantages__item_title">
                            ОПЫТНЫЕ ПРОФЕССИОНАЛЫ
                        </div>
                        <div class="advantages__item_text">
                            В нашей клинике работают специалисты с большим стажем работы
                        </div>
                    </div>
                    <div class="advantages__item">
                        <img src="img/icon_adv2.svg" alt="icon">
                        <div class="advantages__item_title">
                            СОВРЕМЕННОЕ ОБОРУДОВАНИЕ
                        </div>
                        <div class="advantages__item_text">
                            Оснащение клиники позволяет проводить необходимый спектр диагностических мероприятий
                        </div>
                    </div>
                    <div class="advantages__item">
                        <img src="img/icon_adv3.svg" alt="icon">
                        <div class="advantages__item_title">
                            ИНДИВИДУАЛЬНЫЙ ПОДХОД
                        </div>
                        <div class="advantages__item_text">
                            Врач ориентируется на индивидуальные особенности пациентов </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__services">
            <div class="container">
                <div class="main__services_top">
                    <div class="main__services_top_content">
                        <h2>Медицинские услуги</h2>
                        Клиника специализируется на оказании амбулаторно-поликлинической и лечебно-диагностической помощи. В клинике ведут прием следующие специалисты: педиатр, терапевт, невролог, кардиолог, офтальмолог, врач ультразвуковой диагностики. В нашей клинике можно
                        сдать любые анализы, воспользоваться услугами процедурного кабинета, поставить прививки детям и взрослым, сделать ЭКГ, холтер ЭКГ и СМАД. Также у нас возможно оформление и выдачи медицинской документации, в том числе и листков
                        временной нетрудоспособности. Мы создали условия для комфортного обследования и эффективного лечения.
                    </div>
                    <a href="#" class="main__services-button button">
                    Смотреть все услуги
                </a>
                </div>
                <div class="main__services_bottom">
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
            </div>
        </div>

        <?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
    ?>



            <!-- <script src="js/glider.js" type="text/javascript"></script> -->
            <script src="/js/hystmodal.min.js"></script>
            <script src="/js/main.js"></script>

</body>

</html>