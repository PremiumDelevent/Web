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

    .page-template-inicio-page .introduccion { animation: fade-introduccion 20s ease-in-out infinite; }

    @keyframes fade-introduccion {

        <?php if( have_rows('introduccion') ): ?>

            <?php while( have_rows('introduccion') ): the_row(); ?>

                <?php 

                    $imagen1 = get_sub_field('imagen');

                    $imagen2 = get_sub_field('imagen_2');

                    $imagen3 = get_sub_field('imagen_3');

                    $imagen4 = get_sub_field('imagen_4');

                    $imagen5 = get_sub_field('imagen_5');

                ?>

                    0%, 15%, 100% { background-image: url(<?php echo esc_url($imagen1); ?>); }

                    20%, 35% { background-image: url(<?php echo esc_url($imagen2); ?>); }

                    40%, 55% { background-image: url(<?php echo esc_url($imagen3); ?>); }

                    60%, 75%{ background-image: url(<?php echo esc_url($imagen4); ?>); }

                    80%, 95% { background-image: url(<?php echo esc_url($imagen5); ?>); }
                
            <?php endwhile; ?>
            
        <?php endif; ?> 

    }

</style>

<script>

    function preloadImages(sources) {

        let images = [];

        for (let i = 0; i < sources.length; i++) {

            images[i] = new Image();

            images[i].src = sources[i];

        }

        return images;

    }

    let imageUrls = [

        <?php if( have_rows('introduccion') ): ?>

            <?php while( have_rows('introduccion') ): the_row(); ?>

                <?php 

                    $imagen1 = get_sub_field('imagen'); 

                    $imagen2 = get_sub_field('imagen_2');

                    $imagen3 = get_sub_field('imagen_3');

                    $imagen4 = get_sub_field('imagen_4');

                    $imagen5 = get_sub_field('imagen_5');

                    if( $imagen1 ): 

                        echo "'" . esc_url($imagen1) . "',";

                    endif;

                    if( $imagen2 ): 

                        echo "'" . esc_url($imagen2) . "',";

                    endif;

                    if( $imagen3 ): 

                        echo "'" . esc_url($imagen3) . "',";

                    endif;

                    if( $imagen4 ): 

                        echo "'" . esc_url($imagen4) . "',";

                    endif;

                    if( $imagen5 ): 

                        echo "'" . esc_url($imagen5) . "',";

                    endif;

                ?>
                
            <?php endwhile; ?>

        <?php endif; ?>

    ];

    imageUrls = imageUrls.filter(url => url.length > 0); 

    const loadedImages = preloadImages(imageUrls);

    var languageArrow = document.querySelector('.js-wpml-ls-item-toggle.wpml-ls-item-toggle');

    var languageText = document.querySelector('.wpml-ls-native');
    
    $(document).scroll(function() {

            if ($(window).scrollTop() <= 200) {

                languageArrow.style.color = '#a68067';

                languageText.style.color = '#a68067';

            } else {

                languageArrow.style.color = '#a68067';

                languageText.style.color = '#a68067';

            }

    });

