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

<style>

.elementor-kit-11523 { background-image: none; }

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="contact-content" style="background-image: url(<?php the_field('fondo'); ?>);">

        <div class="container-1">

            <div class="contact-info">

                <?php

                if(have_rows('oficinas', $current_lang)) {

                    while( have_rows('oficinas', $current_lang)) : the_row();

                    ?>

                        <div>

                            <div class="taller">

                                <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/icon-pin.svg">

                                <p class="title"><?php the_sub_field('titulo'); ?></p>

                            </div>

                            <div>

                                <a class="telefono" href="tel:<?php the_sub_field('telefono'); ?>"><?php the_sub_field('telefono'); ?></a>

                                <p class="direction"><?php the_sub_field('direccion'); ?></p>

                                <p class="postal"><?php the_sub_field('codigo_postal'); ?></p>

                            </div>

                        </div>

                    <?php

                    endwhile;

                }

                ?>

            </div>

            <div class="formulario">

                <div>

                <?php $shortcode = get_field('shortcode'); ?> 

                <?php echo do_shortcode($shortcode); ?>
                
                <!--<?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto 1"]'); ?>-->

                </div>

            </div>

        </div>

	</section>

    <script>

        $button_send = document.querySelector('.wpcf7-form-control.wpcf7-submit');   

        $button_send.onclick = function (){

            $button_send.value = <?php echo json_encode(__("Sending...", "ws")); ?>;

        }

        document.addEventListener('wpcf7invalid', function (event) {

            const submitButton = event.target.querySelector('[type="submit"]');
            
            if (submitButton) {

                submitButton.value = <?php echo json_encode(__("Send", "ws")); ?>;

            }

        }, false);

    </script>

</article>