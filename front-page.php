<?php get_header() ?>
<main class="site__main">

    <section class="animation">
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
    </section>

    <!-- <h1>---- Front-page.php ------</h1> -->
    <?php if (have_posts()): the_post(); ?>

    <?php the_content() ?>
    <?php endif ?>

    <section>

        <div class="anim2">
            <div class="ligneCercle" id="ligne1">
                <div class="ligneCercle" id="ligne2">
                    <div class="ligneCercle" id="ligne3">
                        <div class="ligneCercle" id="ligne4"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>Les études en TIM</h1>
    <h3>Le département TIM</h3>
    <?php
    /* ------------------------------------------ menu accueil */
        wp_nav_menu(array(
            "menu"=>"menu_accueil",
            "container"=>"nav"));
    ?>
    <h3>Événements</h3>
    <?php
    /* ------------------------------------------ menu evenement */
        wp_nav_menu(array(
            "menu"=>"menu_evenement",
            "container"=>"nav"));
    ?>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#3D8BF2" fill-opacity="1" d="M0,320L48,304C96,288,192,256,288,202.7C384,149,480,75,576,74.7C672,75,768,149,864,160C960,171,1056,117,1152,122.7C1248,128,1344,192,1392,224L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>


</main>
<?php get_footer() ?>