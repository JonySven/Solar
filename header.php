<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <?php
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic', false, null);
        wp_enqueue_style('fonts');
    ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <?php wp_head(); ?>
</head>
<body>
    <header id="header">
            <div class="container">

                <div class="wrap">

                    <div class="wrap-reg-form">
                        <div class="position">
                            <h2><?= the_title();?> </h2>
                            <p><?php the_content(); ?></p>
                            
                        </div>
                        

                        <nav class="nav">
                            <a class="nav_reg_btn" href="http://reg.solarlab.cc/KO2021">РЕГИСТРАЦИЯ</a>
                            <a class="nav_reg_btn" href="">РЕГИСТРАЦИЯ КОМАНД</a>
                            <a class="nav_reg_btn" href="<?php echo get_home_url() . '/ event'; ?>"> ПОДРОБНОСТИ</a>
                        </nav>
                    </div>

                    <div class="wrap-info">
                        <div class="info-iner">
                            <span>4</span><br>
                            <p class="etap" >этапа</p><br>
                            <p class="km" >229 км</p>
                            
                        </div>
                    </div>

                </div>

            </div>

        
    </header>