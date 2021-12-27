<?php
// Template Name: Event2019
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/page-event2019.css" />
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
                <h1 class="data__title">КРЫМСКАЯ ОСЕНЬ <br> 2019</h1>
                <p class="data__subtitle">25.09.2019 - 28.09.2019</p>
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
                    <a href="#">результаты</a>
                </div>

                <div class="banner__info">

                    <div class="banner__info__content">
                        <h2 class="content_title">многодневка</h2>
                        <p class="content_subtitle">25.09.2019 - 28.09.2019</p>
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
                        <div class="timing_item_top"> <span>0</span></div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2019</p>
                    </div> 


                    <div class="timing_item">
                        <div class="timing_item_top"> <span>1</span> этап</div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">25.09.2019</p>
                    </div>
                  
                    <div class="timing_item">
                        <div class="timing_item_top"> <span>2</span> этап</div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">26.09.2019</p>
                    </div>

                  

                    <div class="timing_item">
                        <div class="timing_item_top"> <span>3</span> этап</div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">27.09.2019</p>
                    </div>   

                    <div class="timing_item">
                        <div class="timing_item_top"> <span>4</span> этап</div>
                        <div class="timing_item_mid"></div>
                        <p class="timing_item_bot">28.09.2019</p>
                    </div>             
                                      

                </div>

                
            </section> 





             <div class="block__stage">
                <div class="stage__wrap_info">
                    <h3 class="title">1 ЭТАП<br> ГОНКА-ПРОЛОГ В ПОС. <br> ОРЛИНОЕ <br> 25 сентября</h3>
                    <p class="subtitle">Старт гонки в п. Орлиное, главный перекресток. Финиш <br>
                        в подъём перед с. Широкое. Дистанция около 4км, набор <br>
                        высоты около 60м. Участок в <a href="">Strava</a> </p><br>                  
                </div>

                <div class="block__stage__map" >
                  <iframe class="video" src="https://www.youtube.com/embed/CiwDSZuLpsk"
                         title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen>
                  </iframe>
                  
                </div>

            </div> 
            <div class="block__stage" id="bgc">
                <div class="stage__wrap_info">
                    <h3 class="title">1 ЭТАП<br> 2 ЭТАП <br> ГРУППОВАЯ ГОНКА <br> 26 сентября</h3>
                    <p class="subtitle">Старт гонки в п. Орлиное, возле Кемпинга. Кольцо вокруг водохранилища ПО <br>
                    Количество кругов по категориям согласно Положению, финиш и старт в <br>
                    одном месте. Участок в  <a href="">Strava</a> </p><br>                  
                </div>

                <div class="block__stage__map" >
                  <iframe class="video" src="https://www.youtube.com/embed/CiwDSZuLpsk"
                         title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen>
                  </iframe>
                  
                </div>

            </div> 
            <div class="block__stage">
                <div class="stage__wrap_info">
                    <h3 class="title">3 ЭТАП<br>ГРУППОВАЯ ГОНКА<br> 27 сентября</h3>
                    <p class="subtitle">Старт гонки в п. Орлиное, возле Кемпинга. Кольцо вокруг водохранилища<br>
                    круг. Количество кругов по категориям согласно Положению, финиш в гору перед с. Широкое. Участок в <a href="">Strava</a> </p><br>                  
                </div>
                <div class="block__stage__map" >
                  <iframe class="video" src="https://www.youtube.com/embed/CiwDSZuLpsk"
                         title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen>
                  </iframe>
                  
                </div>

            </div> 
            <div class="block__stage" id="bgc">
                <div class="stage__wrap_info">
                    <h3 class="title">4 ЭТАП<br>ГОНКА С ИНДИВИДУАЛЬНЫМ <br> СТАРТОМ НА ВРЕМЯ <br> 28 сентября</h3>
                    <p class="subtitle">Старт гонки в п. Орлиное, возле Кемпинга. Кольцо вокруг водохранилища ПО<br>
                    часовой стрелке, один круг 25км, суммарный набор высоты 300м за круг,<br>
                    финиш и старт в одном месте. Участок в<a href="">Strava</a> </p><br>                  
                </div>

                <div class="block__stage__map" >
                  <iframe class="video" src="https://www.youtube.com/embed/CiwDSZuLpsk"
                         title="YouTube video player" frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen>
                  </iframe>
                  
                </div>

            </div> 
       












            <div class="document">
                <h3 class="document__title">Документы</h3>
                <a href=""><img src="#" alt="">Положение</a>
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







            <div class="block" id="news">

                <div class="block-item" id="block" >
                    <h3  class="name"  >МЕДИА</h3>
                </div>

                <div class="block-item" >
                    <h3 class="title">Скидка 50% для участников в <br>
                    категории W3 b M5</h3>
                </div>

                <div class="block-item" >
                    <h3 class="title">С 1 сентября увеличение стоимости участия</h3>
                </div>

                <div class="block-item">
                    <h3 class="title">Первая групповая шосейная велогонка в Чеченской Республике</h3>
                </div>

            </div>

            

            

            <footer></footer>
        </div>
    </main>
    <?php get_footer(); ?>