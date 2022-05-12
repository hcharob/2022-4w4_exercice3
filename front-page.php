<?php get_header() ?>
<main class="site__main">

    <div class="oeil_conteneur">
        <div class="oeil">
            <div class="iris"></div>
        </div>
    </div>

    <!-- <h1>---- Front-page.php ------</h1> -->
    <?php if (have_posts()): the_post(); ?>
    <!-- <?php the_title() ?> -->
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
            "menu"=>"evenement",
            "container"=>"nav"));
    ?>


    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#3D8BF2" fill-opacity="1"
            d="M0,64L0,160L72,160L72,128L144,128L144,224L216,224L216,32L288,32L288,0L360,0L360,32L432,32L432,96L504,96L504,96L576,96L576,320L648,320L648,288L720,288L720,288L792,288L792,32L864,32L864,64L936,64L936,256L1008,256L1008,160L1080,160L1080,32L1152,32L1152,224L1224,224L1224,224L1296,224L1296,32L1368,32L1368,64L1440,64L1440,0L1368,0L1368,0L1296,0L1296,0L1224,0L1224,0L1152,0L1152,0L1080,0L1080,0L1008,0L1008,0L936,0L936,0L864,0L864,0L792,0L792,0L720,0L720,0L648,0L648,0L576,0L576,0L504,0L504,0L432,0L432,0L360,0L360,0L288,0L288,0L216,0L216,0L144,0L144,0L72,0L72,0L0,0L0,0Z">
        </path>
    </svg> -->

</main>
<?php get_footer() ?>