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
                    'post_type' => 'dunns_swiper_card',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'showposts' => 1,
                ));
            ?>

<section class="intro-menu" data-scrolly="fromBottom">
<?php while (have_posts()) : the_post(); ?>
                <div class="intro__container">
                    <div class="intro__content wrapper">


                  
            

                        <div class="intro__title">
                            <div class="line__title"></div>
                            <h3 class="menu__section__title"><?php the_title(); ?></h3>
                            <div class="line__title"></div>
                        </div>

                        <div class="intro__text">
                            <div class="intro__subtitle">
                                Notre menu a de tout pour tous.
                            </div>
                            <div class="intro__paragraph">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                        <div class="intro__button">
                            <a href="<?php the_permalink(); ?>" class="button">En savoir plus</a>
                        </div>

                    
                       
                        </div>
                        <div class="swiper-container" data-component="Carousel">
                            <div class="swiper-wrapper">
                                    <?php if( have_rows('dunns_image_swiper') ): ?>
                                        <?php while( have_rows('dunns_image_swiper') ): the_row(); ?>
                                <div class="swiper-slide">
                                
                                        <?php $image = get_sub_field('image_swiper'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    
                                    
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                </div>



<?php endwhile; ?>

    
            </section>

<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>
   





<section class="menu" data-scrolly="fromBottom">
    <div class="intro__button">
        <a href="https://singleapp.com/menus/menu_121013_document.pdf?1553707334" target="blank" class="button">Télécharger le menu</a>
    </div>

    <?php if (have_posts()) : ?>

        <?php query_posts(array(
            'post_type' => 'dunns_menu',
            'post_status' => 'publish',
            'showposts' => -1,
        ));
        ?>

        <?php while (have_posts()) : the_post(); ?>         

            <div class="menu__container" data-scrolly="fromBottom">

                <div class="menu__title">
                    <div class="line__title"></div>
                    <h4 class="menu__section__title"><?php the_title(); ?></h4>
                    <div class="line__title"></div>
                </div>

                <div class="menu__desc">
                    <?php the_content(); ?>
                </div>


                <?php if (have_rows('dunns_items_menu')) : ?>
                    <div class="plates__grid">

                        <?php while (have_rows('dunns_items_menu')) : the_row(); ?>




                            <div class="case" data-component="Modal" data-modal-id="tpl-modal" data-modal-plate="<?php echo the_sub_field('nom_item'); ?>" data-modal-text="<?php echo the_sub_field('desc_item'); ?>">
                                <div class="case__top">
                                    <p class="plate__title"><?php echo the_sub_field('nom_item'); ?></p>
                                    <div class="plates__price">
                                        <div class="price">
                                            <?php echo the_sub_field('prix_item_1'); ?>
                                            <div class="price__info"><?php echo the_sub_field('desc_prix_1'); ?></div>
                                        </div>
                                        <div class="price">
                                            <?php echo the_sub_field('prix_item_2'); ?>
                                            <div class="price__info"><?php echo the_sub_field('desc_prix_2'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>

    <?php else : ?>
        <p>Aucun article disponible!</p>
    <?php endif; ?>






</section>



<div class="intro__button">
    <a href="https://singleapp.com/menus/menu_121013_document.pdf?1553707334" target="blank" class="button">Télécharger le pdf</a>
</div>


<template id="tpl-modal">
    <div class="modal modal-menu">
        <div class="modal__scrim js-scrim"></div>
        <div class="modal__box">
            <div class="modal__content">
                <h2>{{plate}}</h2>
                <p>{{text}}</p>
                <button class="modal__close js-close"></button>
            </div>
        </div>
    </div>
</template>

<?php get_footer(); ?>