<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package wbsw

 */



$current_lang = apply_filters( 'wpml_object_id', 14, 'post' );



?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php

        if(have_rows('introduccion')) {

            while( have_rows('introduccion')) : the_row();

            ?>   

            <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

                <div class="container-1">

                    <h1><?php the_sub_field("titulo"); ?></h1>

                    <p><?php the_sub_field("descripcion"); ?></p>

                    <a href="#soluciones">

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                    </a>

                </div>

            </section>


            <?php

            endwhile;

        }

                if(have_rows('soluciones')) {

                    while( have_rows('soluciones')) : the_row();

                    ?>

                    <section class="soluciones" id="soluciones">

                        <div class="container-1">

                            <div class="text">

                                <div>

                                    <h1 style="--themecolor: <?php the_sub_field('color'); ?>;"><?php the_sub_field('titulo_secundario', false, false); ?></h1>

                                    <p class="desc-tcn"><?php the_sub_field('descripcion'); ?></p>

                                    <br>

                                </div>

                            </div>

                            
                            <div class="repeater">

                                <?php

                                if(have_rows('ventajas')) {

                                    while( have_rows('ventajas')) : the_row(); ?>

                                        <h2><?php the_sub_field('titulo'); ?></h2>

                                        <?php

                                        if(have_rows('repetidor')) {

                                            while( have_rows('repetidor')) : the_row();

                                            ?>

                                            <div>

                                                <img src="<?php the_sub_field('icono'); ?>">

                                                <p><?php the_sub_field('texto'); ?></p>

                                            </div>

                                            <?php

                                            endwhile;

                                        }

                                    endwhile;

                                }

                                ?>

                            </div>

                            

                        </div>

                    </section>

                    <?php

                    endwhile;

                }

                $second_query = new WP_Query( array(

                    'post_type' => 'ofertas_trabajo',

                    'posts_per_page' => 100

                ));
                

                if ( $second_query->have_posts() ) {
                
                    ?>

                    <section class = "ofertas" id = "ofertas">

                        <div class="container-1">

                            <h1> <?php _e("Our offers", "ws")  ?> </h1>

                            <?php

                                while ( $second_query->have_posts() ) {

                                    $second_query->the_post();
                                    
                                    ?>

                                    <div class="oferta">

                                        <h2> <?php echo get_the_title(); ?> </h2>

                                        <div class="oferta-content">

                                            <div class="info-oferta0">

                                                <div class="desc-short">

                                                    <?php echo the_field('descripcion_corta'); ?>

                                                </div>
                                                
                                                <a class="button-generic d-desktop" href = "<?php echo get_permalink(); ?>" style = " width: 70%; color: white; "> <?php _e("See offer", "ws") ?> </a>

                                                <a class="button-generic d-mobil" href = "<?php echo get_permalink(); ?>" style = " width: 100%; color: white; " > <?php _e("See offer", "ws") ?> </a>

                                            </div>

                                            <div class="info-oferta">

                                                <div class="info">
                                                    
                                                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2024/10/geo-alt-fill.svg" width="20" height="20">

                                                    <p> <?php echo the_field('lugar'); ?> </p>

                                                </div>

                                                <div class="info">

                                                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2024/10/briefcase.svg" width="20" height="20">

                                                    <p> <?php echo the_field('presencialidad'); ?> </p>

                                                </div>

                                                <div class="info">

                                                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2024/10/clock.svg" width="20" height="20">

                                                    <p> <?php _e("Published on ", "ws") ?> <?php the_field('fecha_publicacion'); ?> </p>

                                                </div>

                                            </div>
                                            
                                        
                                        </div>

                                    </div>

                                    <?php
                                }
                            
                                wp_reset_postdata();
                        
                            ?>

                        </div>

                        <br>

                </section>

                <?php

                }

                else{

                    ?>

                    <div class="ofertas">

                        <div class="container-1" style="display: flex; align-items: center; justify-content: center; padding-bottom: 40px;">

                            <h2 style="margin: 0;"> <?php _e("No offers available", "ws") ?></h2>

                        </div>

                    </div>

                <?php    

                }

    ?>

    <section class="no-encajas">

        <section class="propuesta">

            <div class="container-1">

                <?php

                if(have_rows('propuesta')) {

                    while( have_rows('propuesta')) : the_row();

                    ?>

                    <div>

                        <h2> <?php echo the_sub_field('titulo'); ?> </h2>

                    </div>

                    <div> 

                        <p style="padding-top: 10px;"> <?php echo the_sub_field('descripcion'); ?> </p>

                    </div>

                    <?php 

                        echo do_shortcode(__("[contact-form-7 id='fae6caf' title='Formulario Curriculum - EN']", "ws"));
                    
                    ?>

                    <?php

                    endwhile;

                }

                ?> 

            </div>
            
        </section>

    </section>

    <script>

        const propuesta = document.querySelector(".propuesta");

        propuesta.querySelector(".wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email").style = "height: 55px;";
        
        propuesta.querySelector(".wpcf7-form-control.wpcf7-file.wpcf7-validates-as-required").style = "height: 55px;";

        function moveButton() {

            const offers = document.querySelectorAll('.oferta');

            offers.forEach(offer => {

                const buttonMobile = offer.querySelector('.button-generic.d-mobil');

                const infoOferta0 = offer.querySelector('.info-oferta0');

                const infoOferta = offer.querySelector('.info-oferta');
                
                if (window.innerWidth < 600) {

                    if (infoOferta && buttonMobile) {

                        infoOferta.appendChild(buttonMobile);

                    }

                } else {

                    if (infoOferta0 && buttonMobile) {

                        infoOferta0.appendChild(buttonMobile);

                    }

                }

            });

        }

        window.addEventListener('load', moveButton);

        window.addEventListener('resize', moveButton);

        $button_send = document.querySelector('.wpcf7-form-control.wpcf7-submit');

        $button_send.onclick = function (){

            $button_send.value = <?php echo json_encode(__("Sending...", "ws")); ?>;

        }

        document.addEventListener('wpcf7invalid', function (event) {

            const submitButton = event.target.querySelector('[type="submit"]');
            
            if (submitButton) {

                submitButton.value = <?php echo json_encode(_e("Send", "ws")); ?>;

            }

        }, false);

    </script>

</article>