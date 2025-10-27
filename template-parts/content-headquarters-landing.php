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

    <?php if(have_rows('introduccion')) {

        while( have_rows('introduccion')) : the_row();

        ?>   

        <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

            <div class="container-1">

                <h1><?php the_title(); ?></h1>

                <p><?php the_sub_field("descripcion"); ?></p>

                <a href="#soluciones">

                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                </a>

            </div>

        </section>


        <?php

        endwhile;

    } ?>
    
    </div>

</article>