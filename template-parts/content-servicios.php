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

    <div class="page-template-hacemos-page">
        
        <?php

        
        if(have_rows('introduccion')) {

            while( have_rows('introduccion')) : the_row();

            ?>   

            <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

                <div class="container-1">

                    <h1><?php the_sub_field("titulo"); ?></h1>

                    <p><?php the_sub_field("descripcion"); ?></p>

                    <a href="#categories">

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                    </a>

                </div>

            </section>

            <?php

            endwhile;

        }

        ?>

        <section class="categories" id="categories">

            </br>

            </br>

            <div class="container-1">

                <?php

                $categories = get_categories( 

                    array( 

                        'taxonomy' => 'product_cat',

                        'meta_key' => 'orden',

                        'orderby' => 'orden',

                        'order' => 'ASC'

                    ) 

                );

                for ($i = 1; $i < count($categories); $i++) {

                    $color = get_field('color', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                    $color_suave = get_field('color_suave', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                    $imagen = null;

                    $icono = null;

                    $logo = null;

                    $btn_texto = null;

                    $btn_enlace = null;



                    if( have_rows('introduccion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id) ) {

                        while ( have_rows('introduccion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id) ) : the_row();

                            $titulo = get_sub_field('subdescripcion', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                            $imagen = get_sub_field('imagen_cuadrada', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                            $icono = get_sub_field('icono', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                            $logo = get_sub_field('logo', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id);

                        endwhile;

                    }



                    if( have_rows('boton_ver_productos', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id) ) {

                        while ( have_rows('boton_ver_productos', $categories[$i]->taxonomy . '_'. $categories[$i]->term_id) ) : the_row();

                            $btn_texto = get_sub_field('texto');

                            $btn_enlace = get_sub_field('enlace');

                        endwhile;

                    }



                    ?>

                    <div class="<?php echo $categories[$i]->name; ?>" style="--color: <?php echo $color; ?>;">

                        <div class="ilust">

                            <img class="backgroundimage" src="<?php echo $imagen; ?>" >

                            <img class="icon" src="<?php echo $icono; ?>" >

                            <img class="logo" src="<?php echo $logo; ?>" >

                        </div>

                        <div>

                            <p class="title" style="color:<?php echo $color; ?>;"><?php echo $titulo; ?></p>

                            <p class="desc"><?php echo $categories[$i]->description; ?></p>

                            <a class="button-generic" style="--color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; background-color:<?php echo $color; ?>; color:white;" href="<?php echo $btn_enlace; ?>"><?php echo $btn_texto; ?></a>

                        </div>

                    </div>

                    <?php

                }



                ?>

            </div>

        </section>



        <section class="sostenibilidad" id="sostenibilidad">

            <?php

            if(have_rows('sostenibilidad', $current_lang)) {

                while( have_rows('sostenibilidad', $current_lang)) : the_row();

                ?>

                <div class="container-3">

                    <div class="text">

                        <div>

                            <h2><?php the_sub_field('titulo'); ?></h2>

                            <hr>

                        </div>

                        <img src="<?php the_sub_field('imagen'); ?>" class="d-mobil">

                        <p><?php the_sub_field('subtitulo'); ?></p>

                    </div>

                    <div class="d-desktop">

                        <img src="<?php the_sub_field('imagen'); ?>">

                    </div>

                </div>

                <?php

                endwhile;

            }

            ?> 

        </section>
    
    </div>

</article>