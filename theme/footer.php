<footer>
            <div class="footer__content wrapper" data-scrolly="Drop">
                <div class="top__footer">
                    <div class="footer__logo">
                        <img
                            src="<?php bloginfo(template_url); ?>/assets/images/logo_dunns.png"
                            alt="logo Dunns"
                        />
                    </div>

                    <nav class="footer__nav">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_footer',
                        'container_class'=> 'footer__nav',
                        'menu_class'=> 'footer__ul'
                    )); ?>
                    </nav>


                    <?php if (have_posts()) : ?>

                    <?php query_posts(array(
                        'post_type' => 'icon__footer',
                        'post_status' => 'publish',
                        'showposts' => -1,
                    ));
                    ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="footer__icons">
                            <?php if( have_rows('social_media') ): ?>
                                <?php while( have_rows('social_media') ): the_row(); ?>
                                    <a href="<?php echo the_sub_field('social_link'); ?>" class="icon icon--lg">
                                        <?php $icon = get_sub_field('social_icon'); ?>   
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo the_sub_field('social_name'); ?>">
                                    </a>  
                                <?php endwhile; ?>
                            <?php endif; ?>
                               
                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <p>Aucun article disponible!</p>
                    <?php endif; ?>


                    

                    
                        
                    
                </div>

                <div class="bottom__footer">
                   
                    <div class="footer__language">English</div>

                    <?php if (have_posts()) : ?>

                    <?php query_posts(array(
                        
                        'post_status' => 'publish',
                        'showposts' => -1,
                        'category_name' => 'credits', 
                    ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <div class="footer__language"><a href="<?php the_permalink(); ?>"> Crédits</a></div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                    <div class="footer__copyright">
                        Copyright © 2021 TouchBistro Inc.
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>