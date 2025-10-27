<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

$postid = get_the_ID(); 

?>

<div class="container-5">

    <h1><?php echo get_the_title(); ?></h1>

</div>

<div class="blog-post-full-wrap">

    <img src="<?php the_field("portada"); ?>">

    <p class="date"><?php echo get_field("fecha_inicial")." - ".get_field("fecha_final"); ?></p>
    
    <p class="ubicacion"><?php the_field("ubicacion"); ?></p>

    <div class="blog-post-full">

        <?php the_content(); ?>

        <?php if( have_rows('content-flex') ): $i = 0; ?>

            <?php while( have_rows('content-flex') ): the_row(); ?>

                <?php if( get_row_layout() == 'texto' ): ?>

                    <p class="texto"><?php the_sub_field("texto", false, false); ?></p>

                <?php elseif( get_row_layout() == 'subtitulo' ): ?>

                    <p class="subtitulo"><?php the_sub_field("texto", false, false); ?></p>

                <?php elseif( get_row_layout() == 'texto_imagen' ): ?>

                    <div class="texto_imagen">

                        <img src="<?php the_sub_field("imagen"); ?>">

                        <p class="texto"><?php the_sub_field("texto", false, false); ?></p>

                    </div>

                <?php elseif( get_row_layout() == 'quote' ): ?>

                    <p class="quote"><?php the_sub_field("texto", false, false); ?></p>

                <?php elseif( get_row_layout() == 'carousel_imagenes' ): ?>

                    <div class="galeria">

                        <?php if( have_rows('carusel_de_imagenes_1') ): ?>

                            <div class="galeria-wrap"> <?php

                                while ( have_rows('carusel_de_imagenes_1') ) : the_row(); 

                                    $imagenCarousel = get_sub_field('imagen'); 

                                    echo wp_get_attachment_image( $imagenCarousel, 'full' );

                                endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>  

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    
    <!-- Foto perfil y nombre del autor

     <div class="blog-post-info">

        <img src="https://i.pinimg.com/736x/86/63/78/866378ef5afbe8121b2bcd57aa4fb061.jpg">

        <div>

            <p class="author-nombre"><?php echo get_the_author(); ?></p>

            <p class="author-cargo"></p>

        </div>

     </div>

    -->

</div>  


<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function(event) { 

        var slider = $('.galeria-wrap');

        var progressBar = $('.progress-bar');

        var number = $('.galeria-counter');

        slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   

            var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;

            progressBar.css('background-size', calc + '% 100%');

            progressBar.attr('value', calc );

            number.text((nextSlide + 1) + " / " + slick.slideCount)

        });

        var count = document.querySelectorAll(".galeria-wrap > .galeria-each").length;

        number.text(1 + " / " + count)

        slider.slick({

            slidesToShow: 1,

            fade: true,

            arrows: true,

            infinite: true,

            autoplay: true,

            autoplaySpeed: 3000,

            speed: 550

        });
        
    });

</script>
