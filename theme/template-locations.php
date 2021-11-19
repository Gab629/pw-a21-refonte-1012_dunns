<?php 

/* Template Name: Locations */

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

        <section class="emplacements">
            <div class="bloc_title">
                <div class="line__title"></div>
                <h2><?php the_title(); ?></h2>
                <div class="line__title"></div>
            </div>

            <?php
            $content = get_the_content();
            $content = str_replace('<p', '<p class="subtitle_emplacement"', $content); ?>
            <?php echo $content ?>

            
            

            <div class="cartes">
                <div class="emplacement_cartes" >
                    
                <?php if (have_posts()) : ?>

                        <?php query_posts(array(
                            'post_type' => 'page_emplacement',
                            'post_status' => 'publish',
                            'showposts' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC'
                           

                        ));
                        ?>

                        <?php while (have_posts()) : the_post(); ?>

                    <div class="maps" 
                   
                    data-scrolly="fromBottom">
                        <iframe
                            src="https://snazzymaps.com/embed/345463"
                            width="100%"
                            height="600px"
                            style="border: none"
                        ></iframe>

                        <p class="nom_dunns"><?php the_title(); ?></p>
                        <p class="adresse_dunns"><?php the_content(); ?></p>

                        <div class="bouton_maps">
                            <a
                                data-component="Modal"
                                data-modal-id="tpl-modal"
                                data-modal-title="<?php the_title(); ?>"
                                <?php if (get_field('sous_titre')) : ?>
                                data-modal-subtitle="<?php the_field('sous_titre'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('telephone')) : ?>
                                data-modal-telephone="<?php the_field('telephone'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('courriel')) : ?>
                                data-modal-courriel="<?php the_field('courriel'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('adresse')) : ?>
                                data-modal-adresse="<?php the_field('adresse'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('ville')) : ?>
                                data-modal-ville="<?php the_field('ville'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('code_postal')) : ?>
                                data-modal-postal="<?php the_field('code_postal'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('tous_les_jours')) : ?>
                                data-modal-allday="<?php the_field('tous_les_jours'); ?>"
                                <?php endif; ?>
                                <?php if (get_field('heure_speciale')) : ?>
                                data-modal-heure1="<?php the_field('heure_speciale'); ?>"
                                <?php endif; ?>
                                >En savoir plus</a
                            >
                        </div>
                    </div>
                        
                        <?php endwhile; ?>
                        <?php endif; ?>
            
                </div>
            </div>
        </section>

<?php get_footer(); ?>

<template id="tpl-modal">
            <div class="modal modal_emplacement">
                <div class="modal__scrim"></div>
                <div class="modal__box">
                    <div class="modal__content">
                        <h2>{{title}}</h2>
                        <p class="subtitle_modal">{{subtitle}}</p>
                        <div class="informations_modale">
                            <div class="contactez_modale">
                                <h3>Contactez</h3>
                                <ul>
                                    <li>
                                        <span class="emphase_modal"
                                            >Téléphone :</span
                                        >
                                        {{telephone}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Courriel :</span
                                        >
                                        {{courriel}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Adresse :</span
                                        >
                                        {{adresse}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Ville :</span
                                        >{{ville}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Code postal :</span
                                        >{{postal}}
                                    </li>
                                </ul>
                            </div>
                            <div class="heures_modale">
                                <h3>Heures</h3>
                                <ul>
                                    <li>
                                        <span class="emphase_modal"
                                            >Lundi :</span
                                        >
                                        {{allday}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Mardi :</span
                                        >
                                        {{allday}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Mercredi :</span
                                        >
                                        {{allday}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Jeudi :</span
                                        >{{allday}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Vendredi :</span
                                        >{{heure1}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Samedi :</span
                                        >{{heure1}}
                                    </li>
                                    <li>
                                        <span class="emphase_modal"
                                            >Dimanche :</span
                                        >{{allday}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="modal__close js-close"></button>
                </div>
            </div>
        </template>