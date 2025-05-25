<?php

get_header();
?>

    <main id="primary" class="site-main">
    <section class="banner">
        <video class="banner__video" autoplay muted loop playsinline>
            <source src="<?php echo get_theme_file_uri('/Studio.mp4'); ?>" type="video/mp4">
            <img src="<?php echo get_theme_file_uri('/assets/images/banner.png'); ?>" alt="Image de fond Fleurs d'oranger & chats errants">
        </video>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" class="floating-image">
    </section>
        <section id="#story" class="story">
            <h2 class="section-title"><span>L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3 class="section-title"><span>Les personnages</span></h3>
                    
                </div>
                <div class="other-characters swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure class="swiper-slide">';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
                </div>
                </div>
            </article>
            <article id="place">
                <div>
                    <h3 class="section-title"><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img src="<?php echo get_template_directory_uri() . '/images_koukaki/Nuages.png' ?>"
            alt="nuages" class="nuages">
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="section-title"><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

    </main><!-- #main -->

<?php
    
get_template_part( 'section nomination du film aux oscar' );
get_footer();
