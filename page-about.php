<?php 
    // Template Name: About
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/footer.css" />
   <link rel="stylesheet" href=" <?php echo get_template_directory_uri() ?> /assets/css/sitebar.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /style.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /assets/css/about.css'" />
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="http://solarlab/wp-content/themes/wp_solarlab/assets/js/script.js"></script> 

</head>
<body>
    <main>
        <?php get_sidebar(); ?>

        <div class="about">
            <h1>О НАС</h1>
            <p>SolarLab.SPORT компания-оператор мероприятий Крымская осень 2020 (КО 2020), Крымская осень 2019 (КО2019) и Крымская осень 2018 (КО2018).  Генеральный партнер  мероприятия «Беговые гонки 2019» и фестиваля «Велопобеда 2018».</p>
        </div>
    </main>
    <?php get_footer(); ?>
