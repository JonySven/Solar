<?php 
    // Template Name: Contact
?>
    <?php
        wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic', false, null);
        wp_enqueue_style('fonts');
    ?>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /style.css" />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /assets/css/contact.css" />

   <header>
        <div class="wrap">
            <div class="bgfon"></div>
             <a class="subtitle" href="<?php echo get_home_url(); ?>">solarlab.sport</a>
        </div>
    </header>
    <main>
        <div class="item-link">

            <div class="link">

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/photo.png" alt="photo">
    
                <div class="text">
                    <a class="title" href="https://vk.com/album12941216_282796712">Фото КО2021 </a>
                    <a class="subtitle" href="https://vk.com/album12941216_282796712">от @Art_Scienst_inst</a>
                </div>
                
            </div>

            <div class="link">

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/people.png" alt="photo">
    
                <div class="text">
                    <a class="title" href="http://reg.solarlab.cc/KO2021" >Крымская Осень 2021</a>
                    <a class="subtitle" href="http://reg.solarlab.cc/KO2021">РЕЗУЛЬТАТЫ</a>
                </div>
               
            </div>

            <div class="block-title">Выберите удобный способ связи</div>

            <div class="link" id="teleg" >

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/telegram_plane_logo_icon_144812.png" alt="photo">
    
                <div class="text">
                    <a class="title"  href="https://t.me/solarlabsport">Наш канал в Telegramm</a>
                </div>
                
            </div>

            <div class="block-title">Наши аккаунты в социальных сетях</div>

            <div class="link" id="face" >

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/FB_icon-icons.com_65484.png" alt="photo">
    
                <div class="text">
                    <a class="title"  href="https://www.facebook.com/SolarLabSPORT">Facebook</a>
                </div>
                
            </div>

            <div class="link" id="inst" >

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/Instagram_New_icon-icons.com_69008.png" alt="photo">
    
                <div class="text">
                    <a class="title"  href="https://www.instagram.com/accounts/login/">Instagram</a>
                </div>
                
            </div>

            <div class="link" id="sol" >

                <img src="<?php echo get_template_directory_uri() ?> . /assets/img/home_icon-icons.com_73532.png" alt="photo">
    
                <div class="text">
                    <a class="title"  href="<?php echo get_home_url(); ?>" >ПЕРЕЙТИ НА solarlab.SPORT</a>
                </div>
                
            </div>

        </div>
        

    </main>
</body>
</html>