<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wbsw
 */

$current_lang = apply_filters( 'wpml_object_id', 14, 'post' );

$contacto = __("en/contact", 'ws');

$popmake = __("popmake-13230", 'ws');

?>

<style>

    .delayed-content-footer { display: none; }

    .container-collab{ max-width: 1300px; width: 100%; margin-right: auto; margin-left: auto; position: relative; padding: 0 20px; }

</style>

<div class="delayed-content-footer">

    <section class="propuesta">

        <div class="container-1">

            <?php

            if(have_rows('propuesta', $current_lang)) {

                while( have_rows('propuesta', $current_lang)) : the_row();

                ?>

                <div>

                    <h2><?php the_sub_field("titulo"); ?></h2>

                    <a class="button-generic d-desktop <?php echo $popmake; ?>" href=" <?php echo $contacto; ?> "><?php the_sub_field("boton"); ?></a>
                
                </div>

                <div> 

                    <p><?php the_sub_field("descripcion"); ?></p>

                </div>

                <a class="button-generic d-mobil <?php echo $popmake; ?>"><?php the_sub_field("boton"); ?></a>

                <?php

                endwhile;

            }

            ?> 

        </div>

    </section>

    <section class="colaboradores" id="colaboradores">

        <div class="container-collab" id="colaboradores-carusel">

            <?php

            if(have_rows('colaboradores', $current_lang)) {

                while( have_rows('colaboradores', $current_lang)) : the_row(); ?>

                <a target="_blank" rel="me" href="<?php the_sub_field('enlace'); ?>" target="_blank">

                    <img src="<?php the_sub_field('imagen'); ?>">

                </a>

                <?php

                endwhile;

            }

            ?> 

        </div>

    </section>


    <footer id="colophon" class="site-footer">

        <div class="container-1">

            <div class="footer-1">

                <a href="<?php echo home_url(); ?>">

                    <img class="logo" src="<?php the_field("logo_white", $current_lang); ?>">

                </a>

                <div>

                    <?php

                    if(have_rows('redes_sociales', $current_lang)) {

                        while( have_rows('redes_sociales', $current_lang)) : the_row();

                        ?>

                        <a class="d-mobil icon-social" target="_blank" rel="me" href="<?php the_sub_field('enlace'); ?>">

                            <p><?php the_sub_field('texto'); ?></p>

                            <img src="<?php the_sub_field('imagen'); ?>">

                        </a>

                        <?php

                        endwhile;

                    }

                    ?>

                </div>

                <div>

                <?php

                if(have_rows('redes_sociales', $current_lang)) {

                    while( have_rows('redes_sociales', $current_lang)) : the_row();

                    ?> 

                    <a class="d-desktop icon-social" target="_blank" rel="me" href="<?php the_sub_field('enlace'); ?>">

                        <p><?php the_sub_field('texto'); ?></p>

                        <img src="<?php the_sub_field('imagen'); ?>">

                    </a>

                    <?php

                    endwhile;

                }

                ?>

                <?php

                if(have_rows('correo', $current_lang)) {

                    while( have_rows('correo', $current_lang)) : the_row();

                    ?>

                    <a class="correo-social" target="_blank" rel="me" href="<?php the_sub_field('enlace'); ?>">

                        <p><?php the_sub_field('texto'); ?></p>

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/07/correo.svg">

                    </a>

                    <?php

                    endwhile;

                }

                ?>

                </div>

            </div>

            <div class="footer-2">

                <?php

                if(have_rows('oficinas', $current_lang)) {

                    while( have_rows('oficinas', $current_lang)) : the_row(); ?>

                        <div>

                            <div>

                                <a href = "<?php the_sub_field('link');?>"><img src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/icon-pin.svg"></a>
                                
                                <a href = "<?php the_sub_field('link');?>"><p class="title"><?php the_sub_field('titulo'); ?></p></a>
                            
                            </div>
                            
                            <a target="_blank" rel="me" class="telefono" href="tel:<?php the_sub_field('telefono'); ?>"><?php the_sub_field('telefono'); ?></a>
                            
                            <a href = "<?php the_sub_field('link');?>"><p class="direction"><?php the_sub_field('direccion'); ?></p></a>
                            
                            <p class="postal"><?php the_sub_field('codigo_postal'); ?></p>
                        
                        </div>
                    
                    <?php
                    
                    endwhile;

                }

                ?>

            </div>

            <div class="footer-3">

                <?php

                wp_nav_menu(
                    array(
                        'menu_id' => 'menu-footer-1',
                        'theme_location' => 'menu-footer-1',
                        'container'       => 'false',
                    )
                );

                ?>

            </div>

        </div>

    </footer>

    </div>

<?php wp_footer(); ?>

<script>

document.addEventListener("DOMContentLoaded", function () {

    setTimeout(function () {

        const delayedContent = document.querySelector(".delayed-content-footer");

        if (delayedContent) {

            delayedContent.style.display = "block";

        }

    }, 500); // Retraso de 0,5 segundos

});

</script>

</div>

</body>

</html>
