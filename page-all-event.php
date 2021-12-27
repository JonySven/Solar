<?php 
    // Template Name: all-event
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/all-event.css" />
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
<?php get_sidebar(); ?>
    <div class="news-container">
        

        <div class="block-news" id="news">

            <div class="block-news-item" id="block" >
                <h3  class="name"  >Мероприятия</h3>
            </div>

            <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php echo get_home_url() . '/ event '; ?>">Крымская осень 2022</a></h3>
                    <p><strong> 05.09.2018 - 08.09.2018</strong></p>
                </div>
                 <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php echo get_home_url() . '/ page-event2021 '; ?>">Крымская осень 2021</a></h3>
                    <p><strong>30.09.2021 - 03.10.2021</strong></p>
                </div>

                <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php echo get_home_url() . '/ page-event2020 '; ?>">Крымская осень 2020</a></h3>
                    <p><strong> 24.09.2020 - 27.09.2020</strong></p>
                </div>

                <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php echo get_home_url() . '/ page-event2019 '; ?>">Крымская осень 2019</a></h3>
                    <p><strong>25.09.2019 - 28.09.2019</strong></p>
                </div>      
   
                <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php echo get_home_url() . '/ page-event2018 '; ?>">Крымская осень 2018</a></h3>
                    <p><strong><b>05.09.2018 - 08.09.2018</b></strong></p>
                </div>          
        </div>  
    

</div>
<?php get_footer(); ?>
</body>
</html>