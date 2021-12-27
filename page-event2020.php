<?php
// Template Name: Event2020
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/page-event2020.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/footer.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/sitebar.css" />
    <?php
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic', false, null);
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="http://solarlab/wp-content/themes/wp_solarlab/assets/js/script.js"></script>
</head>

<body>
    <header>

        <div class="event__nav">

            <nav class="nav">
                <a href="#">Результаты</a>
                <a href="#">Спонсоры и партнеры</a>
                <a href="<?php echo get_home_url() . '/ all-news'; ?>">Новости</a>
                <a href="<?php echo get_home_url() . '/ all-media'; ?>">Медиа</a>
            </nav>

        </div>

        <div class="coutner__data">

            <div class="data">
                <h1 class="data__title">КРЫМСКАЯ ОСЕНЬ <br> 2020</h1>
                <p class="data__subtitle">24.09.2020 - 27.09.2020</p>
            </div>

            <div class="counter">

                <p class="counter__title">до начала <br> мероприятия осталось:</p>

                <div class="couter__timer">
                    <div class="item">
                        <span class="couter__timer_value">0</span>
                        <span class="couter__timer_text">Дней</span>
                    </div>
                    <div class="item">
                        <span class="couter__timer_value">0</span>
                        <span class="couter__timer_text">часов</span>
                    </div>
                    <div class="item">
                        <span class="couter__timer_value">0</span>
                        <span class="couter__timer_text">минут</span>
                    </div>
                </div>

            </div>

        </div>




    </header>

    <main>
        <?php get_sidebar(); ?>

        <div class="main__wrap">

            <div class="banner">

                <div class="banner__activ">
                    <img src="" alt="Крымская осень">
                    <a href="http://reg.solarlab.cc/KO2020">результаты</a>
                </div>

                <div class="banner__info">

                    <div class="banner__info__content">
                        <h2 class="content_title">многодневка</h2>
                        <p class="content_subtitle">24.09.2020 - 27.09.2020</p>
                    </div>

                    <div class="banner__info__stage">
                        <span class="banner__info__stage_value">4</span>
                        <span class="banner__info__stage_text">этап</span>
                    </div>

                </div>

            </div>


            <section class="activ_timing">
                <h2 class="timing_title">Тайминг</h2>

                <div class="timing">

                    <div class="timing_item">
                        <p class="timing_item_top">День приезда</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">23.09.2020</p>
                    </div> 
                    <div class="timing_item">
                        <div class="timing_item_top"> <span>1</span> этап</div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">23.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Регистрация, выдача стартовых пакетов</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">24.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Завершение регистрации</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">24.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Торжественное открытие</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">24.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Старт гонки (Пролог)</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">24.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Окончание 1го дня соревнований</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">24.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top"><span>2</span> этап</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Награждение победителей <br> 1го этапа</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Старт групповой <br> гонки</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Окончание 2го дня соревнований</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top"><span>3</span> этап</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">26.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Награждение победителей <br> 2го этапа</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">26.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Старт групповой <br> гонки</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">26.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Окончание 3го дня соревнований</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">26.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top"><span>4</span> этап</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">27.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Награждение победителей <br> 3го этапа</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">27.09.2020</p>
                    </div>
                    <div class="timing_item">
                        <p class="timing_item_top">Старт ITT</p>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">27.09.2020</p>
                    </div>



                </div>

                <div class="activ_timing_finish">

                    <div class="activ_timing_finish_top">
                        <p class="activ_timing_finish_smol">Торжественное награждение ,<br> закрытие гонки</p>
                        <p class="activ_timing_finish_title">Окончание<br>соревнований</p>
                    </div>

                    <div class="activ_timing_finish_mid"></div>

                    <div class="activ_timing_finish_bot">
                        <p class="activ_timing_finish_title">27.09.2020 15:00</p>
                        <p class="activ_timing_finish_title">28.09.2020 16:00</p>
                    </div>

                </div>
            </section>
                <div class="block__stage" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title">1 ЭТАП<br>ПРОЛОГ </h2><br>
                        <p class="stage__wrap_info_subtitle" >
                                24 сентября 2020
                                14:00 до 15:30 – Регистрация и выдача стартовых пакетов
                                16:00 – Торжественное открытие <br>
                                16:30 – Старт гонки (Пролог) <br>
                                17:30 – Окончание 1го дня соревнований <br> <br>

                                Место старта: Посёлок Орлиное, перекресток улиц Владимира Тюкова и Кедровой <br>
                                Координаты 44.448806, 33.773049 <br>
                                Ссылка на Яндекс Карты  <br> <br>

                                Участок в Strava <br> <br>

                                Дистанция, км: 4 <br> <br>

                                Категории участников: М1,М2,М3<br> <br>

                        </p> 
     

                        <a class="btn_stage__wrap_info" href="http://reg.solarlab.cc/KO2020/stage1">результаты</a>
                    </div>
                </div>
                <div class="block__stage"  id="bgr-color" >
                    <div class="stage__wrap_info">
                        <h2 class="stage__wrap_info_title">2 ЭТАП <br>ГРУППОВАЯ ГОНКА (ПО ЧАСОВОЙ)</h2><br>
                        <p class="stage__wrap_info_subtitle" >
                            25 сентября 2020
                            11:00 Награждение победителей 1го этапа<br>
                            12:00 Старт групповой гонки<br>
                            16:00 Окончание 2го дня соревнований<br><br>

                            Маршрут гонки: Старт гонки в п. Орлиное на 5+150км трассы Гончарное-Ялта в направлении п.Гончарное. Далее съезд вправо, с 3+350км автодороги Гончарное-Ялта на 26км автодороги Голубинка-Передовое-Широкое. Далее съезд вправо с 17+300км автодороги Голубинка Передовое-Широкое на 6+200км автодороги Родниковое-Передовое. На 0км автодороги Родниковое-Передовое съезд вправо, на 7+400км трассы Орлиное-Родниковое-Колхозное. На 0км автодороги Орлиное-Родниковое-Колхозное выезд вправо на 5+800км автодороги Гончарное-Ялта в направлении п. Гончарное (правый поворот). Финиш на 0+560км автодороги Гончарное-Ялта.<br><br>

                            Дистанция, км: 100<br><br>

                            Участок в Strava<br><br>

                            Категория участников: М1,М2,М3,М4
                        </p> 
     

                        <a class="btn_stage__wrap_info" href="http://reg.solarlab.cc/KO2020/stage2">результаты</a>
                    </div>
                </div>
                <div class="block__stage" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title">3 ЭТАП<br>ГРУППОВАЯ ГОНКА (ПРОТИВ ЧАСОВОЙ) </h2><br>
                        <p class="stage__wrap_info_subtitle" >
                                26 сентября 2020
                                11:00 Награждение победителей 2го этапа
                                12:00 Старт групповой гонки<br>
                                16:00 Окончание 3го дня соревнований<br>
                                17:30 – Окончание 1го дня соревнований <br> <br>

                                Маршрут гонки: Старт гонки в п. Орлиное на 5+150км трассы Гончарное-Ялта в направлении п.Гончарное. Далее съезд вправо, 
                                с 3+350км автодороги Гончарное-Ялта на 26км автодороги Голубинка-Передовое-Широкое. Далее съезд вправо с 17+300км автодороги 
                                Голубинка Передовое-Широкое на 6+200км автодороги Родниковое-Передовое. На 0км автодороги Родниковое-Передовое съезд вправо,
                                 на 7+400км трассы Орлиное-Родниковое-Колхозное. На 0км автодороги Орлиное-Родниковое-Колхозное выезд вправо на 5+800км автодороги<br> <br>

                                Дистанция, км: 100<br> <br>

                                Участок в Strava<br> <br>

                                Категория участников: М1,М2,М3,М4,М5,М6,М7,М8,W1<br> <br>

                        </p> 
     

                        <a class="btn_stage__wrap_info" href="http://reg.solarlab.cc/KO2020/stage3">результаты</a>
                    </div>
                </div>
                <div class="block__stage"  id="bgr-color" >
                    <div class="stage__wrap_info">
                        <h2 class="stage__wrap_info_title">4 ЭТАП <br>ИНДИВИДУАЛЬНАЯ ГОНКА НА ВРЕМЯ</h2><br>
                        <p class="stage__wrap_info_subtitle" >
                            27 сентября 2020
                            11:00 Награждение победителей 3го этапа<br>
                            12:00 Старт ITT<br>
                            15:00 Торжественное награждение , закрытие гонки<br><br>

                            16:00 Окончание соревнований <br><br>
                            Маршрут гонки: [место уточняется]<br><br>
                            Дистанция, км: 25 <br><br>
                            Участок в Strava<br><br>

                            Категория участников: М1,М2,М3,М4 <br>

                        </p> 
     

                        <a class="btn_stage__wrap_info" href="http://reg.solarlab.cc/KO2020/stage4">результаты</a>
                    </div>
                </div>

                

       


            <div class="block" id="news">

                <div class="block-item" id="block">
                    <h3 class="name">НОВОСТИ</h3>
                </div>

                <?php query_posts('cat=4');
                while (have_posts()) : the_post(); ?>

                    <div class="block-item">
                        <h3 class="title"><a class="title" href="<?php the_permalink(get_post()) ?>"><?php the_title(); ?></a></h3>
                    </div>

                <?
                endwhile;
                wp_reset_query();
                ?>

            </div>

            <div class="document" id="document">
                <h3 class="document__title">Документы</h3>
                <a href="">Положение </a>
            </div>

            <div class="sponsor">
                <div class="sponsor_wrap" >
                    <h3 class="sponsor_wrap_title" >Спонсоры и партнеры</h3>
                    <div class="sponsor__logo" >
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                        <img src="" alt="Logo/Name">
                    </div>
                </div>
            </div>


        </div>
    </main>
    <?php get_footer(); ?>