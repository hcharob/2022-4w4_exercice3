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

      <h3>Description de l'atelier</h3>

      <p class="atelier__animateur">
         L'animateur de l'atelier: <span><?php the_field('animateur'); ?></span>
      </p>

      <p class="atelier__local">
      L'atelier sera donné au local: <span><?php the_field('local_ou_se_deroulera_l’atelier'); ?></span>
      </p>
      
      <section class="atelier__description_atelier">
         <?php the_field('description_de_latelier'); ?>
      </section>

      <h3>Horaires et dates de l'atelier</h3>
      <p class="atelier__duree_seance">
         Durée de chacune des séances est de <span><?php the_field('duree_d’une_seance_d’atelier_'); ?> heures</span>
      </p>
      
      <p class="atelier__date_debut">
         Date de début: <span><?php the_field('date_de_debut_de_l’atelier_') ?></span>
      </p>

      <p class="atelier__date_fin">
         Date de fin: <span><?php the_field('date_de_fin_de_l’atelier_'); ?></span>
      </p>

      <p class="atelier__jours_semaine">
         La formation se donnera: <span><?php the_field('jours_de_la_semaine_de_l’atelier_'); ?></span>
      </p>

      <p class="atelier__heures">
         L'horaire: <span><?php the_field('heure_de_debut_'); ?> à <?php the_field('heure_de_fin_'); ?></span>
      </p>

   </article>
   <?php endif ?>
</main>
<?php get_footer() ?>