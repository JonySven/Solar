<?php 
    // Template Name: Open_1_news1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /style.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/page-news-inner.css" />
   <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/footer.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/sitebar.css" />
    <?php
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic', false, null);
        wp_enqueue_style('fonts');
        
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="http://solarlab/wp-content/themes/wp_solarlab/assets/js/script.js"></script> 
</head>
<body>
    <header>
  
            <div class="coutner__data">
                <div class="data">
                    <h1 class="data__title">Крымская осень<br> 2022</h1>
                    <p class="data__subtitle">Дата проведения</p>
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
                            <span class="couter__timer_value">59</span>
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
                    <a href="">Регистрация</a>
                    <a href="">Регистрация команд</a>
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
 
    
            <div class="main_news_post">
                     <h2 class="main_news_post_title"><?php the_title(); ?></h2><br><br>
                    <p class="main_news_post_text"><?php the_content(); ?></p><br><br>
                    <p class="main_news_post_data"><?php the_date('j F Y'); ?> 
            </div>
        </div>
    </main>

    <?php get_footer(); ?>
  
