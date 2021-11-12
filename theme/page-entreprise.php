<?php get_header(); ?>

        <div class="hero">    
            <?php if( have_rows('hero_image_container') ): ?>
                <?php while( have_rows('hero_image_container') ): the_row(); ?> 
                    <?php $image = get_sub_field('hero_image'); ?>
                    <div  style="background-image:url('<?php echo $image['url']; ?>')" class="img_hero hero-menu"></div>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>


        <?php if (have_posts()) : ?>

<?php query_posts(array(
        'post_type' => 'page_entreprise',
        'post_status' => 'publish',
        'order' => 'ASC',
        'showposts' =>-1,
    ));
?>
<section class="equipe" data-scrolly="fromBottom">

    <?php wp_nav_menu(array(
                    'theme_location' => 'menu_entreprise',
                    'container_class' => 'nav__entreprise',
                    'menu_class' => 'entreprise__ul',
            )); ?>
       

<?php while (have_posts()) : the_post(); ?>

<?php if( have_rows('entreprise_section_id')   ): ?>        
<?php while( have_rows('entreprise_section_id') ): the_row(); ?> 
    <div class="menu__title">        
        <div class="line__title"></div>        
            <h3 id="<?php echo get_sub_field('section_id') ?>" class="menu__section__title section__entreprise">    
            <?php echo get_sub_field('section_titre') ?>  
            </h3>        
        <div class="line__title"></div>         
    </div>        
<?php endwhile; ?>                        
<?php endif; ?> 


    <?php if( have_rows('entreprise_container')   ): ?>        
     <?php while( have_rows('entreprise_container') ): the_row(); ?>                       
                            

        <div class="entreprise" data-scrolly="fromBottom">                    
            <div class="entreprise__container intro__container">                    
                <?php if(get_row('classe_intro')) ?>                    
                <div class="entreprise__text <?php echo get_sub_field('classe_intro') ?>">                    

                    <h4><?php echo get_sub_field('sous_titre'); ?></h4>                    
                    <p><?php echo get_sub_field('texte'); ?></p>
                    
                    <?php if( have_rows('bt_entreprise')   ): ?>
                    <?php while( have_rows('bt_entreprise') ): the_row(); ?>      

                        <?php if(get_row('bt_class')) ?>
                        <div class="intro__button contact__entreprise <?php echo get_sub_field('bt_class') ?>">
                            <a
                                href="<?php echo get_sub_field('bt_url'); ?>"
                                target="blank"
                                class="button entre"><?php echo get_sub_field('bt_text'); ?>
                            </a>
                        </div>

                    <?php endwhile; ?>                        
                    <?php endif; ?> 

                </div>          
                                              
                <?php if(get_row('hide_swiper')) ?>                    
                <div class="swiper-container <?php echo get_sub_field('hide_swiper') ?>" data-component="Carousel" data-scrolly="fromBottom">                    
                    <div class="swiper-wrapper">                    
                        <?php if( have_rows('swiper_img_container') ): ?>                
                        <?php while( have_rows('swiper_img_container') ): the_row(); ?>                
                            <div class="swiper-slide">                
                                <?php $image = get_sub_field('img_swiper'); ?>               
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">               
                            </div>                
                        <?php endwhile; ?>                    
                        <?php endif; ?>            
                    </div>               
                                    
                    <div class="swiper-pagination"></div>                
                </div>                
                                    
            </div>                    
                      
        </div>                        
                            
                                
    <?php endwhile; ?>                        
    <?php endif; ?>                          

<?php endwhile; ?>
</section>
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>

<?php get_footer(); ?>