</script>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-template-inicio-page">

        <?php

        if(have_rows('introduccion')) {

            while( have_rows('introduccion')) : the_row(); ?>   

                <section class="introduccion">

                    <div class="container-2">

                        <h1><?php the_sub_field("titulo"); ?></h1>

                        <p><?php the_sub_field("descripcion"); ?></p>

                        <a href="#categorias">

                            <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                        </a>

                    </div>

                </section>

            <?php endwhile;

        } ?>

        <style>
        

        </style>

        <div class="delayed-content">

            <section class="categories" id="categorias">

                <div>

                    <?php

                    $categories = get_terms([

                        'hide_empty' => true,

                        'taxonomy' => 'product_cat',

                        'meta_key' => 'orden',

                        'orderby' => 'orden',

                        'order' => 'ASC'

                    ]);

                    for ($i = 1; $i < 6; $i++) {

                        if (have_rows('introduccion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id)) {

                            while (have_rows('introduccion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id)) : the_row();

                                if ($i <= 2) {

                                    ?>

                                    <a href="<?php echo get_category_link($categories[$i]->term_id); ?>" class="first-two" style="background-image: url(<?php the_sub_field('imagen_cuadrada', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>); --color: <?php the_field('color', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>;">
                                        
                                        <div class="logo">

                                            <img src="<?php the_sub_field('icono', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>">
                                            
                                            <img src="<?php the_sub_field('logo', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>">
                                        
                                        </div>
                                        
                                        <p><?php the_sub_field('subdescripcion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?></p>
                                    
                                    </a>

                                    <?php

                                }

                                if ($i == 3) {

                                    echo '<div class="cat-sq-down">';
                                    
                                }

                                if ($i >= 3) {

                                    ?>

                                    <a href="<?php echo get_category_link($categories[$i]->term_id); ?>" style="background-image: url(<?php the_sub_field('imagen_cuadrada', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>); --color: <?php the_field('color', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>;">
                                        
                                        <div class="logo">

                                            <img src="<?php the_sub_field('icono', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>">
                                            
                                            <img src="<?php the_sub_field('logo', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?>">
                                        
                                        </div>

                                        <p><?php the_sub_field('subdescripcion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id); ?></p>
                                    
                                    </a>

                                    <?php

                                    if ($i == $final - 1) {

                                        echo '</div>';

                                    }

                                }

                            endwhile;

                        }

                    }

                    ?>

                </div>

            </section>

            <script>

                document.addEventListener("DOMContentLoaded", function() {

                    const mediaQuery = window.matchMedia("(max-width: 600px)");

                    const catSqDown = document.querySelector(".cat-sq-down");

                    const parentDiv = catSqDown ? catSqDown.parentElement : null;

                    const links = Array.from(catSqDown.querySelectorAll("a"));

                    function handleScreenResize(e) {

                        if (e.matches) {

                            if (catSqDown && parentDiv) {

                                links.forEach(link => {

                                    parentDiv.insertBefore(link, catSqDown);

                                });

                                catSqDown.style.display = "none";

                            }

                        } else {

                            if (catSqDown && parentDiv) {

                                links.forEach(link => {

                                    catSqDown.appendChild(link);

                                });

                                catSqDown.style.display = "flex";

                            }

                        }

                    }

                    mediaQuery.addEventListener("change", handleScreenResize);

                    handleScreenResize(mediaQuery);

                });

            </script>

            <?php

            if(have_rows('soluciones')) {

                while( have_rows('soluciones')) : the_row(); ?>

                    <section class="soluciones" id="soluciones">

                        <div class="container-1">

                            <div class="text">

                                <div>

                                    <h2><?php the_sub_field('titulo', false, false); ?></h2>

                                </div>

                                <?php

                                if(have_rows('boton')) {

                                    while( have_rows('boton')) : the_row(); ?>

                                        <a class="button-generic brown d-desktop <?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                                    <?php endwhile;

                                } ?>

                            </div>

                            <div class="repeater">

                                <div class="desc"><?php the_sub_field('descripcion'); ?></div>

                            </div>

                            <?php

                                if(have_rows('boton')) {

                                    while( have_rows('boton')) : the_row(); ?>

                                        <a class="button-generic brown d-mobil <?php the_sub_field('enlace'); ?>"><?php the_sub_field('texto'); ?></a>

                                    <?php endwhile;

                                } ?>

                        </div>

                    </section>

                <?php endwhile;

            } ?> 
        
            <body>

            <?php

            if (have_rows('banner_producto')) {

                while (have_rows('banner_producto')) : the_row();

                    $link_articulo = get_sub_field('link_articulo');

                    $foto_background = get_sub_field('foto_background');

                    $foto_background_formato_mobil = get_sub_field('foto_background_formato_mobil'); ?>

                    <section id = "banner_producto">

                        <a href="<?php echo esc_url($link_articulo); ?>">

                            <br>

                            <br>

                            <div class="banner_background" style="background-image: url('<?php echo esc_url($foto_background); ?>');"></div>
                        
                        </a>

                    </section>

                    <script>

                        document.addEventListener('DOMContentLoaded', function() {

                            const banner = document.querySelector(".banner_background");
                            
                            function updateBackgroundImage() {

                                if (window.innerWidth <= 960) {

                                    banner.style.backgroundImage = "url('<?php echo esc_url($foto_background_formato_mobil); ?>')";
                                
                                } else {

                                    banner.style.backgroundImage = "url('<?php echo esc_url($foto_background); ?>')";

                                }

                            }

                            updateBackgroundImage();

                            window.addEventListener('resize', updateBackgroundImage);

                        });

                    </script>

                <?php endwhile;

            } ?>

            <script>

                const bbanner_background = document.querySelector('.banner_background');
                
                if (bbanner_background) bbanner_background.style.backgroundImage = "url('<?php echo esc_url($foto_background); ?>')";

            </script>

            <?php

            if(have_rows('casos_de_exito')) {
                    
                while( have_rows('casos_de_exito')) : the_row();?>

                    <div class="exito">

                        <div class="container-1">

                            <h2><?php the_sub_field("titulo") ?></h2>

                            <div class="exito-wrap1">

                                <?php

                                $second_query = new WP_Query( array(

                                    'post_type' => 'exito',

                                    'posts_per_page' => 12

                                ));

                                if($second_query->have_posts()) {

                                    while ($second_query->have_posts() ) : $second_query->the_post();

                                        ?>

                                        <a href="<?php the_permalink(); ?>" class="blog-each">

                                            <div class="image-wrap">

                                                <img src="<?php the_field("portada"); ?>">

                                            </div>

                                            <p class="title"><?php echo get_the_title(); ?></p>

                                            <p class="date"><?php echo get_the_date(); ?></p>

                                            <p class="ubicacion"><?php the_field("ubicacion"); ?></p>

                                        </a>

                                    <?php endwhile; wp_reset_query();

                                } ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile;

            } ?>

            <div class="textos">

                <div class="container-1">

                    <?php if( have_rows('textos') ) { $i = 0; ?>

                        <?php while( have_rows('textos') ): the_row(); ?>

                            <?php if( get_row_layout() == 'mediano' ) { ?>

                                <div class="texto-mediano">

                                    <h2><?php the_sub_field('titulo'); ?></h2>

                                    <div><?php the_sub_field('descripcion'); ?></div>

                                </div>

                            <?php } else if ( get_row_layout() == 'pequeno' ) { ?>

                                <div class="texto-pequeno">

                                    <h2><?php the_sub_field('titulo'); ?></h2>

                                    <div><?php the_sub_field('descripcion'); ?></div>

                                </div>

                            <?php }

                        endwhile;

                    } ?>

                </div>

            </div>

            <?php if(have_rows('donde_estamos')) {

                while( have_rows('donde_estamos')) : the_row(); ?>

                    <div class="donde_estamos">

                        <div class="container-1">

                            <div class="mapa">

                                <h2><?php the_sub_field('titulo'); ?></h2>

                                <img src="<?php the_sub_field('mapa_mobile'); ?>" class="d-mobil">

                                <img src="<?php the_sub_field('mapa_desktop'); ?>" class="d-desktop">

                            </div>

                            <div class="caja">

                                <?php if(have_rows('lugares')) {

                                    while( have_rows('lugares')) : the_row();

                                        $num = 0; ?>

                                        <div class="caja-each">

                                            <div class="caja-list <?php the_sub_field('titulo'); ?>">

                                                <?php if(have_rows('localizacion')) {

                                                    while( have_rows('localizacion')) : the_row(); ?>

                                                        <p><?php the_sub_field('nombre'); ?></p>

                                                        <?php $num++; ?>

                                                    <?php endwhile;

                                                } ?>

                                            </div>

                                            <div class="caja-image">

                                                <img src="<?php the_sub_field('imagen'); ?>">

                                                <p><?php echo $num." ".get_sub_field('titulo'); ?></p>

                                            </div>

                                        </div>

                                    <?php endwhile;

                                } ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile;

            } ?>

            <?php if(have_rows('nuestros_clientes')) {

            while( have_rows('nuestros_clientes')) : the_row(); ?>

                <div class="mejores-clientes">

                    <div class="container-1">

                        <div>

                            <h2><?php the_sub_field("titulo") ?></h2>

                        </div> 

                        <div class="container-best-clients">

                            <?php while( have_rows('cliente')) : the_row(); ?>

                                <div class="card">

                                    <div class="testimonio-container">

                                        <img class="img_comillas" src="https://www.premiumdelevent.com/wp-content/uploads/2024/12/quotation-marks-131697.png">

                                        <div class="testimonio"><?php the_sub_field("testimonio"); ?></div>

                                    </div>

                                    <div class="info-cliente">

                                        <img class="img_cliente" src="<?php the_sub_field("imagen_cliente")?>" alt="Imagen 1">

                                        <div>

                                            <p style="font-weight: bold; color: #986B4E;"><?php the_sub_field("nombre")?></p>

                                            <p style="font-weight: bold;"><?php the_sub_field("posicion")?></p>

                                        </div>

                                    </div>

                                </div>

                            <?php endwhile; ?>

                        </div>

                    </div>

                    </br>

                </div>

            <?php endwhile;

            } ?>

            <style>

                .bloques_seo h2, .bloques_seo h3, .bloques_seo p, .bloques_seo li {
                    padding-top: 30px;
                }

                .bloques_seo p strong, .bloques_seo h2 strong, .bloques_seo h3 strong, .bloques_seo li strong { color: black; }


                .bloques_seo ul {
                    list-style: none;
                }

                .bloques_seo li img{
                    width: 32px;
                    padding-right: 10px;
                }
            </style>
            <section id = 'bloques_seo' class = 'bloques_seo'>

                <div class="container-1">

                    <?php if( get_field("titulo_h2.1") ): ?>

						<h2><?php the_field("titulo_h2.1"); ?></h2>

					<?php endif; ?>

					<?php if( get_field("texto_p.1") ): ?>

						<p><?php the_field("texto_p.1"); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.1") ): ?>

						<h3><?php the_field("titulo_h3.1"); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.2") ): ?>

						<p><?php the_field("texto_p.2"); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.2") ): ?>

						<h3><?php the_field("titulo_h3.2"); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.3") ): ?>

						<p><?php the_field("texto_p.3"); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.3") ): ?>

						<h3><?php the_field("titulo_h3.3"); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.4") ): ?>

						<p><?php the_field("texto_p.4"); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h2.2") ): ?>

						<h2><?php the_field("titulo_h2.2"); ?></h2>

					<?php endif; ?>

					<?php if( get_field("texto_p.5") ): ?>

						<p><?php the_field("texto_p.5"); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.4") ): ?>

						<h3><?php the_field("titulo_h3.4"); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.6") ): ?>

						<p><?php the_field("texto_p.6"); ?></p>
						
					<?php endif; ?>

                    <?php if( have_rows('lista') ): ?>

                        <ul>

                            <?php while( have_rows('lista') ): the_row(); ?>

                                <li> <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-black-right.svg" ><?php the_sub_field('elemento_lista'); ?></li>

                            <?php endwhile; ?>

                        </ul>
                        
                    <?php endif; ?>

                </div>

            </section>

            </br>

            </br>

            </br>

            </br>

        </div>

    </div>

</article>

<script>

    document.addEventListener("DOMContentLoaded", function () {

        setTimeout(function () {

            const delayedContent = document.querySelector(".delayed-content");

            if (delayedContent) {

                delayedContent.style.display = "block";

                const exitoWrap = document.querySelector('.exito-wrap1');

                if (exitoWrap) {

                    $(exitoWrap).slick({

                        infinite: false,

                        autoplay: false,
                        
                        autoplaySpeed: 2000,

                        speed: 2000,

                        centerMode: false,
                        
                        variableWidth: false,

                        dots: false,

                        slidesToScroll: 3,
                        
                        slidesToShow: 3,

                        mobileFirst: false,

                        responsive: [

                            {

                                breakpoint: 768,

                                settings: {

                                    slidesToScroll: 1,

                                    slidesToShow: 2,

                                    variableWidth: true

                                }

                            }

                        ]

                    });

                }

            }

        }, 500);

    });

</script>