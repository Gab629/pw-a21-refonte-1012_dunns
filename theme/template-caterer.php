<?php 

/* Template Name: Carterer */

?>


<?php get_header(); ?>


<div class="hero">    
            <?php if( have_rows('hero_image_container') ): ?>
                <?php while( have_rows('hero_image_container') ): the_row(); ?> 
                    <?php $image = get_sub_field('hero_image'); ?>
                    <div  style="background-image:url('<?php echo $image['url']; ?>')" class="img_hero hero-menu"></div>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>

        <section class="contenu_texte">
            <div class="bloc-texte" data-scrolly="fromBottom">
                <div class="texte-wrapper">
                    <div class="bloc_texte_contenu">

                    <?php if (have_posts()) : ?>

                    <?php query_posts(array(
                        'post_type' => 'contenu_text',
                        'post_status' => 'publish',
                        'showposts' => -1,
                        'category_name' => 'traiteur', 
                    
                    ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>
                   


                        <div class="bloc_title">
                            <div class="line__title"></div>
                            <h3><?php the_title(); ?></h3>
                            <div class="line__title"></div>
                            <?php if (get_field('numero_telephone')) : ?>
                                <p class="tel">
                            <?php the_field('numero_telephone'); ?>
                            </p>
                            <?php endif; ?>
                           
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

                        <div class="bouton-bloc">
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
                <div class="texte-wrapper">
                <?php if (get_field('image_section_2')) : ?>
                        <?php $image = get_field('image_section_2'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>
                    <div class="bloc_texte_contenu">
                    <?php if (get_field('text_paragraph_2')) : ?>
                            <p>
                            <?php the_field('text_paragraph_2'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_field('text_paragraph_3')) : ?>
                            <p>
                            <?php the_field('text_paragraph_3'); ?>
                            </p>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="bloc-texte" data-scrolly="fromBottom">
                <div class="texte-wrapper">
                    <div class="bloc_texte_contenu">
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
                            <?php if (get_field('text_paragraph_6')) : ?>
                            <p>
                            <?php the_field('text_paragraph_6'); ?>
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

        <?php the_content(); ?>
       
        <?php endwhile; ?>
        <?php endif; ?>


<?php get_footer(); ?>