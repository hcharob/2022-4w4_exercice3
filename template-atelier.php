<?php
/**
 * Template name: Atelier
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

?>

<?php get_header() ?>
<main class="site__main">
   <article class="atelier">

      <!-- <h1> --------- Template Atelier --------- </h1> -->
      <?php if (have_posts()): the_post(); ?>
      <h1><?php the_title() ?></h1>

      <section class="atelier__description_atelier">
         <?php the_field('description_de_latelier'); ?>
      </section>

      <p class="atelier__animateur">
         <?php the_field('animateur'); ?>
      </p>

      <p class="atelier__date_debut">
         <?php the_field('date_de_debut_de_l’atelier_') ?>
      </p>

      <p class="atelier__date_fin">
         <?php the_field('date_de_fin_de_l’atelier_'); ?>
      </p>

      <p class="atelier__jours_semaine">
         <?php the_field('jours_de_la_semaine_de_l’atelier_'); ?>
      </p>

      <p class="atelier__heures_debut">
         <?php the_field('heure_de_debut_'); ?>
      </p>

      <p class="atelier__heures_fin">
         <?php the_field('heure_de_fin_'); ?>
      </p>

      <p class="atelier__duree_seance">
         <?php the_field('duree_d’une_seance_d’atelier_'); ?>
      </p>

      <p class="atelier__local">
         <?php the_field('local_ou_se_deroulera_l’atelier'); ?>
      </p>
      
   </article>
   <?php endif ?>
</main>
<?php get_footer() ?>