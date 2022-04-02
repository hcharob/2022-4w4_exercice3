<?php get_header() ?>
<main class="site__main">
    <!-- <h1>---- single-post.php ------</h1> -->
   <?php if (have_posts()): the_post(); ?>
   <article class="article">
   <h2><?php the_title() ?></h2>
   <div class="article__contenu">
     <?php
          if(has_post_thumbnail()) : 
     ?>
     <figure class="article__contenu__figure">
          <?php the_post_thumbnail("thumbnail"); ?>
     </figure>
               
     <?php endif ?>
     <?php the_content() ?>  
     </div>
     <div class="animation3">
            <div class="animation__cercle"></div>
            <div class="animation__cercle"></div>
            <div class="animation__cercle"></div>
            <div class="animation__cercle"></div>
            <div class="animation__cercle"></div>
            <div class="animation__cercle"></div>
        </div>
   </article>
   <!-- Fin de l'article contenu -->
   <?php endif ?>

</main>
<?php get_footer() ?>