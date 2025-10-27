<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php

    if(have_rows('introduccion')) {

        while( have_rows('introduccion')) : the_row();

        ?>

    	<section class="introduccion" style="background-image:url(<?php the_sub_field('imagen_fondo'); ?>);">

            <div class="container-1">

                <p class="subtitle"><?php the_sub_field('subtitulo'); ?></p>

                <img class="ecosphere" src="<?php the_sub_field('ecosphere_icono'); ?>">

                <h1><?php the_sub_field('titulo'); ?></h1>

                <a href="#soluciones" class="arrow"><img src="https://www.premiumdelevent.com/wp-content/uploads/2023/07/arrow.svg"></a>

            </div>

    	</section>

        <?php

        endwhile;

    }

    ?>

    <?php

    if(have_rows('soluciones')) {

        while( have_rows('soluciones')) : the_row();

        ?>

        <section class="soluciones" id="soluciones">

            <div class="container-1">

                <div class="text">

                    <div>

                        <h2><?php the_sub_field('titulo', false, false); ?></h2>

                        <p class="desc"><?php the_sub_field('descripcion'); ?></p>

                    </div>

                    <?php

                    if(have_rows('boton')) {

                        while( have_rows('boton')) : the_row();

                        ?>

                            <a class="button-generic d-desktop" href="<?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                        <?php

                        endwhile;

                    }

                    ?>

                </div>

                <div class="repeater">

                    <?php

                    if(have_rows('ventajas')) {

                        while( have_rows('ventajas')) : the_row();

                        ?>

                            <p><?php the_sub_field('titulo'); ?></p>

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

                            ?>

                        <?php

                        endwhile;

                    }

                    ?>

                    <?php

                    if(have_rows('boton')) {

                        while( have_rows('boton')) : the_row();

                        ?>

                            <a class="button-generic d-mobil" href="<?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                        <?php

                        endwhile;

                    }

                    ?>

                </div>

            </div>

        </section>

        <?php

        endwhile;

    }

    ?>

    <?php

    if(have_rows('productos')) {

        while( have_rows('productos')) : the_row();

        ?>

        <section class="productos">

            <div class="container-1">

                <h2><?php the_sub_field('titulo'); ?></h2>

                <hr>

                <div class="productos-carusel">

                <?php

                if(have_rows('carusel')) {

                    while( have_rows('carusel')) : the_row();

                    ?>

                    <div>

                        <img src="<?php the_sub_field('imagen'); ?>">

                        <p class="nombre"><?php the_sub_field('nombre'); ?></p>

                        <p class="sizes"><?php the_sub_field('medidas', false, false); ?></p>

                    </div>

                    <?php

                    endwhile;

                }

                ?>

                </div>

                <hr>

                <?php

                if(have_rows('boton')) {

                    while( have_rows('boton')) : the_row();

                    ?>

                        <a class="button-generic" href="<?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                    <?php

                    endwhile;

                }

                ?>

            </div>

        </section>

        <?php

        endwhile;

    }

    ?>

    <script>

    $(document).ready(function(){

        $('.productos-carusel').slick({

            infinite: true,

            autoplay:true,

            autoplaySpeed:3000,

            speed: 300,

            slidesToShow: 1,

            centerMode: false,

            variableWidth: false,

            dots: true,

            prevArrow: false,

            nextArrow: false,

            mobileFirst: true,

            responsive: [{

              breakpoint: 768,

              settings: {

                slidesToShow: 4,

                slidesToScroll: 4

              }

            }]

        });

    });

    </script>

    <?php

    if(have_rows('ejemplos')) {

        while( have_rows('ejemplos')) : the_row();

        ?>

        <section class="ejemplos">

            <div class="container-1">

                <div class="general-flex">

                    <h2><?php the_sub_field('titulo', false, false); ?></h2>

                    <hr>

                </div>

                <div class="general-grid">

                <?php

                if(have_rows('repetidor')) {

                    while( have_rows('repetidor')) : the_row();

                    ?>

                    <a href="<?php the_sub_field('enlace'); ?>" style="background-image:url(<?php the_sub_field('imagen'); ?>);">

                        <p><?php the_sub_field('texto'); ?></p>

                    </a>

                    <?php
                    
                    endwhile;

                }

                ?>

                </div>

                <?php

                if(have_rows('boton')) {

                    while( have_rows('boton')) : the_row();

                    ?>

                        <a class="button-generic" href="<?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                    <?php

                    endwhile;

                }

                ?>

            </div>

        </section>

        <?php

        endwhile;

    }

    ?>

    <section class="formulario">

        <div class="container-1">

        <?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto 1"]'); ?>

        </div>

    </section>

</article>