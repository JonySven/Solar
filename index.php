
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/styles.css" /> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /assets/ff/microsoftsansserif.ttf">
    <?php
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic', false, null);
        wp_enqueue_style('fonts');
    ?>
    
</head>
<body style= "font-family: sans-serif;">
   <?php get_header(); ?>
    <main>
    
        
        <?php get_sidebar(); ?>

      <div class="main-wrap">

 
      <div class="container">
      

      <div class="block">

        
        <?php query_posts('cat=1');
                    while (have_posts()) : the_post(); ?>

                        <div class="block-item">
                            <h3 class="title" > <a class="title" href="<?php echo get_home_url() . '/ event'; ?>"> <?php the_title(); ?> </a> </h3>
                            <?php the_content(); ?>
                        </div>

                    <? 
                    endwhile;
                    wp_reset_query();
                    ?>
                        <div class="block-item">
                            <h3 class="title" > <a class="title" href="<?php echo get_home_url() . '/ page-event2021 '; ?>">Крымская осень 2021</a> </h3>
                            <p>30.09.2021 - 03.10.2021</p>
                        </div> 
                        <div class="block-item">
                            <h3 class="title" > <a class="title" href="<?php echo get_home_url() . '/ page-event2020 '; ?>">Крымская осень 2020</a> </h3>
                            <p>24.09.2020 - 27.09.2020</p>
                        </div>  

                        <div class="block-item">
                            <h3 class="title" > <a class="title" href="<?php echo get_home_url() . '/ page-event2019 '; ?>">Крымская осень 2019</a> </h3>
                            <p>25.09.2019 - 28.09.2019</p>
                        </div>
                          
                        <div class="block-item">
                            <h3 class="title" > <a class="title" href="<?php echo get_home_url() . '/ page-event2018 '; ?>">Крымская осень 2018</a> </h3>
                            <p>05.09.2018 - 08.09.2018</p>
                        </div>  

                          
                        
                        

      </div>  

      
      

  </div> 


    <div class="container">
        

            <div class="block" id="news">

                <div class="block-item" id="block" >
                    <h3  class="name "  ><a class="name-padge" href="<?php echo get_home_url() . '/ all-news'; ?>">НОВОСТИ</a> </h3>
                </div>

                <?php query_posts('cat=4');
                 while (have_posts()) : the_post(); ?>



                <div class="block-item" >
                    <h3 class="title"><a href="<?php the_permalink(get_post()) ?>"><?php the_title(); ?></a></h3>
                    <?php the_date('j F Y'); ?>
                </div>

                <?
                endwhile;
                wp_reset_query();
                ?>

                <a class="block-item_btn" href="<?php echo get_home_url() . '/ all-news'; ?>">ВСЕ НОВОСТИ</a>

            </div>  
            
           

    </div>

   <?php get_template_part('block-media') ?>
   

    </main>
    
<?php get_footer(); ?>
