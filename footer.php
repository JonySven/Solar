<footer>
       
       <div class="footer-wrap">
               <div class="block">

                   <h3 class="block-title">БЫСТРЫЕ ССЫЛКИ</h3>

                   <div class="inner">
                       <nav class="block-link">
                           <a href="<?php echo get_home_url(); ?>">Главная</a>
                           <a href="<?php echo get_home_url() . '/ all-news'; ?>">Новости</a>
                           <a href="<?php echo get_home_url() . '/ about'; ?>">О нас</a>
                       
                       </nav>
                       <nav class="block-link">
                           <a href="<?php echo get_home_url() . '/ all-event'; ?>">Мероприятия</a>
                           <a href="<?php echo get_home_url() . '/ all-media'; ?>">Медиа</a>
                           <a href="<?php echo get_home_url() . '/ contact'; ?>">Контакты</a>
                       
                       </nav>


                   </div>
                   
               </div>

           <div class="wall"></div>
    
                   <div class="block">
                       <h3  class="block-title">КОНТАКТЫ</h3>

                       <div class="inner">

                           <nav class="block-link">
                               <a href="<?php echo get_home_url() . '/ contact'; ?>">Связаться с нами</a>
                               <a href="<?php echo get_home_url() . '/ event'; ?>">Карта мероприятий</a>
                           </nav>
                        </div>
                        
                       <a class="btn" href="<?php echo get_home_url() . '/ contact'; ?>">СВЯЗАТЬСЯ</a>
                       
               
               </div>         
           </div>

</footer>

    <?php wp_footer(); ?>


</body>
</html>