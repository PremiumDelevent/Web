<style>
/* Nosotros */

    .proveedor { background-color: #F8F8F8; padding: 70px 0; scroll-margin-top: 80px; }

    .proveedor .proveedor-intro { display: flex; flex-direction: column; flex-wrap: wrap; gap: 48px; }

    .proveedor .proveedor-intro > div { width: 100%; }

    /*.proveedor .proveedor-intro h2 { font-size: 32px; line-height: 1; font-weight: bold; color: black; margin-bottom: 0px !important; max-width: 300px; }*/

    .proveedor .proveedor-intro a.d-mobil { width: 100%; }

    .proveedor .proveedor-numbers { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 50px; margin-top: 60px; }

    .proveedor .proveedor-numbers > div { display: flex; flex-direction: column; align-items: center; }

    .proveedor .proveedor-numbers .number { font-size: 38px; line-height: 1; min-width: 400px; text-align: center; font-weight: bold; }

    .proveedor .proveedor-numbers .desc { font-size: 24px; }

    .proveedor .faq-wrap { display: flex; flex-direction: column; gap: 24px; }

    .proveedor .faq-each { border-top: 2px solid black; padding-top: 24px; }

    .proveedor .faq-button { position: relative; cursor: pointer; display: flex; flex-direction: column; justify-content: center; }

    .proveedor .faq-button::before { background-image: url(https://www.premiumdelevent.com/wp-content/uploads/2023/12/icon-plus.svg); background-size: 20px; background-position: center; background-repeat: no-repeat; position: absolute; right: 0; width: 20px; height: 20px; content:""; transition: all 0.25s ease-in-out; -webkit-transition: all 0.25s ease-in-out; }

    .proveedor .faq-button.faq-active::before { background-image: url(https://www.premiumdelevent.com/wp-content/uploads/2023/12/icon-minus.svg); }

    .proveedor .faq-each-content { display: none; overflow: hidden; }

    .proveedor .faq-wrap .title { font-size: 24px; font-weight: bold; padding-right: 32px; line-height: 1.1; }

    .proveedor .faq-wrap .desc { font-size:16px; padding-top: 10px; }

    .disposicion { margin: 60px 0; }

    .disposicion .button-generic {width: 100%;}

    .disposicion h2 { margin-bottom: 40px !important; font-size: 32px; line-height: 1; font-weight: bold; color: black; max-width: 700px; }

    .disposicion .princ-image { width: 100%; display: block; max-height: 800px; min-height: 300px; object-fit: cover; margin-bottom: 40px; }

    .disposicion .sec-image { width: 100%; display: none; max-height: 650px; object-fit: cover; }

    .disposicion .disposicion-wrap { display: flex; gap: 80px; flex-direction: column; }

    .disposicion .disposicion-wrap > div { display: flex; flex-direction: column; gap: 40px; width: 100%; }

    .disposicion .title { font-size: 24px;  font-weight: bold; margin-bottom: 6px !important; }

    .disposicion .desc { font-size: 16px; }

    .introduccion { background-repeat: no-repeat; background-size: cover; background-position: center; position: relative; }

    .introduccion::before { background: rgb(0,0,0); background: -moz-linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); background: linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#000000",GradientType=1);  content:""; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 2; }

    .introduccion > div { display: flex; flex-direction: column; align-items: center; justify-content: flex-end; gap: 24px; height: 100%; padding-bottom: 32px; position: relative; z-index: 3; }

    .introduccion h1 { text-transform: uppercase; font-size: 32px; color: white; text-align: center; margin: 0 auto !important; max-width: 250px; font-weight: bold; }

    .introduccion p { font-size: 20px; line-height: 1.3; color: white; text-align: center; margin: 0 auto !important; max-width: 400px; }

    .introduccion img { height: 34px; width: fit-content; object-fit: contain; }

    .mapa_interactivo{ background-color: #F8F8F8; padding: 70px 0; scroll-margin-top: 80px; }

    .container-1-flex { max-width: 1440px; width: 100%; margin-right: auto; margin-left: auto; position: relative; padding: 0 20px; display: flex; align-items: flex-start; flex-wrap: wrap; /* Permite que los elementos se acomoden en varias líneas si es necesario */}

    .descr-map-container { max-width: 550px; width: 100%; padding-top: 15px; padding-bottom: 15px; }

    .descr-map-container p { font-size:16px; }

    #map { height: 400px; z-index: 0; width: 100%; }

    .leaflet-popup-content { max-width: 150px; }

    .leaflet-popup-content img { width: 100%; height: auto; }

    .container-1-resp { max-width: 1440px; width: 100%; margin-right: auto; margin-left: auto; position: relative; padding: 0 20px;}

    .container-2-resp { max-width: 650px; width: 100%; margin-right: auto; margin-left: auto; position: relative; padding: 0 20px; }

    /*.container-1-resp h2 { font-size: 62px; line-height: 1; font-weight: bold; color: black; margin-bottom: 0px !important; max-width: 600px; }*/

    @media (max-width: 1240px) {
        .descr-map-container{ max-width: 400px; }
    }

    @media (max-width: 1090px) {
        .descr-map-container{ max-width: 100%; }
    }

    @media (max-width: 960px) {

        .descr-map-container, 

        .container-2-resp { max-width: 100%; }

        .desc-map-container p{ font-size: 20px; }

        #map { height: 500px; }
    }

    @media (max-width: 600px) {

        #map { height: 550px; }

    }


    @media (min-width: 960px) {

        .proveedor .faq-wrap .desc { font-size: 20px; }

        .disposicion .button-generic {width: fit-content;}

        .disposicion .title { font-size: 32px; }

        .disposicion .desc { font-size: 18px; }

        .proveedor .faq-wrap .title { font-size: 32px; }

        .introduccion h1 { font-size: 64px; margin: 0 auto !important; max-width: 900px; }

        .introduccion p { max-width: 1264px; font-size: 24px; margin-top: -14px !important; }

        .disposicion .disposicion-wrap { flex-direction: row; }

        .disposicion .sec-image {display: block;}

        .disposicion .sec-image,

        .disposicion .disposicion-wrap > div { width: 50%; }

        .proveedor { padding: 160px 0; }

        .proveedor .proveedor-intro > div { width: calc(50% - 24px); }

        .proveedor .proveedor-intro { flex-direction: row; }

        .proveedor .proveedor-numbers { flex-direction: row; margin-top: 160px; gap: 20px; }

        .disposicion { margin: 160px 0; }

        .proveedor .proveedor-intro h2 { font-size: 60px; max-width: none; margin-bottom: 40px !important; }

        .disposicion h2 { font-size: 60px; margin-bottom: 80px !important; }

        .proveedor .proveedor-numbers .number { font-size: 64px; }

        .disposicion .princ-image { margin-bottom: 80px; }

    }

</style>


<?php

/**
 * 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 * 
 */

if(have_rows('disposicion')) {

    while( have_rows('disposicion')) : the_row();

    $popmake = get_sub_field("popmake");

    endwhile;

}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-template-nosotros-page">

        <?php

        if(have_rows('introduccion')) {

            while( have_rows('introduccion')) : the_row();

            ?>   

            <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

                <div class="container-2">

                    <h1><?php the_sub_field("titulo"); ?></h1>

                    <p><?php the_sub_field("descripcion"); ?></p>

                    <a href="#proveedor">

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                    </a>

                </div>

            </section>

            <?php

            endwhile;

        }

        ?>

        <section class="proveedor" id="proveedor">

            <div class="container-1">

                <?php

                if(have_rows('proveedor')) {

                    while( have_rows('proveedor')) : the_row();

                    ?>

                    <div class="proveedor-intro">

                        <div>

                            <h2><?php the_sub_field("titulo"); ?></h2>

                            <a class="button-generic d-desktop <?php echo $popmake; ?>"><?php the_sub_field("boton"); ?></a>

                        </div>

                        <div class="faq-wrap">

                            <?php

                            if(have_rows('faq')) {

                                $i = 0;

                                while( have_rows('faq')) : the_row();

                                ?>

                                <div class="faq-each">

                                    <div class="faq-button <?php if ($i == 0) { echo "faq-active"; } ?>">

                                        <p class="title"><?php the_sub_field("titulo"); ?></p>

                                    </div>

                                    <div class="faq-each-content" <?php if ($i == 0) { echo "style='display: block;'"; } ?>>

                                        <p class="desc"><?php the_sub_field("descripcion"); ?></p>

                                    </div>        

                                </div>

                                <?php

                                $i++;

                                endwhile;

                            }

                            ?>

                        </div>

                        <a class="button-generic d-mobil <?php echo $popmake; ?>" ><?php the_sub_field("boton"); ?></a>

                    </div>

                    <div class="proveedor-numbers">

                        <?php

                        if(have_rows('numeros')) {

                            while( have_rows('numeros')) : the_row();

                            ?>

                            <div>

                                <p class="number count"><?php the_sub_field("cifra"); ?></p>

                                <p class="desc"><?php the_sub_field("texto"); ?></p>

                            </div>

                            <?php

                            endwhile;

                        }

                        ?>

                    </div>

                    <?php

                    endwhile;

                }

                ?>

            </div>

        </section>

        <script>

        $(document).ready(function() {

            var anterior = null;

            $('.faq-wrap .faq-button').click(function(){

                if (anterior == this) {

                    anterior = null;

                } else {

                    $('.faq-wrap .faq-button').removeClass('faq-active')

                    $('.faq-wrap .faq-button').next('.faq-each-content').slideUp(400);

                }
                
                $(this).toggleClass('faq-active');

                $(this).next('.faq-each-content').slideToggle(400);
                
                anterior = this;

            });

        });

    // Number Increment

        Number.prototype.format = function(n) {

            var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');

            return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');

        };

        // Opacity Transition

        document.addEventListener("DOMContentLoaded", function(event) { 

            const targets = document.querySelectorAll('.count');

                const lazyLoad = target => {

                const io = new IntersectionObserver((entries, observer) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            const item = entry.target;

                            if (item.classList.contains("done")) {

                            } else {

                                $(item).prop('counter', 0).animate({

                                    counter: $(item).text()

                                }, {

                                    duration: 4000,

                                    easing: 'easeOutExpo',

                                    step: function (step) {

                                        $(item).text('+' + step.format());

                                    }

                                });

                                item.classList.add("done")

                            }

                        }

                    });

                });

                io.observe(target);

            };

            targets.forEach(lazyLoad);

        });

        </script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        
        <section class="mapa_interactivo">

            <div class="container-1-resp">

                <?php if(have_rows('mapa')): while(have_rows('mapa')): the_row(); ?>

                    <h2><?php the_sub_field("titulo"); ?></h2>

                </div>

                <div class="container-1-flex">

                    <div class="descr-map-container">

                        <p><?php the_sub_field("descripcion"); ?></p>

                    </div>

                    <div class="container-2-resp">

                        <div id="map"></div>

                        <script>

                            // Creation of the map

                            var map = L.map('map', {

                                minZoom: 3, // Limit zoom out

                            }).setView([40.4168, -3.7038], 6); // Coordinates Madrid
                            
                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {

                                maxZoom: 19,

                                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'

                            }).addTo(map);

                            function add_point(title, desc, img_url, link, x, y) {

                                var marker = L.marker([x, y]).addTo(map);

                                marker.bindPopup("<b>" + title + "</b><br>" + desc + "<br><img src='" + img_url + "'><br><a href='" + link + "'>Más información</a>");

                                // Show popup and center map when clicked

                                marker.on('click', function () {

                                    this.openPopup();

                                    let zoomLevel = map.getZoom();

                                    // If zoom level is less than 6, we move further from the point

                                    if (zoomLevel < 6) {

                                        let xOffset = 6 - zoomLevel;  // Adjust the offset proportionally

                                        map.setView([x + xOffset, y], 6, {animate: true});

                                    } else {

                                        // For zoom level 6 or greater, use smaller offsets based on zoom

                                        let xOffset = 2 / Math.pow(2, zoomLevel - 6); // Adjust based on zoom level

                                        map.setView([x + xOffset, y], zoomLevel, {animate: true});

                                    }
                                });
                            }
                        </script>

                        <?php if(have_rows('eventos')): ?>

                            <script>

                                <?php while(have_rows('eventos')): the_row(); ?>

                                    add_point(

                                        '<?php echo esc_js(get_sub_field("titulo")); ?>', 

                                        '<?php echo esc_js(get_sub_field("descripcion")); ?>', 

                                        '<?php echo esc_url(get_sub_field("imagen")); ?>', 

                                        '<?php echo esc_url(get_sub_field("link")); ?>',

                                        <?php echo esc_js(get_sub_field("eje_x")); ?>, 

                                        <?php echo esc_js(get_sub_field("eje_y")); ?>

                                    );

                                <?php endwhile; ?>

                            </script>

                        <?php endif; ?>

                    </div>

                </div>

            <?php endwhile; endif; ?>

        </section>

        <section class="disposicion">

            <div class="container-1">

                <?php

                if(have_rows('disposicion')) {

                    while( have_rows('disposicion')) : the_row();

                    ?>

                    <h2><?php the_sub_field("titulo"); ?></h2>

                    <img src="<?php the_sub_field("imagen_principal"); ?>" class="princ-image">

                    <div class="disposicion-wrap">

                        <img src="<?php the_sub_field("imagen_secundaria"); ?>" class="sec-image">

                        <div>

                            <?php

                            if(have_rows('valores')) {

                                while( have_rows('valores')) : the_row();

                                ?>

                                <div>

                                    <p class="title"><?php the_sub_field("titulo"); ?></p>

                                    <p class="desc"><?php the_sub_field("descripcion"); ?></p>

                                </div>

                                <?php

                                endwhile;

                            }

                            ?>

                            <a class="button-generic <?php echo $popmake; ?>"><?php the_sub_field("boton"); ?></a>

                        </div>

                    </div>

                    <?php

                    endwhile;

                }

                ?>

            </div>

        </section>
    </div>
</article>