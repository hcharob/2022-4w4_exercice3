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

      <section class="atelier__description_de_latelier">
         <?php the_field('description_de_latelier'); ?>
      </section>

      <p class="evenement__endroit">
         <?php the_field('endroit'); ?>
      </p>

      <p class="evenement__organisateur">
         <?php the_field('organisateur') ?>
      </p>

      <p class="evenement__date">
         <?php the_field('date'); ?>
      </p>

      <p class="evenement__heure">
         <?php the_field('heure'); ?>
      </p>
      
   </article>
   <?php endif ?>
   <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#3D8BF2" fill-opacity="1"
         d="M0,128L0,32L130.9,32L130.9,256L261.8,256L261.8,128L392.7,128L392.7,32L523.6,32L523.6,288L654.5,288L654.5,32L785.5,32L785.5,128L916.4,128L916.4,32L1047.3,32L1047.3,256L1178.2,256L1178.2,128L1309.1,128L1309.1,224L1440,224L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z">
      </path>
   </svg> -->
</main>
<?php get_footer() ?>