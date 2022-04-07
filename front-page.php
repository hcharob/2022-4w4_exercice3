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
    <?php
    /* ------------------------------------------ menu accueil */
        wp_nav_menu(array(
            "menu"=>"menu_accueil",
            "container"=>"nav"));
    ?>

    <?php
    /* ------------------------------------------ menu evenement */
        wp_nav_menu(array(
            "menu"=>"menu_evenement",
            "container"=>"nav"));
    ?>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F29F05" fill-opacity="1"
            d="M0,32L40,58.7C80,85,160,139,240,149.3C320,160,400,128,480,101.3C560,75,640,53,720,64C800,75,880,117,960,160C1040,203,1120,245,1200,234.7C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg> -->


</main>
<?php get_footer() ?>