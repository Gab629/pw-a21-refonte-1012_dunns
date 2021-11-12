<?php get_header(); ?>

<section class="equipe equipe__single" data-scrolly="fromBottom">

  <div class="menu__title">
    <div class="line__title"></div>
      <h3 class="menu__section__title"><?php the_title(); ?></h3>
    <div class="line__title"></div>
  </div>

  <div class="entreprise" data-scrolly="fromBottom">
    <div class="entreprise__container intro__container">
    <div class="entreprise__text">
      <?php the_content(); ?></div>
    </div>     
  </div>

</section>
<?php get_footer(); ?>