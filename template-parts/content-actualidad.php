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

<script>

    var languageArrow = document.querySelector('.js-wpml-ls-item-toggle.wpml-ls-item-toggle');
    
    var languageText = document.querySelector('.wpml-ls-native');

    languageArrow.style.color = 'white';
    
    languageText.style.color = 'white';

</script>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if(have_rows('introduccion')) {

        while( have_rows('introduccion')) : the_row(); ?>   

            <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

                <div class="container-1">

                    <h1><?php the_sub_field("titulo"); ?></h1>

                    <p><?php the_sub_field("descripcion"); ?></p>

                    <a href="#categories">

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                    </a>

                </div>

            </section>

            <section class="categories" id="categories">

                </br>

                </br>

                <div class="container-1">

                    <style>
                        
                        

                    </style>

                    <?php if(have_rows('casos_de_exito')){

                        while( have_rows('casos_de_exito')) : the_row(); ?>

                            <div class="CasosExito" style="">

                                <div class="ilust">

                                    <img class="backgroundimage" src="<?php the_sub_field("imagen"); ?>" >

                                    <div class="caja">

                                        <div class="caja-each">

                                            <div class="caja-image">

                                                <p style = "color:white; z-index: 2;"> <?php the_sub_field("text"); ?> </p>

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                                <div>

                                    <p class="title" style="color:#000000"><?php the_sub_field("titulo"); ?></p>

                                    <p class="desc"><?php the_sub_field("descripcion"); ?></p>

                                    <a class="button-generic" style="--color:#976b4e; border-color:#976b4e; background-color:var(--green-1);; color:white;" href="<?php the_sub_field("link"); ?>"><?php the_sub_field("boton"); ?></a>

                                </div>

                            </div>

                        <?php endwhile;
                        
                    } ?>

                    <?php if(have_rows('noticias')){

                        while( have_rows('noticias')) : the_row(); ?>

                            <div class="Noticias" style="">

                                <div class="ilust">

                                    <img class="backgroundimage" src="<?php the_sub_field("imagen"); ?>">

                                    <div class="caja">

                                        <div class="caja-each">

                                            <div class="caja-image">

                                                <p style = "color:white; z-index: 2;"> <?php the_sub_field("text"); ?> </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div>
                                    
                                    <p class="title" style="color:#000000;"><?php the_sub_field("titulo"); ?></p>

                                    <p class="desc"><?php the_sub_field("descripcion"); ?></p>

                                    <a class="button-generic" style="--color:#976b4e; border-color:#976b4e; background-color:var(--green-1);; color:white;" href="<?php the_sub_field("link"); ?>"><?php the_sub_field("boton"); ?></a>
                                
                                </div>

                            </div>

                        <?php endwhile;

                    } ?>

                    <?php if(have_rows('trabaja_con_nosotros')){

                        while( have_rows('trabaja_con_nosotros')) : the_row(); ?>

                            <div class="TrabajaNosotros" style="">

                                <div class="ilust">

                                    <img class="backgroundimage" src="<?php the_sub_field("imagen"); ?>">

                                    <div class="caja">

                                        <div class="caja-each">

                                            <div class="caja-image">

                                                <p style = "color:white; z-index: 2;"> <?php the_sub_field("text"); ?> </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div>
                                    
                                    <p class="title" style="color:#000000;"><?php the_sub_field("titulo"); ?></p>

                                    <p class="desc"><?php the_sub_field("descripcion"); ?></p>

                                    <a class="button-generic" style="--color:#976b4e; border-color:#976b4e; background-color:var(--green-1); color:white;" href="<?php the_sub_field("link"); ?>"><?php the_sub_field("boton"); ?></a>
                                
                                </div>

                            </div>

                        <?php endwhile;

                    } ?>
                        
                </div>
                
            </section>

        <?php endwhile;

    } ?>

</article>