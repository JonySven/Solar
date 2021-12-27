<?php
// Template Name: Event
//Template Post Type: post
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/events.css" />
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
                <h1 class="data__title">КРЫМСКАЯ ОСЕНЬ <br> 2022</h1>
                <p class="data__subtitle">05.09.2022 - 08.09.2022</p>
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
                        <p class="content_subtitle">24.09.2022 - 27.09.2022</p>
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

             <?php query_posts('cat=5');
            while (have_posts()) : the_post(); ?> 
                    <div class="block__stage" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title"><?php the_title(); ?></h2><br>
                        <p class="stage__wrap_info_subtitle" > <?php the_content(); ?></p> 
     

                        <!-- <a class="btn_stage__wrap_info" href="#">результаты</a> -->
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
            ?> 
            <?php query_posts('cat=23');
            while (have_posts()) : the_post(); ?> 
                    <div class="block__stage" id="bgr-color" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title"><?php the_title(); ?></h2><br>
                        <p class="stage__wrap_info_subtitle" > <?php the_content(); ?></p> 
     

                        <!-- <a class="btn_stage__wrap_info" href="#">результаты</a> -->
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
            ?> 

                <!-- <div class="block__stage" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title">1 ЭТАП<br>ПРОЛОГ </h2><br>
                        <p class="stage__wrap_info_subtitle" >14:00 до 15:30 – Регистрация и выдача стартовых пакетов
                                16:00 – Торжественное открытие <br>
                                16:30 – Старт гонки (Пролог) <br>
                                17:30 – Окончание 1го дня соревнований <br> <br>

                                Место старта: Посёлок Орлиное, перекресток улиц Владимира Тюкова и Кедровой <br>
                                Координаты 44.448806, 33.773049 <br>
                                Ссылка на Яндекс Карты  <br> <br>

                                Участок в Strava <br> <br>

                                Дистанция, км: 4 <br> <br>

                                Категории участников: М1,М2,М3<br> <br>

                                14:00 до 15:30 – Регистрация и выдача стартовых пакетов <br>
                                16:00 – Торжественное открытие <br>
                                16:30 – Старт гонки (Пролог) <br>
                                17:30 – Окончание 1го дня соревнований <br> <br>

                                Место старта: Посёлок Орлиное, перекресток улиц Владимира Тюкова и Кедровой <br>
                                Координаты 44.448806, 33.773049 <br>
                                Ссылка на Яндекс Карты  <br> <br>

                                Участок в Strava <br> <br>

                                Дистанция, км: 4 <br> <br>

                                Категории участников: М1,М2,М3
                        </p> 
     

                        <a class="btn_stage__wrap_info" href="#">результаты</a>
                    </div>
                </div>
                <div class="block__stage"  id="bgr-color" >
                    <div class="stage__wrap_info">

                        <h2 class="stage__wrap_info_title">Вопрос</h2><br>
                        <p class="stage__wrap_info_subtitle" >11:00 Награждение победителей 1го этапа<br>
                            12:00 Старт групповой гонки<br>
                            16:00 Окончание 2го дня соревнований<br><br>

                            Маршрут гонки: Старт гонки в п. Орлиное на 5+150км трассы Гончарное-Ялта в направлении п.Гончарное. Далее съезд вправо, с 3+350км автодороги Гончарное-Ялта на 26км автодороги Голубинка-Передовое-Широкое. Далее съезд вправо с 17+300км автодороги Голубинка Передовое-Широкое на 6+200км автодороги Родниковое-Передовое. На 0км автодороги Родниковое-Передовое съезд вправо, на 7+400км трассы Орлиное-Родниковое-Колхозное. На 0км автодороги Орлиное-Родниковое-Колхозное выезд вправо на 5+800км автодороги Гончарное-Ялта в направлении п. Гончарное (правый поворот). Финиш на 0+560км автодороги Гончарное-Ялта.<br><br>

                            Дистанция, км: 100<br><br>

                            Участок в Strava<br><br>

                            Категория участников: М1,М2,М3,М4
                        </p> 
     

                        <a class="btn_stage__wrap_info" href="#">результаты</a>
                    </div>
                </div> -->

                

       


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
                <div class="document__inner">
                    <a data-v-a5f0c576="" data-v-401f6125="" target="_blank" href="https://admin.solarlab.cc/wp-content/uploads/2021/07/polozhenie_ko2021_masters.pdf" 
                    class="documents__item"><svg data-v-a5f0c576="" data-v-401f6125="" xmlns="http://www.w3.org/2000/svg" width="54" height="70" fill="#fff" class="documents__item-icon"><path data-v-a5f0c576="" data-v-401f6125="" d="M28.47 39.753l.023-.106c.442-1.821.998-4.09.564-6.148-.29-1.622-1.486-2.254-2.506-2.3-1.204-.053-2.278.632-2.545 1.63-.502 1.828-.053 4.327.77 7.51-1.036 2.469-2.69 6.056-3.9 8.19-2.255 1.165-5.279 2.962-5.728 5.232-.092.42.015.952.266 1.432.282.533.731.945 1.257 1.143.229.084.503.152.823.152 1.34 0 3.511-1.082 6.406-6.048.442-.145.899-.297 1.34-.45 2.072-.7 4.22-1.431 6.163-1.759 2.148 1.15 4.593 1.89 6.253 1.89 1.646 0 2.293-.976 2.537-1.562.427-1.029.22-2.324-.472-3.017-1.006-.99-3.45-1.249-7.26-.777-1.873-1.142-3.1-2.696-3.99-5.012zm-8.356 11.57c-1.059 1.54-1.858 2.309-2.293 2.644.51-.937 1.508-1.927 2.293-2.643zm6.673-17.938c.396.678.343 2.727.038 3.763-.373-1.516-.427-3.664-.206-3.915.061.007.114.053.168.152zm-.122 9.179c.815 1.409 1.843 2.62 2.978 3.519-1.645.373-3.146.99-4.486 1.539-.32.13-.633.259-.937.38 1.013-1.835 1.858-3.915 2.445-5.438zm11.852 4.99c.008.014.015.037-.03.068h-.016l-.015.023c-.06.038-.685.403-3.374-.656 3.092-.144 3.428.556 3.435.564zm14.58-29.57L36.703 1.59a2.433 2.433 0 00-1.721-.716H2.625A2.435 2.435 0 00.187 3.313v63.374a2.435 2.435 0 002.438 2.438h48.75a2.435 2.435 0 002.438-2.438V19.712a2.45 2.45 0 00-.717-1.729zm-4.906 2.848H33.855V6.496l14.336 14.336zm.137 42.809H5.672V6.359h23.004v16.453a3.2 3.2 0 003.199 3.2h16.453V63.64z"></path></svg></a>
                    <p class="documents__item-text">Положение «Крымская осень 2021»</p>
                </div>
            </div>

            <div class="sponsor" id="sponsor" >
                <div class="sponsor_wrap">
                    <?php query_posts('cat=18');
                    the_post(); ?>
                    <h3 class="sponsor_wrap_title"><?php the_title(); ?></h3>
                    <div class="sponsor__logo">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>


        </div>
    </main>
    <?php get_footer(); ?>