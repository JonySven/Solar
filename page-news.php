<?php 
    // Template Name: News
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /style.css" />
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/news.css" />
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
<main>
    
<?php get_sidebar(); ?>

    <div class="news-container">
  
        <div class="block-news" id="news">

            <div class="block-news-item" id="block" >
                <h3  class="name"  >НОВОСТИ</h3>
            </div>

            <?php query_posts('cat=4');
                 while (have_posts()) : the_post(); ?>     
                <div class="block-news-item" >
                    <h3 class="news-title"><a class="news-title" href="<?php the_permalink(get_post()) ?>"><?php the_title(); ?></a></h3>
                    <?php the_date('j F Y'); ?>
                </div>
                <?
                endwhile;
              
                wp_reset_query();
            ?>
           

           <?php the_posts_pagination(); ?>    
              
        </div>  
       
    </div>
  
    
</main>

<?php get_footer(); ?>
