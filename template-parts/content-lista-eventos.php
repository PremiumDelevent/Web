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

    <section class="introduccion" style="background-image: url(<?php the_field("imagen"); ?>);">

        <div class="container-1">

            <?php if(get_field('titulo')): ?>

                <h1><?php echo get_field('titulo'); ?></h1>

            <?php endif; ?>
            
            <?php if(get_field('descripcion')): ?>

                <p><?php the_field('descripcion'); ?></p>

            <?php endif; ?>

            <a href="#eventos-section">

                <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

            </a>

        </div>

    </section>

    <?php

    $eventos_query = new WP_Query(array(

        'post_type' => 'eventos',

        'posts_per_page' => -1,
        
        'post_status' => 'publish',

        'orderby' => 'date',

        'order' => 'DESC'

    ));

    if ($eventos_query->have_posts()) : ?>

        <section class="eventos-section" id="eventos-section">

            <div class="container-1">

                <div class="eventos-header">
                    <h1><strong><?php _e("Our events", "ws") ?></strong></h1>
                    <input type="text" id="buscador-eventos" placeholder="<?php _e("Search events...", "ws") ?>" />
                </div>

                <?php while ($eventos_query->have_posts()) : $eventos_query->the_post(); 

                    // GET atributos

                    $fecha = get_field('fecha');

                    $sitio = get_field('sitio');

                    $imagen = get_field('imagen');

                    $visible = get_field('visible');

                    // Verifica si el evento está visible

                    if ($visible == '1') {?>

                        <div class="evento">

                        <div class = "info-evento-container">

                            <h2><?php echo get_the_title(); ?></h2>

                            <div class="info-evento">

                                <!-- Fecha del evento -->

                                <div class="info">

                                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2024/10/clock.svg" width="20" height="20">

                                    <p><?php echo $fecha; ?></p>

                                </div>

                                <!-- Lugar del evento -->

                                <div class="info">

                                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2025/07/geo-alt-1.svg" width="20" height="20">

                                    <p><?php echo $sitio; ?></p>

                                </div>

                            </div>

                            <div class = "button-container">

                                <a class="button-generic d-desktop" href="<?php echo get_permalink(); ?>" style="width: 50%; color: white;">
                                        
                                    <?php _e("See event", "ws") ?>

                                </a>

                                <a class="button-generic d-mobil" href="<?php echo get_permalink(); ?>" style="width: 100%; color: white;">

                                    <?php _e("See event", "ws") ?>

                                </a>

                            </div>

                        </div>

                        <div class="imagen-evento">

                            <img src="<?php echo $imagen; ?>" alt="<?php echo get_the_title(); ?>">

                        </div>

                    </div>

                    <?php

                    } else {

                        // Si el evento no está visible, no lo mostramos

                        continue;

                    }

                    ?>

                <?php endwhile; ?>

                <p class = "sin-resultados" id="sin-resultados">

                    <?php _e("No results found for this search.", "ws") ?>

                </p>

            </div>

            <br>

            

        </section>

    <?php else : ?>

        <div class="eventos-section" id = "eventos-section">

            <div class="container-1">

                <h2> <?php _e("No events available", "ws") ?> </h2>

            </div>

        </div>

    <?php endif; 

    wp_reset_postdata(); ?>

    <script>

        function moveButton() {

            const eventos = document.querySelectorAll('.evento');

            eventos.forEach(evento => {

                const buttonMobile = evento.querySelector('.button-generic.d-mobil');

                const info_evento_container = evento.querySelector('.info-evento-container');
                
                if (window.innerWidth < 600) {

                    if (info_evento_container && buttonMobile) {

                        info_evento_container.appendChild(buttonMobile);

                    }

                } else {

                    if (info_evento_container && buttonMobile) {

                        info_evento_container.appendChild(buttonMobile);

                    }

                }

            });

        }

        window.addEventListener('load', moveButton);

        window.addEventListener('resize', moveButton);

        document.addEventListener('DOMContentLoaded', function () {
            // Animación scroll
            const eventos = document.querySelectorAll('.evento');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            eventos.forEach(evento => observer.observe(evento));

            // Buscador
            const buscador = document.getElementById('buscador-eventos');
            const sinResultados = document.getElementById('sin-resultados');

            buscador.addEventListener('input', function () {
                const filtro = buscador.value.toLowerCase();
                let encontrados = 0;
                eventos.forEach(evento => {
                    const titulo = evento.querySelector('h2').textContent.toLowerCase();
                    if (titulo.includes(filtro)) {
                        evento.style.display = '';
                        encontrados++;
                    } else {
                        evento.style.display = 'none';
                    }
                });
                if (encontrados === 0) {
                    sinResultados.style.display = 'block';
                } else {
                    sinResultados.style.display = 'none';
                }
            });
        });

    </script>

</article>