

   <?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php query_posts(array(
        'post_type' => 'cpt_publicite',
        'post_status' => 'publish',
        'category_name' => 'pub_active', 
        'showposts' => 1,
    ));
      
?>        
<?php if( have_rows('hero_image_container') ): ?> 
<?php while( have_rows('hero_image_container') ): the_row(); ?> 

<div class="hero">  
    <?php while (have_posts()) : the_post(); ?>
    
    
    
    <div class="concours">
        <h2><?php the_title(); ?></h2>            
        <?php the_excerpt(); ?>            
        <a href="<?php the_permalink(); ?>">En savoir plus</a>
    </div>  
    <?php $image = get_sub_field('hero_image'); ?>
    <div  style="background-image:url('<?php echo $image['url']; ?>')" class="img_hero hero-menu"></div>


 

<?php endwhile; ?>
</div>
<?php endwhile; ?>
    <?php endif; ?> 
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>



        

<?php if (have_posts()) : ?>

<?php query_posts(array(
        'post_type' => 'page_accueil',
        'post_status' => 'publish',
        'showposts' => 1,
        'category_name' => 'menu_accueil', 
    ));
?>
<section class="food-menu">
<?php while (have_posts()) : the_post(); ?>

        
            <div class="menu__title">
                <div class="line__title"></div>
                <h3 class="menu__section__title"><?php the_title(); ?></h3>
                <div class="line__title"></div>
            </div>

            <div class="menu__grid">
                <?php if( have_rows('section_menu_nourriture') ): ?>
                <?php while( have_rows('section_menu_nourriture') ): the_row(); ?>
                <a href="<?php echo get_sub_field('link_id_page_menu'); ?>" class="case">
                    <?php $imageMenu = get_sub_field('menu_img'); ?>
                    <div style="background-image: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0) 50%,
            rgba(0, 0, 0, 0.75) 100%
        ),
        url('<?php echo $imageMenu['url']; ?>');" class="grid__element element">
                        
                        <p><?php echo get_sub_field('menu_nourriture'); ?></p>     
                        
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        

        <?php endwhile; ?>

        </section>
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>


        


        <?php if (have_posts()) : ?>

<?php query_posts(array(
        'post_type' => 'dunns_swiper_card',
        'post_status' => 'publish',
        'order' => 'DESC',
        'showposts' => 1,
    ));
?>

<section class="intro-menu">
<?php while (have_posts()) : the_post(); ?>

<section class="viande-fumee">
            <div class="viande__container">
                <div class="viande__content wrapper">
                    <div class="viande__title">
                        <div class="line__title"></div>
                        <h3 class="menu__section__title"><?php the_title(); ?></h3>
                        <div class="line__title"></div>
                    </div>
                    <div class="viande__text">
                        <div class="viande__subtitle">
                        <?php the_title(); ?>
                        </div>
                        <div class="viande__paragraph">
                           <?php the_excerpt(10); ?>
                        </div>
                    </div>
                    <div class="viande__button">
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
        </section>


<?php endwhile; ?>


</section>

<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>


        
<?php if (have_posts()) : ?>

<?php query_posts(array(
    'post_type' => 'contenu_text',
    'post_status' => 'publish',
    'showposts' => -1,
    'category_name' => 'histoire', 

));
?>

<?php while (have_posts()) : the_post(); ?>

        <section class="notre-histoire">
            <div class="bloc-texte" data-scrolly="fromBottom">
                <div class="histoire-wrapper">
                    <div class="histoire-texte">
                        <div class="histoire__title">
                            <div class="line__title"></div>
                            <h3><?php the_title(); ?></h3>
                            <div class="line__title"></div>
                        </div>
                        <?php if (get_field('sous_titre')) : ?>
                            <h4>
                            <?php the_field('sous_titre'); ?>
                            </h4>
                            <?php endif; ?>
                      
                            <?php if (get_field('text_paragraph_1')) : ?>
                            <p>
                            <?php the_field('text_paragraph_1'); ?>
                            <?php endif; ?>
                            <?php if (get_field('points')) : ?>
                                <span class="plus"> <?php the_field('points'); ?></span>
                                <?php endif; ?>
                            </p>
                            <?php if (get_field('text_paragraph_2')) : ?>
                            <p>
                            <?php the_field('text_paragraph_2'); ?>
                            </p>
                            <?php endif; ?>
                        <div class="bouton-histoire">
                            <a href="">En savoir plus</a>
                        </div>
                    </div>
                    <?php if (get_field('image_section_1')) : ?>
                        <?php $image = get_field('image_section_1'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                </div>
            </div>
            <div class="bloc-texte" data-scrolly="fromBottom">
                <div class="histoire-wrapper">
                <?php if (get_field('image_section_2')) : ?>
                        <?php $image = get_field('image_section_2'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                    <div class="histoire-texte">
                    <?php if (get_field('text_paragraph_3')) : ?>
                            <p>
                            <?php the_field('text_paragraph_3'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_4')) : ?>
                            <p>
                            <?php the_field('text_paragraph_4'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_5')) : ?>
                            <p>
                            <?php the_field('text_paragraph_5'); ?>
                            </p>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="bloc-texte" data-scrolly="fromBottom">
                <div class="histoire-wrapper">
                    <div class="histoire-texte">
                    <?php if (get_field('text_paragraph_6')) : ?>
                            <p>
                            <?php the_field('text_paragraph_6'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_7')) : ?>
                            <p>
                            <?php the_field('text_paragraph_7'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_8')) : ?>
                            <p>
                            <?php the_field('text_paragraph_8'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_9')) : ?>
                            <p>
                            <?php the_field('text_paragraph_9'); ?>
                            </p>
                            <?php endif; ?>
                    </div>
                    <?php if (get_field('image_section_3')) : ?>
                        <?php $image = get_field('image_section_3'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                </div>
            </div>
        </section>

        <?php endwhile; ?>
        <?php endif; ?>

<?php if (have_posts()) : ?>

<?php query_posts(array(
    'post_type' => 'page_accueil',
    'post_status' => 'publish',
    'showposts' => -1,
    'category_name' => 'emplacement', 

));
?>
<section class="map" data-scrolly="fromBottom">
<?php while (have_posts()) : the_post(); ?>

        
            <div class="menu__title">
                <div class="line__title"></div>
                    <h3><?php the_title(); ?></h3>
                <div class="line__title"></div>
            </div>
            <?php if( have_rows('section_map_container') ): ?>
                <?php while( have_rows('section_map_container') ): the_row(); ?>
                    
                    <iframe
                        src="<?php echo get_sub_field('snazzy_map'); ?>"
                        width="100%"
                        height="600px"
                        style="border: none"
                    ></iframe>

                <?php endwhile; ?>
            <?php endif; ?>
                        
       

        <?php endwhile; ?>
        </section>
        <?php endif; ?>

        <?php get_footer(); ?>
