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
    'post_type' => 'dunns_page_commerce',
    'post_status' => 'publish',
    'showposts' => 2,
));
?>
<section id="emplacement" class="emplacement" data-scrolly="fromBottom">
<?php while (have_posts()) : the_post(); ?>



            <div class="menu__title">
                <div class="line__title"></div>
                <h3 class="menu__section__title section__entreprise">
                    <?php the_title(); ?>
                </h3>
                <div class="line__title"></div>
            </div>

            

            <div class="entreprise">
                <div class="entreprise__container">
                    <div class="entreprise__title">
                        <div class="title__entreprise">
                        <?php if (have_rows('commerce_sous-titre')) : ?>
                            <?php while (have_rows('commerce_sous-titre')) : the_row(); ?>
                                <h3>
                                    <?php echo the_sub_field('text_sous_titre'); ?>
                                </h3>
                            <?php endwhile; ?>
                        <?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="entreprise__text">
                        <?php the_content(); ?>
                    </div>
                </div>
                
            </div>

    </div>

<?php endwhile; ?>
</section>
<?php else : ?>
<p>Aucun article disponible!</p>
<?php endif; ?>     







<?php if (have_posts()) : ?>

<?php query_posts(array(
    'post_type' => 'dunns_page_commerce',
    'post_status' => 'publish',
    'order' => 'ASC',
    'showposts' => 1,
));
?>
<section id="viande" class="viande">
<?php while (have_posts()) : the_post(); ?>

<div class="menu__title">
                <div class="line__title"></div>
                <h3 class="menu__section__title section__entreprise">
                    Viande Fumée Montréal
                </h3>
                <div class="line__title"></div>
            </div>
            <div class="entreprise">
                <div class="entreprise__container intro__container">
                    <div class="entreprise__text intro">
                        <?php if (have_rows('commerce_sous-titre')) : ?>
                            <?php while (have_rows('commerce_sous-titre')) : the_row(); ?>
                                <h3>
                                    <?php echo the_sub_field('text_sous_titre'); ?>
                                </h3>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                        <?php the_content(); ?>
                    </div>
                    <div class="swiper-container" data-component="Carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <?php if( have_rows('dunns_image_swiper') ): ?>
                                    <?php while( have_rows('dunns_image_swiper') ): the_row(); ?>
                                        <?php $image = get_sub_field('image_swiper'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php endwhile; ?>
                                <?php endif; ?>
                               
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>


<?php endwhile; ?>
</section>
<?php else : ?>
<p>Aucun article disponible!</p>
<?php endif; ?>    

        


        
           



<?php get_footer(); ?>