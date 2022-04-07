<?php get_header() ?>
<main class="site__main">
    <!-- <h1>category-cours.php</h1> -->
    <?php  ?>
    <section class="formation">
        <a href="?cletri=title&ordre=asc">Tri ascendant</a>
        <a href="?cletri=title&ordre=desc">Tri descendant</a>

    <?php wp_nav_menu(array(
        "menu"=> "categorie_cours",
        "container" => "nav"
    ));  ?>

    <?php
        $slug_categorie_de_la_page = trouve_la_categorie(array('cours', 'web', 'jeu', 'creation-3d', 'design', 'design', 'utilitaire', 'video'));
        $ma_categorie = get_category_by_slug($slug_categorie_de_la_page);
        echo "<h2>" . $ma_categorie->name . "</h2>";
    ?>

        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
            <?php 
            if (is_category(array('cours', 'creation-3d', 'web', 'jeu', 'design', 'utilitaire', 'video'))) :
            get_template_part('gabarit/content', 'cours'); 
            else :
            get_template_part('gabarit/content', 'macrame'); 
            endif;
            ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
  
</main>
<?php get_footer() ?>